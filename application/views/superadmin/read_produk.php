

        <div class="main-content container-fluid">
            <a href="<?php echo base_url()?>insert_produk">
                          <button type="button" class="btn btn-space btn-primary "><i class="icon icon-left mdi mdi-edit"></i>Tambah Data Produk</button>
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
                        <th>Kategori</th>
                        <th>Status</th>
                        <th>Tanggal Upload</th>
                        <th >Edit</th>
                        <th >Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach($query as $rowdata) { ?>
                      <tr class="odd gradeX">
                        <td><?=$rowdata->id_produk; ?></td>
                        <td><?=$rowdata->nama; ?></td>
                        <td>
                        <img src="<?php echo base_url();?>assets/uploads/<?=$rowdata->picture ?>" width="100px"> </td>
                         <td class="center"><?=$rowdata->kategori; ?></td>
                        <td class="center"><?=$rowdata->status; ?></td>
                        <td class="center"><?=$rowdata->datetime; ?></td>
                        <td>

                        	<a href="<?=base_url()?>edit_produk/?idgbr=<?=$rowdata->id_produk?>">
                             	<button type="button" class="btn btn-space btn-warning"><i class="icon icon-left mdi mdi-edit"></i>Edit</button>
                             </a>
                             </td>
                             <td>
                             <a onclick="return confirm('Apa anda yakin akan menghapus data ini ?')" 
                             href="<?php echo base_url('Superadmin/hapus_produk/'.$rowdata->id_produk)?>">
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
