

            <?php

            class SosialMediaModel extends CI_Model
            {
                public function getSosialMedia()
                {
                    return $this->db->get('sosialmedia');
                }
                //Tamabahan
                public function getSosialMediaById($id)
                {
                    $this->db->where("id_sosialmedia",$id);
                    return $this->db->get('sosialmedia');
                }
                
                    
            }
            
         ?>
            
            