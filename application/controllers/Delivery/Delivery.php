
            
            <?php
            class Delivery extends CI_Controller {
                public function __construct()
                {
                    parent::__construct();
                    $this->load->model("User/CorouselModel","",TRUE);
                    $this->load->model("LoginModel","",TRUE);
                    $this->load->model("User/TrackingModel","",TRUE);
                    $this->load->model("User/SosialMediaModel","",TRUE);
                    $this->load->model("User/PendaftaranModel","",TRUE);
                    ;

                }
                public function index()
                {

                    $data['title'] = 'Halaman Awal';
                    $data['corousel'] = $this->CorouselModel->getCorousel();
                    $data['sosialmedia'] = $this->SosialMediaModel->getSosialMedia();
                    $data['sejarah'] = $this->TrackingModel->getTracking();
                    $this->load->view('User/Navbar',$data);
                    $this->load->view('User/Dashboard',$data);
                    $this->load->view('User/PengirimanSaya',$data);
                    $this->load->view('User/Alamat',$data);
                    $this->load->view('User/Footer',$data);
                }
                public function Tracking()
                {

                    $data['title'] = 'Halaman Tracking';
                    
                    $data['sosialmedia'] = $this->SosialMediaModel->getSosialMedia();
                    $data['sejarah'] = $this->TrackingModel->getTracking();
                    $this->load->view('User/Navbar',$data);
                    $this->load->view('User/Tracking',$data);
                    $this->load->view('User/Footer',$data);
                }
                public function Pendaftaran()
                {

                    $data['title'] = 'Pendaftaran ';
                    $data['sosialmedia'] = $this->SosialMediaModel->getSosialMedia();
                    $data['sejarah'] = $this->TrackingModel->getTracking();
                    $this->load->view('User/Navbar',$data);
                    $this->load->view('User/Pendaftaran',$data);
                    $this->load->view('User/Footer',$data);
                }               
               
                
            }
            
            