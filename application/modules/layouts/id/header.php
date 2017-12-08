<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>V-Kool Indonesia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?=base_url()?>assets/front/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?=base_url()?>assets/front/css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?=base_url()?>assets/front/css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?=base_url()?>assets/front/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?=base_url()?>assets/front/css/ytplayer.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?=base_url()?>assets/front/css/theme-red.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?=base_url()?>assets/front/css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="<?=base_url()?>assets/front/css/animatable.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?=base_url()?>assets/front/font-awesome/css/font-awesome.min.css">
        <link href="<?=base_url()?>assets/front/css/vkool.css" rel="stylesheet" type="text/css" media="all" />

        <script src="<?=base_url()?>assets/front/js/jquery.min.js"></script>
        <script src="<?=base_url()?>assets/front/js/jquery.chained.min.js"></script>
        <script src="<?=base_url()?>assets/front/js/jquery.validate.min.js"></script>
    </head>
    <body class="scroll-assist">
        <div class="nav-container">
            <a id="top"></a>
            <nav class="bg-dark">
                <div class="nav-bar">
                    <div class="module left">
                        <a href="<?=base_url()?>">
                            <img class="logo logo-light" alt="V-Kool Indonesia" src="<?=base_url()?>assets/front/img/v-kool_logo.png" />
                            <img class="logo logo-dark" alt="V-Kool Indonesia" src="<?=base_url()?>assets/front/img/v-kool_logo.png" />
                        </a>
                    </div>
                    <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="module-group right">
                        <div class="module left">
                            <ul class="menu">
                                <li class="has-dropdown">
                                    <a href="#">
                                        Otomotif
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <?php foreach(otomotif_menu($this->uri->segment(1)) as $row){?>
                                                <li>
                                                    <a href="<?=base_url()?>otomotif/detail/<?=$row->link_code?>"><?=$row->ind_nama?></a>
                                                </li>
                                                <?php } ?>
                                                <li>
                                                    <a href="<?=base_url()?>otomotif/portfolio">Portfolio</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Bangunan
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <?php foreach(bangunan_menu($this->uri->segment(1)) as $row){?>
                                                <li>
                                                    <a href="<?=base_url()?>bangunan/detail/<?=$row->link_code?>"><?=$row->nama?></a>
                                                </li>
                                                <?php } ?>
                                                <li>
                                                    <a href="<?=base_url()?>bangunan/portfolio">Portfolio</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                 <li class="has-dropdown">
                                    <a href="">
                                        Cek Harga
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="<?=base_url()?>cek-harga-otomotif">
                                                        Otomotif
                                                    </a>
                                                </li>
                                                <lu>
                                                    <a href="<?=base_url()?>cek-harga-bangunan">
                                                        Bangunan
                                                    </a>
                                                </lu>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Berita
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="<?=base_url()?>event">Event</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>berita">Berita</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>video">V-KOLL Video</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>dealer">
                                        Dealer
                                    </a>
                                </li> 
                                <li class="has-dropdown">
                                    <a href="#">
                                        Hubungi Kami
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="<?=base_url()?>tentang-vkool">Tentang V-KOOL</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>garansi-elektronik">Garansi Elektronik</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>penghargaan">Penghargaan</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>enquiry">Enquiry</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                 <li>
                                </li>                              
                            </ul>
                        </div>
                        <div class="module widget-handle language left">
                            <ul class="menu">
                                <li class="has-dropdown">
                                    <a>IND</a>
                                    <ul>
                                        <li>
                                            <a>IND</a>
                                        </li>
                                        <li>
                                            <a href="<?=base_url().'en/'.$page?>">ENG</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--end of module group-->
                </div>
            </nav>
        </div>
    <div class="main-container">