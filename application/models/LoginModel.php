<?php

class LoginModel extends CI_Model
{
    public function getAdmin()
    {
        return $this->db->get('admin'); //ngambil data umpan balik untuk ditampilkan di halaman super admin
    }
    public function getAdminById($id)
    {
        $this->db->where("id_user",$id); //menjalankan query yang mengambil data dari database 
        //di mana nilai kolom "id_user" sama dengan nilai variabel "id"
        return $this->db->get('admin'); //ngambil data super admin dari database berdasarkan id
    }
    function updateLogin($id){
        $this->db->update("id_user", $id); //melakukan operasi update di dalam database, dimana 
        // id user yang akan diupdate berdasarkan id nya
    }
    //untuk cek username dan email yang sudah ada
    public function getUserByUsername($username)
    {
        return $this->db->get_where("admin", array("username" => $username))->row(); //ngambil data admin
        //berdasarkan username untuk mengambil satu baris data (per username nya)
    }
    public function getUserByEmail($email)
    {
        return $this->db->get_where("admin", array("email" => $email))->row(); //ngambil data admin
        //berdasarkan email untuk mengambil satu baris data (per email nya)
    }
    public function login()
    {
        $username = $this->input->post("username"); //ngambil inputan username
        $password = $this->input->post("password"); //ngambil inputan password

        $this->db->where("username", $username); //menjalankan query yang mengambil data dari database 
        //di mana nilai kolom "username" sama dengan nilai variabel "username"
        $query = $this->db->get("admin"); //ngambil data admin dari database

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $hashed_password = $row->password;

            if (password_verify($password, $hashed_password)) {
                return $row; 
            }
        }

        return null; 
    }

    public function get_user_by_email($email)
    {
        return $this->db->get_where('admin', ['email' => $email])->row_array();
    }

    public function set_reset_token($id, $token) //ngambil data sesuai id
    {
        $data = [
            'reset_token' => $token,
            'reset_token_expiration' => date('Y-m-d H:i:s', strtotime('+1 hour')), //kadaluarsa tokennya selama 1 jam
        ];

        $this->db->where('id_user', $id); //menjalankan query yang mengambil data dari database 
        //di mana nilai kolom "id_user" sama dengan nilai variabel "id"
        $this->db->update('admin', $data); //melakukan operasi update di dalam database, dimana 
        // admin yang akan diupdate berdasarkan data yg dimasukan
    }
    //mengambil data user by token
    public function get_user_by_reset_token($token)
    {
        return $this->db->get_where('admin', ['reset_token' => $token])->row_array();
    }
    //update pw
    public function update_password($id, $password)
    {
        
        $hashed_password = password_hash($password, PASSWORD_DEFAULT); //password di enkripsi

        $data = [
            'password' => $hashed_password,
        ];

        $this->db->where('id_user', $id); //menjalankan query yang mengambil data dari database 
        //di mana nilai kolom "id_user" sama dengan nilai variabel "id"
        $this->db->update('admin', $data); //melakukan operasi update di dalam database, dimana 
        // admin yang akan diupdate berdasarkan data yg dimasukan
    }

    //jika sudah berhasil mengupdate password, token akan otomatis terhapus
    //hapus token yang sudah di gunakan
    public function remove_reset_token($id)
    {
        $data = [
            'reset_token' => null,
            'reset_token_expiration' => null,
        ];

        $this->db->where('id_user', $id); //menjalankan query yang mengambil data dari database 
        //di mana nilai kolom "id_user" sama dengan nilai variabel "id"
        $this->db->update('admin', $data); //melakukan operasi update di dalam database, dimana 
        // admin yang akan diupdate berdasarkan data yg dimasukan
    }

    

}
