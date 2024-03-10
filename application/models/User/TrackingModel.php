
            <?php

            class TrackingModel extends CI_Model
            {
                public function getTracking()
                {
                    return $this->db->get('sejarah');
                }
                //Tamabahan
                public function getTrackingById($id)
                {
                    $this->db->where("id_sejarah",$id);
                    return $this->db->get('sejarah');
                }
                
                
                    
            }
            
        ?>

            