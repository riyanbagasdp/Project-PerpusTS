<?php
class Usermodel extends CI_Model{
    function __construct(){
        $this->load->database();
    }
    function get_user(){
        $query = $this->db->query("SELECT * FROM user");
        return $query->result();
    }
    function get_detailuser($a)
    {
    $this->db->where('id', $a);
    return $this->db->get('user')->row_array();
    }
    function insert($a)
    {
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'telepon' => $a ['telepon'],
            'alamat' => $a ['alamat'],
        ];
        return $this->db->insert('user', $data);
    }
    function delete ($id){
        $this->db->where('id',$id);
        return $this->db->delete('user');
    }
    public function update ($a,$id){
        $data = [
            'nama' => $a['nama'],
            'email' => $a['email'],
            'telepon' => $a ['telepon'],
            'alamat' => $a ['alamat'],
        ];
        $this->db->where('id',$id);
        return $this->db->update('user', $data);
    }

    function auth ($email, $pwd) {
		$this->db->where('email', $email);
		$this->db->where('password', $pwd);
		if($this->db->get('user')->num_rows() == 1) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

    function update_cookie($cookie, $email) {
		$data = [
			'cookie' => $cookie
		];
		$this->db->where('email', $email);
        return $this->db->update('user', $data);
	}

}
?>