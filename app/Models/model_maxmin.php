<?php

namespace App\Models;

use CodeIgniter\Model;

class model_maxmin extends Model
{
    protected $table = 'konversi_penilaian';

    public function tampilmaxmin()
    {
        // Ambil data konversi_penilaian
        $dataquery1 = $this->db->query("SELECT * FROM konversi_penilaian");
        $rdataquery1 = $dataquery1->getResultArray();

        // Ambil data data_kriteria
        $dataquery2 = $this->db->query("SELECT * FROM data_kriteria");
        $rdataquery2 = $dataquery2->getResultArray();

        // Hitung nilai optimasi menggunakan metode Moora
        $optimizedData = $this->calculateMooraOptimization($rdataquery1, $rdataquery2);

        // Hitung nilai maximum, minimum, dan Y
        $maxMinY = $this->calculateMaxMinY($optimizedData);

        return $maxMinY;
    }

    private function calculateMooraOptimization($konversiData, $kriteriaData)
    {
        $result = [];

        // Loop untuk setiap alternatif
        foreach ($konversiData as $alternatif) {
            $optimizationValues = [];

            // Loop untuk setiap kriteria
            foreach ($kriteriaData as $kriteria) {
                $actualValue = $alternatif[$kriteria['kode']];
                $sumOfSquares = 0;

                // Hitung sum of squares
                foreach ($konversiData as $alt) {
                    $sumOfSquares += pow($alt[$kriteria['kode']], 2);
                }

                // Hitung normalized value
                $normalizedValue = $actualValue / sqrt($sumOfSquares);

                // Hitung nilai optimasi
                $optimizedValue = $normalizedValue * $kriteria['nilai_kriteria'];

                // Tambahkan nilai optimasi ke array
                $optimizationValues[] = $optimizedValue;
            }

            // Tambahkan hasil optimasi ke array hasil
            $result[] = [
                'id_konversi' => $alternatif['id_konversi'],
                'nama_media' => $alternatif['nama_media'],
                'C1' => $optimizationValues[0],
                'C2' => $optimizationValues[1],
                'C3' => $optimizationValues[2],
                'C4' => $optimizationValues[3],
                'C5' => $optimizationValues[4],
            ];
        }

        return $result;
    }

    private function calculateMaxMinY($optimizedData)
    {
        $maxMinY = [];

        // Loop untuk setiap alternatif
        foreach ($optimizedData as $alternatif) {
            $maxC = $alternatif['C2'] + $alternatif['C3'] + $alternatif['C4'] + $alternatif['C5'];
            $minC = $alternatif['C1'];
            $y = $maxC - $minC;

            // Tambahkan hasil perhitungan ke array maxMinY
            $maxMinY[] = [
                'nama_media' => $alternatif['nama_media'],
                'Maximum' => $maxC,
                'Minimum' => $minC,
                'Y' => $y,
            ];
        }

        return $maxMinY;
    }
}
