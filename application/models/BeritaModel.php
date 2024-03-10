<?php

            class BeritaModel extends CI_Model
            {
                public function getBerita() //ambil data berita
                {
                    return $this->db->get('berita'); //ambil data berita dari database untuk ditampilkan di halaman berita
                }
                public function getBeritaById($id) //ambil data berita berdasarkan id 
                {
                    $this->db->where("id_berita",$id); ////menjalankan query yang mengambil data dari database 
                    //di mana nilai kolom "id berita" sama dengan nilai variabel "id"
                    return $this->db->get('berita'); //ambil data berita dari database berdasarkan id
                }
                function totalData() { 
                    return $this->db->count_all('berita'); //menghitung jumlah semua data berita untuk ditampilkan di dashboard
                }
                public function prosesTambahBerita(){ //prosesnya buat nambahin berita
                    $judul = $this->input->post("judul"); //nerima input judul
                    $deskripsi = $this->input->post("deskripsi"); //nerima input deskripsi
                    $penulis = $this->input->post('penulis'); //nerima input penulis
                    $sumber = $this->input->post('sumber'); //nerima input sumber
                    
                    $berita = array( //data yang dikirim
                        "judul" => $judul,
                        "deskripsi" => $deskripsi,
                        "penulis" => $penulis,
                        "sumber" => $sumber,
                        "date_create" => date('Y-m-d H:i:s', Time()),
                    );
                    $config['upload_path'] = './asset/img'; //path gambar
                    $config['allowed_types'] = 'gif|jpg|png'; //tipe yang diperbolehkan

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('gambar')) { //apakah upload gambar atau tidak
                        $this->session->set_flashdata("error", "<div class='alert alert-danger' role='alert'>Gunakan format gambar yang sesuai (.gif/.jpg/.png) !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                        //format gambar yang diupload tidak sesuai
                        redirect($_SERVER['HTTP_REFERER']);
                    } else {
                        $upload_data = $this->upload->data(); //mengupload gambar
                        $berita['gambar'] = base_url("asset/img/") . $upload_data['file_name']; //nama file 
                    }

                    $this->db->where("id_berita"); //ambil data dari database berdasarkan id berita
                    $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Berita $judul berhasil di buat !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                    //berhasil membuat berita
                    return $this->db->insert("berita",$berita); //masukin data berita ke dalam database
                }
                public function prosesUpdateBerita($id) { //prosesnya buat update berita
                    $judul = $this->input->post("judul"); //ngambil inputan judul
                    $deskripsi = $this->input->post("deskripsi"); //ngambil inputan deskripsi
                    $penulis = $this->input->post('penulis'); //ngambil inputan penulis
                    $sumber = $this->input->post('sumber'); //ngambil inputan sumber
                    
                    $berita = array( //data yang disimpan
                        "judul" => $judul,
                        "deskripsi" => $deskripsi,
                        "penulis" => $penulis,
                        "sumber" => $sumber,
                        "date_create" => date('Y-m-d H:i:s', Time()), //tanggal dan waktu
                    );
                
                    $existing_berita = $this->db->get_where("berita", array("id_berita" => $id))->row(); //ngambil data berita
                    //berdasarkan id berita untuk mengambil satu baris data (per id nya)
                 
                    
                    // Check if a new image is uploaded
                    if ($_FILES['gambar']['error'] !== UPLOAD_ERR_NO_FILE) { //cek jika foto diupdate
                        $config['upload_path'] = './asset/img';
                        $config['allowed_types'] = 'gif|jpg|png';
                
                        $this->load->library('upload', $config);
                
                        if (!$this->upload->do_upload('gambar')) {
                            $this->session->set_flashdata("error", "<div class='alert alert-danger' role='alert'>Gunakan format gambar yang sesuai (.gif/.jpg/.png) !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                            //format gambar tidak sesuai
                            redirect($_SERVER['HTTP_REFERER']);
                        } else {
                            $upload_data = $this->upload->data(); //upload foto
                            $berita['gambar'] = base_url("asset/img/") . $upload_data['file_name']; //nama path penyimpanan
                
                            // Delete the old image if it exists
                            if (!empty($existing_berita->gambar)) { //jika gambar ada 
                                unlink($existing_berita->gambar); // hapus gambar lama
                            }
                        }
                    } else {
                        // No new image uploaded, retain the existing image
                        $berita['gambar'] = $existing_berita->gambar; //jika tidak ada upload gambar baru, tampilkan gambar yang sebelumnya
                    }
                
                    $this->db->where("id_berita", $id); //ngambil data berita di database berdasarkan id berita 
                    $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Berita $judul berhasil di update !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                    //berhasil update
                    return $this->db->update("berita", $berita); //mengupdate data berita pada database
                }

                function deleteBerita($id) {
                    $this->db->where("id_berita", $id); //ambil data berita dari database berdasarkan id berita
                    $berita = $this->db->get_where("berita", array("id_berita" => $id))->row(); //ngambil data berita
                    //berdasarkan id berita untuk mengambil satu baris data (per id nya)

                    if ($berita) {
                        $photoPath = str_replace(base_url(), FCPATH, $berita->gambar); // Convert URL to server path
                        //cek path foto nya
                        //str_replace untuk huruf depan kecil

                        if (file_exists($photoPath)) { //jika file ada
                            unlink($photoPath); //hapus foto di folder
                        }

                        $this->db->where("id_berita", $id); //ambil data berita dari database berdasarkan id berita
                        $this->db->delete("berita"); //menghapus data berita di database

                        $this->session->set_flashdata("success", "<div class='alert alert-success' role='alert'>Berita berhasil dihapus !<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                        //berhasil menghapus berita
                    } else {
                        $this->session->set_flashdata("error", "<div class='alert alert-danger' role='alert'>Berita tidak ditemukan!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
                        //gagal menghapus berita
                    }

                    
                }

                
            }
            ?>
            