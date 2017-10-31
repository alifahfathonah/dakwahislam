

        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">FORM EDIT DATA VIDEO</div>
                 <?=$this->session->flashdata('pesan')?>
                <div class="panel-body">
                <!-- FORM INSERT PRODUK -->
                  <form action="<?=base_url()?>Superadmin/proses_edit_video" method="POST" class="form-horizontal group-border-dashed" enctype="multipart/form-data">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Judul</label>
                      <div class="col-sm-6">
                        <input type="text" required="" value="<?=$row->judul?>" name="judul" data-parsley-minlength="5" placeholder="Masukan judul | Min 5 chars."  class="form-control">
                      </div>
                    </div>


                    <div class="form-group">
                      <label class="col-sm-3 control-label">Gambar Video</label>
                      <div class="col-sm-6">
                        <input type="file"   name="filefoto" class="form-control">
                        <!-- file gambar kita buat pada field hidden -->
                        <input type="hidden" name="filelama" class="form-control" value="<?php echo $row->image;?>">
                         <!-- Id gambar kita hidden pada input field dimana berfungsi sebagai identitas yang dibawa untuk update -->
                        <input type="hidden" name="kode" class="form-control" value="<?php echo $row->id_video;?>">
                        <!-- <label for="file-2" class="btn-primary"> <i class="mdi mdi-upload"></i><span>Browse files...</span></label> -->
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Link Video</label>
                      <div class="col-sm-6">
                        <input type="text" required="" value="<?=$row->link_video?>" name="link_video" data-parsley-minlength="5" placeholder="Masukan link url video | Min 5 chars."  class="form-control">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Kategori</label>
                      <div class="col-sm-6">
                        <select class="form-control" name="kategori">

                         <?php foreach ($kategori as $k) : ?>
                          <option value="<?php echo $k->id_kategori; ?>"><?php echo $k->nama ?></option>
                        <?php endforeach; ?> 
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
                      <label class="col-sm-3 control-label">Gambar video</label>
                      <div class="col-sm-6">
                      <img src="<?=base_url()?>assets/uploads/<?=$row->image?>" alt="" style="width:50%"></div>
                      </div>
                    </div>

                    <p align="center"><button type="submit" class="btn btn-space btn-primary btn-lg">Submit</button>
                       

                   
                  </form>
                  <!-- END FORM INSERT PRODUK -->
                </div>
              </div>
            </div>
          </div>



        </div>
