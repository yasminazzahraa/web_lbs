<?php

            class CorouselModel extends CI_Model
            {
                public function getCorousel()
                {
                    return $this->db->get('corousel');
                }
                public function getCorouselById($id)
                {
                    $this->db->where("id_corousel",$id);
                    return $this->db->get('corousel');
                }
                
            }
            ?>
            