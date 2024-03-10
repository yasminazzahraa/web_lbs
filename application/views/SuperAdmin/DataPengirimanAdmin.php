<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text">Data Pengiriman</h6>
        </div>
        <div class="card-body">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                    <?php echo $this->session->userdata("success"); ?>
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Kode Pengiriman</th>
                                    <th>Nama Pengirim</th>
                                    <th>Nama Penerima</th>
                                    <th>Alamat Pengirim</th>
                                    <th>Alamat Penerima</th>
                                    <th>No Telepon Pengirim</th>
                                    <th>No Telepon Penerima</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($datapengiriman->result() as $row) {
                                    $detail = '<a class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>';
                                    echo "<tr>";
                                    echo "<td>" . $row->kode_pengiriman . "</td>";
                                    echo "<td>" . $row->nama_pengirim . "</td>";
                                    echo "<td>" . $row->nama_penerima . "</td>";
                                    echo "<td>" . $row->alamat_pengirim . "</td>";
                                    echo "<td>" . $row->alamat_penerima . "</td>";
                                    echo "<td>" . $row->no_telp_pengirim . "</td>";
                                    echo "<td>" . $row->no_telp_penerima . "</td>";
                                    echo "<td>" . $row->tanggal. "</td>";
                                    echo "<td class='text-center'>" . $detail . " </td>";
                                    echo "</tr>";

                                    // Modal konfirmasi hapus
                                   
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