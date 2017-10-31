

        <div class="main-content container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">FORM INSERT DATA USER</div>
                <div class="panel-body">
                <!-- FORM INSERT USER -->
                  <form action="<?php echo base_url()?>Superadmin/proses_insert_user" class="form-horizontal group-border-dashed" method="POST">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Nama Lengkap</label>
                      <div class="col-sm-6">
                        <input type="text" required="" name="fullname" data-parsley-minlength="3" placeholder="Masukan nama lengkap | Min 3 Karakter."  class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Email</label>
                      <div class="col-sm-6">
                        <input type="email"  parsley-type="email" placeholder="Masukan Email" autocomplete="off" required="" name="email"    class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" required="" name="password" data-parsley-minlength="5" placeholder="Masukan password | Min 5 karakter."  class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jenis Kelamin</label>
                      <div class="col-sm-6">
                      	<select class="form-control" name="jk">
                          <option value="Publish">Pria</option>
                          <option value="Draft">Wanita</option>
                        </select>
                      </div>
                    </div>

                    
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Alamat</label>
                      <div class="col-sm-6">
                        <textarea required="" name="alamat" placeholder="Masukan alamat" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">No Hp</label>
                      <div class="col-sm-6">
                        <input type="text" required="" name="no_hp" data-parsley-minlength="12" placeholder="Masukan no hp | Min 12 Karakter."  class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Status</label>
                      <div class="col-sm-6">
                      	<select class="form-control" name="status">
                          <option value="Aktif">Aktif</option>
                          <option value="Non Aktif">Non Aktif</option>
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
                  <!-- END FORM INSERT USER -->
                </div>
              </div>
            </div>
          </div>

        </div>
