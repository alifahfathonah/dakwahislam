

        <div class="main-content container-fluid">
            <a href="<?php echo base_url()?>Superadmin/insert_pengaturan">
                          <button type="button" class="btn btn-space btn-primary "><i class="icon icon-left mdi mdi-edit"></i>Tambah Data Pengaturan</button>
                    </a>

           <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                
                    <?php echo $this->session->flashdata('pesan') ?>
                </div>
                <div class="panel-body">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Gambar</th>
                        <th >Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($query as $rowdata) { ?>
                      <tr class="odd gradeX">
                        <td><?=$rowdata->id_setting; ?></td>
                        <td><?=$rowdata->nama; ?></td>
                        <td>
                        <img src="<?php echo base_url();?>assets/setting_web/<?=$rowdata->gambar ?>" width="100px"> </td>
                        <td>

                        	<a href="<?=base_url()?>edit_pengaturan/?idgbr=<?=$rowdata->id_setting ?>">
                             	<button type="button" class="btn btn-space btn-warning"><i class="icon icon-left mdi mdi-edit"></i>Edit</button>
                             </a>
                             </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
