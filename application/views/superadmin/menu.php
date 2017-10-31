 <?php if ($role == 'Superadmin') { ?>
                  
                  <li class="divider">Menu Superadmin</li>
                          <li><a href="<?php echo base_url()?>Superadmin"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                          </li>
                          
                          <li><a href="<?php echo base_url()?>Superadmin/read_user"><i class="icon mdi mdi-account-box"></i><span>User</span></a>
                          </li>

                          <li><a href="<?php echo base_url()?>Superadmin/read_produk"><i class="icon mdi mdi-widgets"></i><span>Produk</span></a>
                          </li>

                          <li><a href="<?php echo base_url()?>Superadmin/read_kontak"><i class="icon mdi mdi-account-box-phone"></i><span>Kontak</span></a>
                          </li>

                          <li><a href="<?php echo base_url()?>Superadmin/read_alamat"><i class="icon mdi mdi-pin-drop"></i><span>Alamat</span></a>
                          </li>

                          <li><a href="<?php echo base_url()?>Superadmin/read_tentang"><i class="icon mdi mdi-city"></i><span>Tentang</span></a>
                          </li>

                          <li><a href="<?php echo base_url()?>Superadmin/read_pengaturan"><i class="icon mdi mdi-city"></i><span>Pengaturan</span></a>
                          </li>
                    <? } elseif ($role == 'admin') { ?>
                    <li class="divider">Menu Admin</li>
                          <li><a href="<?php echo base_url()?>Superadmin"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                            </li>

                            <li><a href="<?php echo base_url()?>Superadmin/read_produk"><i class="icon mdi mdi-widgets"></i><span>Produk</span></a>
                            </li>

                            <li><a href="<?php echo base_url()?>Superadmin/read_kontak"><i class="icon mdi mdi-account-box-phone"></i><span>Kontak</span></a>
                            </li>

                            <li><a href="<?php echo base_url()?>Superadmin/read_alamat"><i class="icon mdi mdi-pin-drop"></i><span>Alamat</span></a>
                            </li>

                            <li><a href="<?php echo base_url()?>Superadmin/read_tentang"><i class="icon mdi mdi-city"></i><span>Tentang</span></a>
                            </li>

                      <?php } ?>


                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="be-content">
        <div class="page-head">
          <h2 class="page-head-title"><?php echo $page ?></h2>


           <div role="alert" class="alert alert-primary alert-icon alert-dismissible">
                    <div class="icon"><span class="mdi mdi-info-outline"></span></div>
                    <div class="message">
                      <span aria-hidden="true" ></span><strong>Info!</strong><?php echo $info ?>
                  </div>
        </div>  