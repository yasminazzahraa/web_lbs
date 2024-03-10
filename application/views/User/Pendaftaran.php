
            <!-- Spinner Start -->
            <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                  <div class="spinner-grow text-primary m-1" role="status">
                      <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-dark m-1" role="status">
                      <span class="sr-only">Loading...</span>
                  </div>
                  <div class="spinner-grow text-secondary m-1" role="status">
                      <span class="sr-only">Loading...</span>
                  </div>
              </div>
              <!-- Spinner End -->
          
              <!-- Hero Start -->
              <div class="container-fluid bg-primary py-5 hero-header mb-5">
                  <div class="row py-3">
                      <div class="col-12 text-center">
                          <h1 class="display-3 text-white animated zoomIn">Data Pengirim</h1>
                      </div>
                  </div>
              </div>
              <!-- Hero End -->
          
              
              <!-- Form Pengaduan -->
              <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
              <?php echo $this->session->userdata("success"); ?>
              <form  method="post" action="<?=site_url('Delivery/Delivery/Pengiriman')?>">
                  <div class="row g-3">
                      <div class="col-12">
                          <input type="text" class="form-control border-0 bg-light px-4" name ="nama" placeholder="Masukan Nama Pengirim" style="height: 55px;" required>
                      </div>
                      <div class="col-12">
                          <input type="text" class="form-control border-0 bg-light px-4" name ="nama" placeholder="Masukan Nama Penerima" style="height: 55px;" required>
                      </div>
                      <div class="col-12">
                          <textarea class="form-control border-0 bg-light px-4 py-3" rows="5" name ="alamat" placeholder="Masukan Alamat" required></textarea>
                      </div>
                      <div class="col-12">
                      <div class="input-group mb-3">
                        <select class="form-control" name="provinsi" required>
                            <option value="" disabled selected>Pilih Provinsi</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Jawa Timur">Jawa Timur</option>
                        </select>
                      </div>
                      <div class="input-group mb-3">
                        <select class="form-control" name="kabupaten_kota" required>
                            <option value="" disabled selected>Pilih Kabupaten / Kota</option>
                            <option value="Kota Bandung">Kota Bandung</option>
                            <option value="Kabupaten Bandung">Kabupaten Bandung</option>
                            <option value="Kabupaten Bandung Barat">Kabupaten Bandung Barat</option>
                        </select>
                      </div>
                      <div class="input-group mb-3">
                        <select class="form-control" name="kecamatan" required>
                            <option value="" disabled selected>Pilih Provinsi</option>
                            <option value="Padalarang">Padalarang</option>
                            <option value="Cimahi Selatan">Cimahi Selatan</option>
                        </select>
                      </div>
                      <div class="col-12">
                          <input type="text" class="form-control border-0 bg-light px-4" name ="nama" placeholder="Masukan Kode Pos" style="height: 55px;" required>
                      </div>
                      
                </div>
                      
                      
                  </div>
                      <div class="col-12">
                          <button class="btn btn-dark w-100 py-3" type="submit" href="<?=site_url('Delivery/Delivery/DataPenerima')?>">Selanjutnya</button>
                      </div>
                  </div>
              </form>
              </div>
              <br>
              <br>
              <br>
              <br>
              <br>
            
          
              <!-- Form Pengaduan end -->

            