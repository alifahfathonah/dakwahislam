

        <div class="main-content container-fluid">
            <a href="<?php echo base_url()?>insert_kontak">
                          <button type="button" class="btn btn-space btn-primary "><i class="icon icon-left mdi mdi-edit"></i>Tambah Data Kontak</button>
                    </a>

           <div class="row">
            <div class="col-sm-12">
              <div class="panel panel-default panel-table">
                <div class="panel-heading">
                
                    <?php echo $this->session->flashdata('edit') ?>
                    <?php echo $this->session->flashdata('insert') ?>
                    <?php echo $this->session->flashdata('hapus') ?>
                </div>
                <div class="panel-body">
                  <table id="table1" class="table table-striped table-hover table-fw-widget">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Nama </th>
                        <th>No HP</th>
                        <th>BB</th>
                        <th>Tanggal Buat</th>
                        <th>Status</th>
                        <th >Edit</th>
                        <th >Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($kontak as $k) { ?>
                      <tr class="odd gradeX">
                        <td><?php echo $k->id_kontak; ?></td>
                        <td><?php echo $k->nama; ?></td>
                        <td><?php echo $k->no_hp; ?></td>
                        <td class="center"><?php echo $k->bb; ?></td>
                        <td class="center"><?php echo $k->datetime; ?></td>
                        <td class="center"><?php echo $k->status; ?></td>
                        <td>

                        	<a href="<?php echo base_url('edit_kontak/'.$k->id_kontak)?>">
                             	<button type="button" class="btn btn-space btn-warning"><i class="icon icon-left mdi mdi-edit"></i>Edit</button>
                             </a>
                             </td>
                             <td>
                             <a onclick="return confirm('Apa anda yakin akan menghapus data ini ?')" href="<?php echo base_url('Superadmin/hapus_kontak/'.$k->id_kontak)?>">
                                <button type="button" class="btn btn-space btn-danger"><i class="icon icon-left mdi mdi-delete"></i>Hapus</button>
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
