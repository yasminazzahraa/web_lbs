<?php
class Content extends CI_Controller
{
    public function __construct() {
        parent::__construct();
      
        $this->load->model("LoginModel","",TRUE);
        $this->load->model("SuperAdmin/DataPengirimanModel","",TRUE);
        $this->load->model("SuperAdmin/LaporanModel","",TRUE);
        $this->load->model("SuperAdmin/DataKurirModel","",TRUE);
        $this->load->model("SuperAdmin/DataPelangganModel","",TRUE);
    }

    public function index()
    {
        if($this->session->userdata('login_super')){
            $foto = $this->session->userdata('foto');
            $data['title'] = 'Halaman Beranda';
            //untuk ngambil data website
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/Modal');
        }else{
            redirect(site_url('Auth'));
        }
        
    }
    public function DataPengiriman() //menampilkan data website
    {
        if($this->session->userdata('login_super')){
            $foto = $this->session->userdata('foto');
            $data['title'] = 'Halaman Data Pengiriman';
            $data['datapengiriman'] = $this->DataPengirimanModel->getDataPengiriman(); //manggil method getWeb di class WebModel
            //untuk ngambil data website
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/DataPengirimanAdmin',$data);
            $this->load->view('SuperAdmin/Modal');
        }else{
            redirect(site_url('Auth'));
        }
    }

    public function Laporan() //menampilkan data pengaduan 
        {
            if($this->session->userdata('login_super')){
                $foto = $this->session->userdata('foto');
                $data['title'] = 'Halaman Laporan';
                $data['laporan'] = $this->LaporanModel->getLaporan(); //manggil method getFeed di class FeedModel
                $this->load->view('SuperAdmin/Navbar', $data);
                $this->load->view('SuperAdmin/LaporanAdmin',$data);
                $this->load->view('SuperAdmin/Modal');
            }else{
                redirect(site_url('Auth'));
            }
    
    }

    public function DataKurir()
                {
                    if($this->session->userdata('login_super')){
                        $foto = $this->session->userdata('foto');
                        $data['title'] = 'Halaman Data Kurir';
                        $data['datakurir'] = $this->DataKurirModel->getDataKurir();
                        $this->load->view('SuperAdmin/Navbar', $data);
                        $this->load->view('SuperAdmin/DataKurir',$data);
                        $this->load->view('SuperAdmin/Modal');
                    }else{
                        redirect(site_url('Auth'));
                    }
                }
    
    public function DataPelanggan()
                {
                    if($this->session->userdata('login_super')){
                        $foto = $this->session->userdata('foto');
                        $data['title'] = 'Halaman Data Pelanggan';
                        $data['datapelanggan'] = $this->DataPelangganModel->getDataPelanggan(); //manggil method getWeb di class WebModel
                        //untuk ngambil data website
                        $this->load->view('SuperAdmin/Navbar', $data);
                        $this->load->view('SuperAdmin/DataPelanggan',$data);
                        $this->load->view('SuperAdmin/Modal');
                    }else{
                        redirect(site_url('Auth'));
                    }
                }
            

    public function TambahDataKurir()
                {
                    if($this->session->userdata('login_super')){
                        $data['title'] = 'Halaman Tambah Data Kurir';
                        $data['datakurir'] = $this->DataKurirModel->getDataKurir();
                        $this->load->view('SuperAdmin/Navbar', $data);
                        $this->load->view('SuperAdmin/TambahDataKurir',$data);
                        $this->load->view('SuperAdmin/Modal');
                    }else{
                        redirect(site_url('Auth'));
                    }
                }
    public function prosesTambahDataKurir(){
                    if ($this->DataKurirModel->prosesTambahDataKurir()) {
                        redirect(site_url("SuperAdmin/Content/DataKurir"));
                    } else {
                        redirect(site_url("SuperAdmin/Content/TambahDataKurir"));
                    }
                }
    public function UpdateDataKurir($id)
                {
                    if($this->session->userdata('login_super')){
                        $data['title'] = 'Halaman Update Data Kurir';
                        $data['datakurir'] = $this->DataKurirModel->getDataKurirById($id)->row();
                        $this->load->view('SuperAdmin/Navbar', $data);
                        $this->load->view('SuperAdmin/UpdateDataKurir',$data);
                        $this->load->view('SuperAdmin/Modal');
                    }else{
                        redirect(site_url('Auth'));
                    }
                }
    public function prosesUpdateDataKurir($id){
                    if ($this->DataKurirModel->prosesUpdateDataKurir($id)) {
                        redirect(site_url("SuperAdmin/Content/DataKurir"));
                    } else {
                        redirect(site_url("SuperAdmin/Content/UpdateDataKurir"));
                    }
                }
    public function deleteDataKurir($id) {
                    $this->DataKurirModel->deleteDataKurir($id);
                    redirect(site_url("SuperAdmin/Content/DataKurir"));
                }













        
    public function admin() //menampilkan data super admin
    {
        if($this->session->userdata('login_super')){
            $foto = $this->session->userdata('foto');
            $data['title'] = 'Halaman Setting Super Admin';
            $data['admin'] = $this->LoginModel->getAdmin(); //manggil method getAdmin di class LoginModel
            //untuk ngambil data admin
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/admin',$data);
            $this->load->view('SuperAdmin/Footer');
            $this->load->view('SuperAdmin/Modal');
        }else{
            redirect(site_url('Auth'));
        }

    }
    public function Adminpuskesmas($kode_puskesmas) //menampilkan data admin puskesmas
    {
        if ($this->session->userdata('login_super')) {
            $data['title'] = 'Halaman Detail Web';
            $this->load->model('SuperAdmin/WebModel');
            $data['admin'] = $this->WebModel->getWebadmin($kode_puskesmas); //manggil method getWebadmin di class WebModel
            //berdasarkan kode puskesmas
            $data['data_admin'] = $this->WebModel->getAdminpus($kode_puskesmas); //manggil method getAdminpus di class WebModel
            //berdasarkan kode puskesmas
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/Adminpus', $data);
            $this->load->view('SuperAdmin/Footer');
            $this->load->view('SuperAdmin/Modal');
        } else {
            redirect(site_url('Auth'));
        }
    }
    
