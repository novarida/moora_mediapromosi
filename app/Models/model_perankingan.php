<?php

namespace App\Models;

use CodeIgniter\Model;

class model_perankingan extends Model
{
    protected $table = 'konversi_penilaian';

    public function tampilranking()
    {
        // Ambil data dari data_maxmin
        $mb = new model_maxmin();
        $dataPerankingan = $mb->tampilmaxmin();

        // Urutkan data berdasarkan nilai Y dari tertinggi ke terendah
        usort($dataPerankingan, function ($a, $b) {
            return $b['Y'] <=> $a['Y'];
        });

        // Beri peringkat
        $peringkat = 1;
        foreach ($dataPerankingan as &$data) {
            $data['Ranking'] = $peringkat++;
        }

        // Ambil kolom yang dibutuhkan
        $result = array_map(function ($data) {
            return [
                'nama_media' => $data['nama_media'],
                'Y' => $data['Y'],
                'Ranking' => $data['Ranking'],
            ];
        }, $dataPerankingan);

        return $result;
    }
}
