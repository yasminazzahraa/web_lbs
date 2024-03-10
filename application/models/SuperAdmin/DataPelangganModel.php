<?php

class DataPelangganModel extends CI_Model
{
    //Kelola web
    public function getDataPelanggan()
    {
        return $this->db->get('datapelanggan'); //ngambil data website untuk ditampilkan di halaman web engine
    }
    
    
}
?>