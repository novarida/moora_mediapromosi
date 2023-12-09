<?php

namespace App\Models;

use CodeIgniter\Model;

class model_databobot extends Model
{
    protected $table = 'data_bobot';

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilbobot()
    {
        $dataquery = $this->db->query("select * from data_bobot");
        return $dataquery->getResult();
    }

    function tambahbobot($data)
    {
        $this->db->table('data_bobot')->insert($data);
    }
    
    public function getBobot($id)
    {
        $dataquery = $this->db->table('data_bobot')->where('id_bobot', $id)->get();
        return $dataquery->getRow();
    }
    
    public function updatebobot($id, $data)
    {
        return $this->db->table('data_bobot')->where('id_bobot', $id)->update($data);
    }
    
    function deletebobot($id)
    {
        $this->db->table('data_bobot')->where('id_bobot', $id)->delete();
    }

}
