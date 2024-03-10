<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text">Laporan Pengiriman</h6>
        </div>
        <div class="card-body">
            <div class="box">

                <div class="box-body">
                    <div class="table-responsive">
                    <?php echo $this->session->userdata("success"); ?>
                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Id Kurir</th>
                                    <th>Nama Pengirim</th>
                                    <th>Nama Penerima</th>
                                    <th>No Telepon Pengirim</th>
                                    <th>No Telepon Penerima</th>
                                    <th>Jenis Barang</th>
                                    <th>Tanggal</th>
                                    <th>Status Transaksi</th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                            <?php
                                foreach ($laporan->result() as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $row->id_kurir. "</td>";
                                    echo "<td>" . $row->nama_pengirim . "</td>";
                                    echo "<td>" . $row->nama_penerima . "</td>";
                                    echo "<td>" . $row->no_telp_pengirim . "</td>";
                                    echo "<td>" . $row->no_telp_penerima . "</td>";
                                    echo "<td>" . $row->jenis_barang . "</td>";
                                    echo "<td>" . $row->tanggal . "</td>";
                                    echo "<td>" . $row->status_transaksi. "</td>";
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
