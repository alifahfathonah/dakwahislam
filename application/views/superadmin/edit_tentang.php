

        <div class="main-content container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">FORM EDIT DATA TENTANG PERUSAHAAN
                <p align="right"><a href="<?php echo base_url('Superadmin/read_alamat')?>">
                  <button class="btn btn-default btn-default btn-lg">Kembali</button></a></p></div>
                <div class="panel-body">
                <!-- FORM INSERT USER -->
                <?php foreach($tentang as $t) { ?>

                 <form action="<?php echo base_url()?>Superadmin/proses_edit_tentang" class="form-horizontal group-border-dashed" method="POST">
                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Deskripsi</label>
                      <div class="col-sm-6">
                       <input type="hidden" name="id_tentang" value="<?php echo $t->id_tentang ?>"></input>
                        <textarea required=""  id="editor1" name="deskripsi" placeholder="Masukan Deskripsi">
                         <?php echo $t->deskripsi ?>
                        </textarea>
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
