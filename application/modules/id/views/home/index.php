<section class="cover fullscreen image-slider slider-all-controls controls-inside">
    <ul class="slides">
        <?php foreach ($slider as $row) { ?>

        <li class="image-bg bg-dark full-height">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="<?=base_url()?>assets/front/material/<?=$row->gambar?>" />
            </div>
            <div class="<?=$row->v_align?>">
                <div class="row <?=$row->h_align?>">
                    <div class="col-md-12">
                        <h2 class="<?=$row->text_color_judul?>"><?=$row->ind_judul?></h2>
                        <div class="row">
                            <p class="lead mb48 mb-xs-32 col-md-6 <?=$row->text_color_konten?>">
                                <?=$row->ind_konten?>
                                <?=$row->ind_tombol!=''?'<a class="btn btn-lg '.$row->text_color_tombol.' mb0" href="#">'.$row->ind_tombol.'</a>':''?>
                            </p>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </li>
    
        <?php } ?>
    </ul>
</section>
<section class="image-bg full-height">
    <div class="background-image-holder">
        <img alt="image" class="background-image" src="<?=base_url()?>assets/front/material/<?=$video->gambar?>" />
    </div>
    <div class="container-bottom">
        <div class="row">
            <div class="col-md-12 text-center">
                <a class="js-open-modal" href="#" data-modal-id="popup1"><h2><?=$video->ind_judul?></h2></a>
                <p class="lead mb48 mb-xs-32" >
                    <a href="<?=base_url()?>video" class="video-lainnya"><?=$video->ind_subjudul?> <i class="fa fa-play-circle-o"></i></a>
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<div id="popup1" class="modal-box">
  <div class="modal-body">
        <a href="#" class="js-modal-close close">×</a>
        <video id="somevid" controls autoplay loop>
            <source src="<?=base_url()?>assets/front/video/<?=$video->video?>" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
  </div>
</div>

<?php foreach ($section as $row) { ?>

<section class="image-bg full-height">
    <div class="background-image-holder">
        <img alt="image" class="background-image" src="<?=base_url()?>assets/front/material/<?=$row->gambar?>" />
    </div>
    <div class="<?=$row->v_align?>">
        <div class="row">
            <div class="col-md-12 <?=$row->h_align?>">
                <h2 class="<?=$row->text_color_judul?>"><?=$row->ind_judul?></h2>
                <p class="lead mb48 mb-xs-32">
                    <a class="btn btn-lg mb0 <?=$row->text_color_tombol?>" href="<?=base_url()?>home/detail/<?=$row->id?>"><?=$row->ind_tombol?></a>
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<?php } ?>

<script type="text/javascript" src="<?=base_url()?>assets/front/js/video-popup.js"></script>