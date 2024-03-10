
            
            <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold">Update Data Kurir</h6>
                    </div>
                    <div class="card-body">
                    <?php echo $this->session->userdata("error"); ?>
                        <form class="user" method="post" action="<?=site_url('SuperAdmin/Content/prosesUpdateDataKurir/' .$datakurir->id_kurir)?>" enctype="multipart/form-data">
                       
                            <div class="mb-2">
                                <label for="produk">Nama Kurir</label>
                                <input type="text" class="form-control" name="nama_kurir" placeholder="Masukan Nama Kurir" value="<?=$datakurir->nama_kurir?>"  required>
                            </div>
                            <div class="mb-2">
                                <label for="biaya">No Telepon Kurir</label>
                                <input type="number" class="form-control" name="no_telp_kurir" placeholder="Masukan No Telepon Kurir"  value="<?=$datakurir->no_telp_kurir?>" required>
                            </div>
                           
                            <hr>
                            <button type="submit" class="btn btn-success btn-user btn-block mb-3">Update Data Kurir</button>
                        </form>
                    </div>
                </div>
            </div>
            </div>

            