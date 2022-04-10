<?php
class Pinjammodel extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    function get_peminjaman(){
        $query = $this->db->query("SELECT * FROM peminjaman");
        return $query->result();
    }
    function get_detailpinjam($a)
    {
    $this->db->where('id', $a);
    return $this->db->get('peminjaman')->row_array();
    }
    function insert($a)
    {
        $data = [
            'tglpinjam' => $a['tglpinjam'],
            'nama' => $a['nama'],
            'bukupinjaman' => $a ['bukupinjaman'],
        ];
        return $this->db->insert('peminjaman', $data);
    }
    function delete ($id){
        $this->db->where('id',$id);
        return $this->db->delete('peminjaman');
    }
    public function update ($a,$id){
        $data = [
            'tglpinjam' => $a['tglpinjam'],
            'nama' => $a['nama'],
            'bukupinjaman' => $a ['bukupinjaman'],
        ];
        $this->db->where('id',$id);
        return $this->db->update('peminjaman', $data);
    }

}
?>