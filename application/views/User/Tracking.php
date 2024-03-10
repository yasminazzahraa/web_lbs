
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
                            <h1 class="display-3 text-white animated zoomIn">Tracking Kurir</h1>
                        </div>
                    </div>
                </div>
                <!-- Hero End -->

                <!-- Isi Konten -->
                <div class="container mt-5">
                <div class="card wow zoomIn data-wow-delay=0.6s">
                    <div class="card-body wow zoomIn" data-wow-delay="0.6s">
                        <h1 style="text-align:left;">Berisi maps</h1>
                        <?php
                        foreach ($sejarah->result() as $row) {
                            echo $row->sejarah; // Use echo to display the content
                        }
                        ?>
                        
                    </div>
                </div>
                </div>
                <!-- Isi Konten End -->
            
            