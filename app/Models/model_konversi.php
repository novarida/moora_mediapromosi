<?php

namespace App\Models;

use CodeIgniter\Model;

class model_konversi extends Model
{
    protected $table = 'konversi_penilaian';

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilkonversi()
    {
        $dataquery = $this->db->query("select * from konversi_penilaian");
        return $dataquery->getResult();
    }

    function tambahkonversi($data)
    {
        $this->db->table('konversi_penilaian')->insert($data);
    }

    public function getKonversi($id)
    {
        $dataquery = $this->db->table('konversi_penilaian')->where('id_konversi', $id)->get();
        return $dataquery->getRow();
    }

    function updatekonversi($id, $data)
    {
        $this->db->table('konversi_penilaian')->where('id_konversi', $id)->update($data);
    }

    function deletekonversi($id)
    {
        $this->db->table('konversi_penilaian')->where('id_konversi', $id)->delete();
    }

}
