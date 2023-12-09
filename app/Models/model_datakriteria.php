<?php

namespace App\Models;

use CodeIgniter\Model;

class model_datakriteria extends Model
{
    protected $table = 'data_kriteria';

    function __construct()
    {
        $this->db = db_connect();
        // helper(['form']);
    }

    function tampilkriteria()
    {
        $dataquery = $this->db->query("select * from data_kriteria");
        return $dataquery->getResult();
    }

    function tambahkriteria($data)
    {
        $this->db->table('data_kriteria')->insert($data);
    }
    
    public function getKriteria($id)
    {
        $dataquery = $this->db->table('data_kriteria')->where('id_kriteria', $id)->get();
        return $dataquery->getRow();
    }
    
    public function updatekriteria($id, $data)
    {
        return $this->db->table('data_kriteria')->where('id_kriteria', $id)->update($data);
    }
    
    function deletekriteria($id)
    {
        $this->db->table('data_kriteria')->where('id_kriteria', $id)->delete();
    }

}
