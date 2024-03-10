<?php

class LaporanModel extends CI_Model
{
    public function getLaporan()
    {
        return $this->db->get('laporan'); //ngambil data umpan balik untuk ditampilkan di halaman data pengaduan
    }
    //public function insertLayananPublik($umpan_balik)
    //{
     //   return $this->db->insert('umpan_balik', $umpan_balik); 
    //}
    
    
    
}
?>