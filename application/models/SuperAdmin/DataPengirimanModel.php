<?php

class DataPengirimanModel extends CI_Model
{
    //Kelola web
    public function getDataPengiriman()
    {
        return $this->db->get('datapengiriman'); //ngambil data website untuk ditampilkan di halaman web engine
    }
    
    
}
?>