    public function TambahAdmin() //menampilkan form tambah super admin
    {
        if($this->session->userdata('login_super')){
            $foto = $this->session->userdata('foto');
            $data['title'] = 'Halaman Tambah Super Admin';
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/TambahAdmin',$data);
            $this->load->view('SuperAdmin/Footer');
            $this->load->view('SuperAdmin/Modal');
        }else{
            redirect(site_url('Auth'));
        }

    }
    public function deleteAdmin($id) { //menghapus data super admin
        $this->LoginModel->deleteAdmin($id); //manggil method deleteAdmin di class LoginModel berdasarkan id
        redirect(site_url("SuperAdmin/Content/admin"));
    }
    public function UpdateAdmin($id) //menampilkan form update super admin
    {
        if($this->session->userdata('login_super')){
            $foto = $this->session->userdata('foto');
        
            $data['title'] = 'Halaman Update Super Admin';
            $data['admin'] = $this->LoginModel->getAdminById($id)->row(); //manggil method getAdminById di class LoginModel
            //berdasarkan id untuk mengambil satu baris data (per id nya)
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/UpdateAdmin',$data);
            $this->load->view('SuperAdmin/Footer');
            $this->load->view('SuperAdmin/Modal');
        }else{
            redirect(site_url('Auth'));
        }

    }
    public function Berita() //menampilkan data berita
    {
        if($this->session->userdata('login_super')){
           $foto = $this->session->userdata('foto');
            $data['title'] = 'Halaman Setting Berita';
            $data['berita'] = $this->BeritaModel->getBerita(); //manggil method getBerita di class BeritaModel
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/Berita',$data);
            $this->load->view('SuperAdmin/Footer');
            $this->load->view('SuperAdmin/Modal');
        }else{
            redirect(site_url('Auth'));
        }
    }
    public function TambahBerita() //menampilkan form tambah berita 
    {
        if($this->session->userdata('login_super')){
            $data['title'] = 'Halaman Tambah Berita';
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/TambahBerita',$data);
            $this->load->view('SuperAdmin/Footer');
            $this->load->view('SuperAdmin/Modal');
        }else{
            redirect(site_url('Auth'));
        }
    }
    public function prosesTambahBerita(){ //buat proses tambah beritanya
        if ($this->BeritaModel->prosesTambahBerita()) { //manggil method prosesTambahBerita di class BeritaModel
            //dilakukan pengecekan apakah form tambah data telah diisi
            redirect(site_url("SuperAdmin/Content/Berita")); //url dialihkan dengan menampilkan halaman data berita 
            //jika form tambah data telah diisi dan berhasil menambahkan data
        } else {
            redirect(site_url("SuperAdmin/Content/TambahBerita")); //tetap menampilkan halaman tambah berita
        }
    }
    public function UpdateBerita($id) //menampilkan form update berita
    {
        if($this->session->userdata('login_super')){
            $data['title'] = 'Halaman Tambah berita';
            $data['berita'] = $this->BeritaModel->getBeritaById($id)->row(); //manggil method getBeritaById di class BeritaModel
            //berdasarkan id untuk mengambil satu baris data (per id nya)
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/UpdateBerita',$data);
            $this->load->view('SuperAdmin/Footer');
            $this->load->view('SuperAdmin/Modal');
        }else{
            redirect(site_url('Auth'));
        }
    }
    public function prosesUpdateBerita($id){  //buat proses update beritanya
        if ($this->BeritaModel->prosesUpdateBerita($id)) {  //manggil method prosesTambahBerita di class BeritaModel berdasarkan id
            //dilakukan pengecekan apakah terdapat perubahan pada data di form
            redirect(site_url("SuperAdmin/Content/Berita")); //url dialihkan dengan menampilkan halaman data berita
            //dengan data telah berhasil diupdate 
        } else {
            redirect(site_url("SuperAdmin/Content/UpdateBerita/$id")); //tetap menampilkan halaman update berita
        }
    }
    public function deleteBerita($id) { //menghapus data berita
        $this->BeritaModel->deleteBerita($id); //manggil method deleteBerita di class BeritaModel berdasarkan id
        redirect(site_url("SuperAdmin/Content/Berita"));
    }
    public function BalasPengaduan($id) //menampilkan form balas pengaduan
    {
        if($this->session->userdata('login_super')){ //masuk ke sesi login 
            $foto = $this->session->userdata('foto');  
            $data['title'] = 'Balas Pengaduan';
            $data['umpan_balik'] = $this->FeedModel->getFeedById($id)->row(); //manggil method getFeedById di class FeedModel
            //berdasarkan id untuk mengambil satu baris data (per id nya)
            $this->load->view('SuperAdmin/Navbar', $data);
            $this->load->view('SuperAdmin/BalasPengaduan',$data);
            $this->load->view('SuperAdmin/Footer');
            $this->load->view('SuperAdmin/Modal');
        }else{
            redirect(site_url('Auth'));
        }

    }
    public function BalasPesan() { //mengirimkan balasan pengaduan ke email
        $this->FeedModel->balaspesan(); //manggil method balaspesan dari class FeedModel
        redirect(site_url("SuperAdmin/Content/Feed")); //diarahkan ke halaman data pengaduan
    }
        
}
?>