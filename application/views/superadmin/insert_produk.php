

        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">FORM INSERT DATA PRODUK</div>
                 <?=$this->session->flashdata('pesan')?>
                <div class="panel-body">
                <!-- FORM INSERT PRODUK -->
                  <form action="<?=base_url()?>Superadmin/proses_insert_produk" method="POST" class="form-horizontal group-border-dashed" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Produk</label>
                      <div class="col-sm-6">
                        <input type="text" required="" name="nama" data-parsley-minlength="3" placeholder="Masukan nama produk | Min 3 chars."  class="form-control">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-3 control-label">Gambar Produk</label>
                      <div class="col-sm-6">
                        <input type="file"   name="filefoto" class="form-control">
                        <!-- <label for="file-2" class="btn-primary"> <i class="mdi mdi-upload"></i><span>Browse files...</span></label> -->
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Deskripsi</label>
                      <div class="col-sm-6">
                        <textarea required="" name="deskripsi" placeholder="Masukan deskripsi produk" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Kategori</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="kategori">
                          <option value="Bahan Kain Kaos">Bahan Kain Kaos</option>
                          <option value="Bahan Kain Sprei">Bahan Kain Sprei</option>
                        </select>
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-3 control-label">Status</label>
                      <div class="col-sm-6">
                      	<select class="form-control" name="status">
                          <option value="Publish">Publish</option>
                          <option value="Draft">Draft</option>
                        </select>
                      </div>
                    </div>




                    


                    <div class="form-group">
                      <div class="col-sm-12 col-sm-10">
                        <p align="center">
                        <button type="submit" class="btn btn-space btn-primary btn-lg">Submit</button>
                        <button class="btn btn-danger btn-default btn-lg">Cancel</button></p>
                      </div>
                    </div>
                  </form>
                  <!-- END FORM INSERT PRODUK -->
                </div>
              </div>
            </div>
          </div>



        </div>
