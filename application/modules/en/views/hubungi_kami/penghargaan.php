<link href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css" rel="stylesheet" type="text/css" media="all" />
<link href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick-theme.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
<section class="page-title page-title-2 image-bg overlay">
      <div class="background-image-holder">
          <img alt="Background Image" class="background-image" src="<?=base_url()?>assets/front/material/home2.jpg" />
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <h2 class="uppercase mb8"> Awards and Accolades</h2>
                  <p class="lead mb0"></p>
              </div>
              <div class="col-md-6 text-right">
              </div>
          </div>
          <!--end of row-->
      </div>
      <!--end of container-->
  </section>
<section class="section-news">
<div class="container-penghargaan">
  <div class="slider center">
  	<?php foreach($list as $row){ ?>
    <div class="clip">
      <section>
        <figure class="new-arrivals ">
          <img class="" src="<?=base_url()?>content/penghargaan/<?=$row->gambar?>" title="image" alt="image">
          <figcaption class="text-area">
            <h4 class="heading"><?=$row->en_nama?></h4>
            <h3 class="name"><?=$row->en_konten?></h3>
          </figcaption>
        </figure>
      </section>
    </div>
    <?php } ?>
  </div>
</div>

<script type="text/javascript">
	if ($(window).width() > 600) {
		$('.center').slick({
		  centerMode: true,
		  infinite: true,
		  centerPadding: '60px',
		  slidesToShow: 3,
		  speed: 800,
		  variableWidth: false,
		  autoplay: true,
		});
	}else{
		$('.center').slick({
		  centerMode: true,
		  infinite: true,
		  centerPadding: '60px',
		  slidesToShow: 1,
		  speed: 800,
		  variableWidth: false,
		  autoplay: true,
		});
	}
</script>

