
            <?php

            class DataKurirModel extends CI_Model
            {
                public function getDataKurir()
                {
                    return $this->db->get('datakurir');
                }
                public function getDataKurirById($id)
                {
                    $this->db->where("id_kurir",$id);
                    return $this->db->get('datakurir');
                }
                public function insertDataKurir($datakurir)
                {
                    return $this->db->insert('datakurir', $datakurir);
                }
                public function prosesTambahDataKurir(){
                    $nama_kurir = $this->input->post("nama_kurir");
                    $no_telp_kurir = $this->input->post('no_telp_kurir');
                    
                    $datakurir = array(
                        "nama_kurir" => $nama_kurir,
                        "no_telp_kurir" => $no_telp_kurir,
                       
                    );

                    if ($this->DataKurirModel->insertDataKurir($datakurir)) {
                        $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Data Kurir berhasil ditambahkan !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                        redirect(site_url("SuperAdmin/Content/DataKurir"));
                    } else {
                        $this->session->set_flashdata("success", "<div class='alert alert-danger' role='alert'>Data Kurir gagal ditambahkan !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                        redirect(site_url("SuperAdmin/Content/TambahDataKurir"));
                    }
                }
                
                public function prosesUpdateDataKurir($id) {
                    $nama_kurir = $this->input->post("nama_kurir");
                    $no_telp_kurir = $this->input->post('no_telp_kurir');
                   
                  
                    $datakurir = array(
                        "nama_kurir" => $nama_kurir,
                        "no_telp_kurir" => $no_telp_kurir,
   
                    );
                    
                    $this->db->where("id_kurir", $id);
                    $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Data Kurir berhasil diupdate !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                    return $this->db->update("datakurir", $datakurir);
                }                      
                
                function deleteDataKurir($id) {
                    $this->db->where("id_kurir", $id);
                    $datakurir = $this->db->get_where("datakurir", array("id_kurir" => $id))->row();
                
                    if ($datakurir) {
                        
                            $this->db->where("id_kurir", $id);
                            $this->db->delete("datakurir");
                
                            $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Data Kurir berhasil dihapus !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                        
                    } else {
                        $this->session->set_flashdata("error", "<div class='alert alert-danger' role='alert'>Data Kurir tidak ditemukan!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                    }
                
                   
                }
                
            }
            ?>
            
            
            