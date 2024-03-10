

            <?php
            class PendaftaranModel extends CI_Model
            {
                public function getPendaftaran()
                {
                    return $this->db->get('Parongpong_pendaftaran');
                }
                

                public function getPendaftaranById($id)
                {
                    $this->db->where("id_pendaftaran", $id);
                    return $this->db->get('Parongpong_pendaftaran');
                }
                
            }

            ?>
            
            