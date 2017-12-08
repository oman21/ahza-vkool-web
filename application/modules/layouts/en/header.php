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
                        <a href="<?=base_url()?>en/home">
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
                                        Automotive
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <?php foreach(otomotif_menu($this->uri->segment(1)) as $row){?>
                                                <li>
                                                    <a href="<?=base_url()?>en/automotive/detail/<?=$row->link_code?>"><?=$row->en_nama?></a>
                                                </li>
                                                <?php } ?>
                                                <li>
                                                    <a href="<?=base_url()?>en/automotive/portfolio">Portfolio</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        Architectural
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <?php foreach(bangunan_menu($this->uri->segment(1)) as $row){?>
                                                <li>
                                                    <a href="<?=base_url()?>en/architectural/detail/<?=$row->link_code?>"><?=$row->nama?></a>
                                                </li>
                                                <?php } ?>
                                                <li>
                                                    <a href="<?=base_url()?>en/architectural/portfolio">Portfolio</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="">
                                        Price Estimation
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="<?=base_url()?>en/price-estimation-automotive">
                                                        Automotive
                                                    </a>
                                                </li>
                                                <lu>
                                                    <a href="<?=base_url()?>en/price-estimation-architectural">
                                                        Architectural
                                                    </a>
                                                </lu>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-dropdown">
                                    <a href="#">
                                        News
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="<?=base_url()?>en/event">Event</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>en/news">News</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>en/video">V-KOLL Video</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?=base_url()?>en/dealer">
                                        Dealer
                                    </a>
                                </li> 
                                <li class="has-dropdown">
                                    <a href="#">
                                        Contact Us
                                    </a>
                                    <ul class="mega-menu">
                                        <li>
                                            <ul>
                                                <li>
                                                    <a href="<?=base_url()?>en/about-vkool">About V-KOOL</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>en/warranty">Warranty Autenthicification</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>en/awards">Awards and Accolades</a>
                                                </li>
                                                <li>
                                                    <a href="<?=base_url()?>en/enquiry">Enquiry</a>
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
                                    <a href="#">ENG</a>
                                    <ul>
                                        <li>
                                            <a href="<?=base_url().$page?>">IND</a>
                                        </li>
                                        <li>
                                            <a>ENG</a>
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