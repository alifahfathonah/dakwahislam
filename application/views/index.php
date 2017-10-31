

    <div class="main-wrap">
        <div class="section section-padding video-list-section">
            <div class="container">
                <div class="row">
                    <div class="show-listing">
                        <?php foreach ($semua_video as $a): ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                        
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="<?php echo base_url(); ?>assets/uploads/<?=$a['image']?>" alt="Movie Thumb">
                                    
                                    <div class="thumb-hover">
                                        <a class="play-video" href="<?php echo $a['link_video']?>"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-details">
                                    <h5 ><a href="#"><?php echo character_limiter(strip_tags($a['judul']), 55) ?></a></h5>
                                    <!-- <p class="video-release-on">22 Jun 2017</p> -->
                                </div>
                            </div>
                        
                        </div>
                        <?php endforeach ?>
                      
                        <!--
                        <div class="col-xs-12">
                            <!-- Video Pagination 
                            <nav class="navigation pagination" role="navigation">
                                <div class="nav-links">
                                    <span class="current-page">Page 2 of 14</span>
                                    <a class="prev page-numbers" href="#"><i class="fa fa-caret-left"></i></a>
                                    <a class="page-numbers" href="#">1</a>
                                    <span class="page-numbers current">2</span>
                                    <a class="page-numbers" href="#">3</a>
                                    <a class="page-numbers" href="#">4</a>
                                    <a class="next page-numbers" href="#"><i class="fa fa-caret-right"></i></a>
                                </div>
                            </nav>
                            <!-- Video Pagination End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
