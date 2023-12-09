<?php
namespace App\Models;
use CodeIgniter\Model;

class model_datamedia extends Model
{
    protected $table = 'data_media';

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        $dataquery = $this->db->query("select * from data_media");
        return $dataquery->getResult();
    }

    function tambahmedia($data)
    {
        $this->db->table('data_media')->insert($data);
    }

    public function getMedia($id)
    {
        $dataquery = $this->db->table('data_media')->where('id_media', $id)->get();
        return $dataquery->getRow();
    }

    public function updatemedia($id, $data)
    {
        return $this->db->table('data_media')->where('id_media', $id)->update($data);
    }

    function deletemedia($id)
    {
        $this->db->table('data_media')->where('id_media', $id)->delete();
    }

}
