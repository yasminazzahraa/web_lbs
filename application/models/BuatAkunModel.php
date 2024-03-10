
            <?php

            class BuatAkunModel extends CI_Model
            {
                public function getDataPelanggan()
                {
                    return $this->db->get('pelanggan');
                }
                public function getDataPelangganById($id)
                {
                    $this->db->where("id_pelanggan",$id);
                    return $this->db->get('pelanggan');
                }
                public function getUserByEmail($email)
                {
                    return $this->db->get_where("pelanggan", array("email" => $email))->row(); //ngambil data admin
                    //berdasarkan email untuk mengambil satu baris data (per email nya)
                }
                public function insertDataPelanggan($pelanggan)
                {
                    return $this->db->insert('pelanggan', $pelanggan);
                }
                public function prosesBuatAkun(){
                    $nama_pelanggan = $this->input->post("nama_pelanggan");
                    $email = $this->input->post('email');
                    $no_telp_pelanggan = $this->input->post("no_telp_kurir");
                    $password = $this->input->post('password');
                    
                    $pelanggan = array(
                        "nama_pelanggan" => $nama_pelanggan,
                        "email" => $email,
                        "no_telp_kurir" => $no_telp_kurir,
                        "password" => $password,
                       
                    );

                    if ($this->BuatAkunModel->insertDataPelanggan($pelanggan)) {
                        $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Data Kurir berhasil ditambahkan !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                        redirect(site_url("Auth/Login"));
                    } else {
                        $this->session->set_flashdata("success", "<div class='alert alert-danger' role='alert'>Data Kurir gagal ditambahkan !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                        redirect(site_url("Auth/BuatAkun"));
                    }
                }
                
            }
            ?>
            
            
            