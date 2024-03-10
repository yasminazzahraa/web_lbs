
<div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text">Data Pelanggan</h6>
                    </div>
                    <div class="card-body">
                        <div class="box">

                            <div class="box-body">
                                <div class="table-responsive">
                                <?php echo $this->session->userdata("success"); ?>
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nama Pelanggan</th>
                                                <th>Email</th>
                                                <th>No telepon</th>
                                                <th>Alamat</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                            foreach ($datapelanggan->result() as $row) {
                                                echo "<tr>";
                                                echo "<td>" . $row->nama_pelanggan . "</td>";
                                                echo "<td>" . $row->email . "</td>";
                                                echo "<td>" . $row->no_telp_pelanggan . "</td>";
                                                echo "<td>" . $row->alamat . "</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            </div>

            