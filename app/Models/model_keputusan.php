<?php

namespace App\Models;

use CodeIgniter\Model;

class model_keputusan extends Model
{
    protected $table = 'konversi_penilaian';

    public function tampilakhir()
    {
        $mb = new model_perankingan();
        $dataAkhir = $mb->tampilranking();

        // Urutkan data berdasarkan nilai Y dari tertinggi ke terendah
        usort($dataAkhir, function ($a, $b) {
            return $b['Y'] <=> $a['Y'];
        });

        // Beri peringkat
        $peringkat = 1;
        foreach ($dataAkhir as &$data) {
            $data['Ranking'] = $peringkat++;
        }

        // Ambil kolom yang dibutuhkan
        $result = array_map(function ($data) {
            return [
                'nama_media' => $data['nama_media'],
                'Ranking' => $data['Ranking'],
            ];
        }, $dataAkhir);

        return $result;
    }
}
