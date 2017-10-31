

        <div class="main-content container-fluid">

           <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                
                    <?php echo $this->session->flashdata('edit') ?>
                </div>
                <div class="panel-body">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Deskripsi</th>
                        <th>Tanggal Buat/Update</th>
                        <th >Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($tentang as $t) { ?>
                      <tr class="odd gradeX">
                        <td><?php echo $t->id_tentang; ?></td>
                        <td><?php echo $t->deskripsi; ?></td>
                        <td><?php echo $t->datetime; ?></td>
                        <td> 
                        	<a href="<?php echo base_url('Superadmin/edit_tentang/'.$t->id_tentang)?>">
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
