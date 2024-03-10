
<div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text">Data Kurir</h6>
                    </div>
                    <div class="card-body">
                        <div class="box">
                        <div class="box-header d-flex justify-content-between">
                            
                            <a href="<?php echo site_url('SuperAdmin/Content/TambahDataKurir'); ?>" class="btn btn-success mb-3">Tambah Data Kurir</a>
                        </div>

                            <div class="box-body">
                                <div class="table-responsive">
                                <?php echo $this->session->userdata("success"); ?>
                                    <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id Kurir</th>
                                                <th>Nama Kurir</th>
                                                <th>No Telepon Kurir</th>
                                                <th>Opsi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                        <?php
                                            foreach ($datakurir->result() as $row) {
                                                $edit = '<a class="btn btn-success  btn-sm" href="' . site_url("SuperAdmin/Content/UpdateDataKurir/" . $row->id_kurir) . '"><i class="fas fa-edit"></i></a>';
                                                $hapus = '<a class="btn btn-danger btn-sm" href="#" data-toggle="modal" data-target="#deleteModal_' . $row->id_kurir . '"><i class="fas fa-trash"></i></a>';
                                                echo "<tr>";
                                                echo "<td>" . $row->id_kurir . "</td>";
                                                echo "<td>" . $row->nama_kurir . "</td>";
                                                echo "<td>" . $row->no_telp_kurir . "</td>";
                                                echo "<td class='text-center'>" . $edit . " " . $hapus . "</td>";
                                                echo "</tr>";
                                                // Modal konfirmasi hapus
                                                echo '<div class="modal fade" id="deleteModal_' . $row->id_kurir . '" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">';
                                                echo '    <div class="modal-dialog">';
                                                echo '        <div class="modal-content">';
                                                echo '            <div class="modal-header">';
                                                echo '                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>';
                                                echo '                <button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                                                echo '                    <span aria-hidden="true">&times;</span>';
                                                echo '                </button>';
                                                echo '            </div>';
                                                echo '            <div class="modal-body">';
                                                echo '                Apakah Anda yakin ingin menghapus Akun ' . $row->nama_kurir .'?';
                                                echo '            </div>';
                                                echo '            <div class="modal-footer">';
                                                echo '                <a href="' . site_url("SuperAdmin/Content/deleteDataKurir/" . $row->id_kurir) . '" class="btn btn-danger">Ya</a>';
                                                echo '                <button type="button" class="btn btn-success" data-dismiss="modal">Tidak</button>';
                                                echo '            </div>';
                                                echo '        </div>';
                                                echo '    </div>';
                                                echo '</div>';
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

            