

        <div class="main-content container-fluid">

          <!-- <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark1" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc"></div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark2" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Monthly Sales</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="80" data-suffix="%" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark3" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Impressions</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="532" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark4" class="chart sparkline"></div>
                          <div class="data-info">
                            <div class="desc">Downloads</div>
                            <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span data-toggle="counter" data-end="113" class="number">0</span>
                            </div>
                          </div>
                        </div>
            </div>
          </div> -->
          

          <div class="row">
           <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark2" class="chart sparkline"><img src="<?php echo base_url()?>assets/img/video.png" width="60px" height="60px"></div>
                          <div class="data-info">
                            <div class="desc"><b>Jumlah Video</b></div>
                            <div class="value"><?=$jumlahvideo ?></span>
                            </div>
                          </div>
                        </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark2" class="chart sparkline"><img src="<?php echo base_url()?>assets/img/kategori.png" width="60px" height="60px"></div>
                          <div class="data-info">
                            <div class="desc"><b>Jumlah Kategori</b></div>
                            <div class="value"><?=$jumlahkategori ?></span>
                            </div>
                          </div>
                        </div>
            </div>

            <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="widget widget-tile">
                          <div id="spark1" class="chart sparkline"><img src="<?php echo base_url()?>assets/img/user.png" width="60px" height="60px"></div>
                          <div class="data-info">
                            <div class="desc"><b>Jumlah User</b></div>
                            <div class="value"><?=$jumlahuser ?></div>
                          </div>
                        </div>
            </div>

            <!-- 
          <div class="row">
          		 <div class="col-md-4">
              <div class="panel panel-default panel-table">
                <div class="panel-heading"> 
                  <div class="title"><b>Jumlah Video : <?= $jumlahvideo ?></b>  </div>
                  <a href="<?php echo base_url()?>Superadmin/read_video">View Detail</a>
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:10%;">ID</th>
                        <th style="width:20%;">Judul</th>
                        <th >Gambar</th>
                        <th >Link Video</th>
                        <th >Status</th>
                      </tr>
                    </thead>
                    <?php foreach($video as $v) : ?>
                    <tbody class="no-border-x">
                    <tr>
                      <td><?php echo strip_tags($v['id_video']) ?></td>
                      <td><?php echo $v['judul'] ?></td>
                      <td><a target="_blank" href="<?php echo base_url(); ?>assets/uploads/<?=$v['image']?>"><img src="<?php echo base_url(); ?>assets/uploads/<?=$v['image']?>" alt="" width="100px" /></a></td>
                       <td><?php echo $v['link_video'] ?></td>
                      <td><?php 
                      if($v['status'] == 'Publish') {
                      	echo "<button class='btn btn-space btn-success'>Publish</button>";
                      } else {
                      	echo "<button class='btn btn-space btn-danger'>Draft</button>";
                      }
                       ?></td>
                     </tr>
                    </tbody>
                <?php endforeach ?>
                  </table>
                </div>
              </div>
            </div> -->

<!-- 
             <div class="col-md-4">
              <div class="panel panel-default panel-table">
                <div class="panel-heading"> 
                  <div class="title"><b>Jumlah Setting Web : <?= $jumlahpengaturan ?></b>  </div>
                  <a href="<?php echo base_url()?>Superadmin/read_pengaturan">View Detail</a>
                </div>
                <div class="panel-body table-responsive">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:10%;">ID</th>
                        <th style="width:30%;">Nama</th>
                        <th >Gambar</th>
                        <th >Status</th>
                      </tr>
                    </thead>
                    <?php foreach($query as $rowdata) : ?>
                    <tbody class="no-border-x">
                    <tr>
                      <td><?=$rowdata->id_setting; ?></td>
                      <td><?=$rowdata->nama; ?></td>
                      <td><a target="_blank" href="<?php echo base_url();?>assets/setting_web/<?=$rowdata->gambar ?>"><img src="<?php echo base_url();?>assets/setting_web/<?=$rowdata->gambar ?>" alt="" width="100px" /></a></td>
                      <td>
                      		<a href="<?=base_url()?>Superadmin/edit_pengaturan/?idgbr=<?=$rowdata->id_setting ?>">
                             	<button type="button" class="btn btn-space btn-warning"><i class="icon icon-left mdi mdi-edit"></i> Edit</button>
                             </a>
                      </td>
                     </tr>
                    </tbody>
                <?php endforeach ?>
                  </table>
                </div>
              </div>
            </div> -->

          </div>



        </div>



