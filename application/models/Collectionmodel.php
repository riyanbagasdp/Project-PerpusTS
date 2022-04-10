<?php
class Collectionmodel extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    function get_koleksi(){
        $query = $this->db->query("SELECT * FROM koleksi");
        return $query->result();
    }
    function get_detail($a)
    {
    $this->db->where('id', $a);
    return $this->db->get('koleksi')->row_array();
    }
    function insert($a, $cover)
    {
        $data = [
            'nama' => $a['nama'],
            'penerbit' => $a['penerbit'],
            'penulis' => $a['penulis'],
            'kategori' => $a ['kategori'],
            'cover' => $cover
        ];
        return $this->db->insert('koleksi', $data);
    }
    function delete ($id){
        $this->db->where('id',$id);
        return $this->db->delete('koleksi');
    }
    public function update ($a,$id){
        $data = [
            'nama' => $a['nama'],
            'penerbit' => $a['penerbit'],
            'penulis' => $a['penulis'],
            'kategori' => $a ['kategori'],
            'cover' => $cover
        ];
        $this->db->where('id',$id);
        return $this->db->update('koleksi', $data);
    }
    public function update_cover($a,$id){
        $data=[
            'cover' => $a
            
        ];
        $this->db->where('id',$id);
        return $this->db->update('koleksi', $data);
    }
}
?>