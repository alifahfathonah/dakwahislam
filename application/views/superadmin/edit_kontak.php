

        <div class="main-content container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">FORM EDIT DATA KONTAK  
                <p align="right"><a href="<?php echo base_url('Superadmin/read_kontak')?>">
                  <button class="btn btn-default btn-default btn-lg">Kembali</button></a></p></div>
                <div class="panel-body">
                <!-- FORM INSERT USER -->
                <?php foreach($kontak as $k) { ?>

                  <form action="<?php echo base_url()?>Superadmin/proses_edit_kontak" class="form-horizontal group-border-dashed" method="POST">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Lengkap</label>
                      <div class="col-sm-6">
                       <input type="hidden" name="id_kontak" value="<?php echo $k->id_kontak ?>"></input>
                        <input type="text" required="" value="<?php echo $k->nama ?>" name="nama" data-parsley-minlength="3" placeholder="Masukan nama lengkap | Min 3 Karakter."  class="form-control">
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="col-sm-3 control-label">No HP</label>
                      <div class="col-sm-6">
                        <input type="text" required="" name="no_hp" value="<?php echo $k->no_hp ?>" data-parsley-minlength="12" placeholder="Masukan no hp | Min 12 Karakter."  class="form-control">
                      </div>
                    </div>



                     <div class="form-group">
                      <label class="col-sm-3 control-label">BBM</label>
                      <div class="col-sm-6">
                        <input type="text" required="" name="bb" value="<?php echo $k->bb ?>" data-parsley-minlength="8" placeholder="Masukan BBM | Min 8 Karakter."  class="form-control">
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
                        <button type="reset" class="btn btn-danger btn-default btn-lg">Cancel</button></p>
                      </div>
                    </div>
                  </form>
                  
                  <?php } ?>
                  <!-- END FORM INSERT USER -->
                </div>
              </div>
            </div>
          </div>

        </div>
