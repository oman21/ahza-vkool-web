<section class="page-title page-title-2 image-bg overlay">
    <div class="background-image-holder">
        <img alt="Background Image" class="background-image" src="<?=base_url()?>assets/front/material/home2.jpg" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="uppercase mb0">Portofolio OTOMOTIF</h3>
                <p class="lead mb0"></p>
            </div>
            <div class="col-md-6 text-right">
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
<section class="projects pt48">
    <div class="container">
        <!--end of row-->
        <div class="row masonry-loader">
            <div class="col-sm-12 text-center">
                <div class="spinner"></div>
            </div>
        </div>
        <div class="row masonry masonryFlyIn">
            <?php foreach($data as $row){ ?>
            <div class="col-md-3 col-sm-6 masonry-item project" data-filter="Jakarta">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="<?=base_url()?>content/otomotif/portfolio/<?=$row->gambar?>" />
                        <div class="title">
                            <h5 class="uppercase mb0"><?=$row->nama?></h5>
                        </div>
                    </a>
                </div>
            </div>  
            <?php } ?>                                           
        </div>
        <!--end of row-->
    </div>
</section>