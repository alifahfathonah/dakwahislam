

        <div class="main-content container-fluid">
            <a href="<?php echo base_url()?>Superadmin/insert_alamat">
                          <button type="button" class="btn btn-space btn-primary "><i class="icon icon-left mdi mdi-edit"></i>Tambah Data Alamat</button>
                    </a>

           <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Aktivitas</th>
                        <th>Waktu Log</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($log as $l) { ?>
                      <tr class="odd gradeX">
                        <td><?php echo $l->log_id; ?></td>
                        <td><?php echo $l->log_user; ?></td>
                        <td><?php echo $l->log_desc; ?></td>
                        <td><?php echo $l->log_time; ?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
