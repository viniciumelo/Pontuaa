<!DOCTYPE html>
<html>

<head>
   
    
</head>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $htmlTitle or ''}}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('assets/backend/css/all.css') }}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<!--global css starts-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">
    

    <link rel="stylesheet" href="{{ asset('assets/css2/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css2/style3.css') }}">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" href="{{ asset('assets/css2/tabbular.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css2/price.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css2/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fancybox/source/helpers/jquery.fancybox-buttons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css2/jquery.circliful.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/owl-carousel/owl.theme.css') }}">

   
    <!--end of page level css-->

    @yield('extra_styles')
</head>
<body>
    
    <header>
        <!-- Icon Section Start -->
        <div class="icon-section">
            <div class="container">
                <ul class="list-inline">
             <!--       <li>
                        <a href="http://facebook.com/"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com/"> <i class="livicon" data-name="instagram" data-size="18" data-loop="true" data-c="#fff" data-hc="#757b87"></i>
                        </a>
                    </li>
                    
                -->
                    <li class="pull-right">
                        <ul class="list-inline icon-position">
                            <li>
                                <a href="mailto:"><i class="livicon" data-name="mail" data-size="18" data-loop="true" data-c="#fff" data-hc="#fff"></i></a>
                                <label class="hidden-xs"><a href="mailto:" class="text-white">contato@vcompreeganhe.com.br</a></label>
                            </li>
                            
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- //Icon Section End -->
        <!-- Nav bar Start -->
        <nav class="navbar navbar-default container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
                    <span><a href="#"> <i class="livicon" data-name="responsive-menu" data-size="25" data-loop="true" data-c="#757b87" data-hc="#ccc"></i>
                    </a></span>
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" class="logo_position">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href=""> Home</a>
                    </li>
                    
                    
                   
                    
                    
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Visuaizar Meus Pontos</a>
                        <ul class="dropdown-menu" role="menu">                           
                            
                            </li>
                            <li><a href="">Pontos</a>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li ><a href="{{ route('login') }}">Login</a> 
                        
                    </li>
                    
                   
                    
                    
                </ul>
                
            </div>
        </nav>
        <!-- Nav bar End -->
    </header>
    <!-- //Header End -->
    <section id="banner" class="gradient-bg full-height">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Banner Caption-->
                    <div class="col-md-6">
                        <div class="caption-content">
                            <h1 class="font-700 color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s">Seus pontos valem muito.</h1>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.2s">O V Compre e Ganhe é  a plataforma  completa  de fidelização em pequenos  e médias empresas.</p>
                            <div class="caption-btn wow fadeInUp" data-wow-delay="0.3s">
                                <!-- <a class="font-600" href="#pricing">Quero ser VIP!</a> -->
                                <a class="font-600" href="https://play.google.com/store/apps/details?id=br.com.vcompreeganhe"><i class="icofont icofont-download-alt"></i> Baixar App</a>
                            
                            </div>
                            
                        </div>
                    </div>
                    <!--End Banner Caption-->

                    <!--Start Banner Image-->
                    <div class="col-md-6">
                        <div class="banner-img wow fadeIn" data-wow-delay="0.4s">
                            <img src="images/app.png" class="img-responsive" alt="Image" style="padding-top: 50px; max-width: 600px;">
                        </div>
                    </div>
                    <!--End Banner Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
    <!--Carousel Start -->
    <div id="owl-demo" class="owl-carousel owl-theme">
        <div class="item"><img src="images/slide_1.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/slide_2.jpg" alt="slider-image">
        </div>
        <div class="item"><img src="images/slide_3.jpg" alt="slider-image">
        </div>
    </div>
    <!-- //Carousel End -->
    <!-- Container Start -->
    <!-- //Carousel End -->
    <!-- Container Start -->
    <div class="container">
        <section class="purchas-main">
          <!--  <div class="container bg-border">
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <h1 class="purchae-hed">Baixe nosso aplicativo e aproveite seus pontos.</h1></div>
                    <div class="col-md-5 col-sm-5 col-xs-12"><a href="#" class="btn btn-primary purchase-styl pull-right">Baixe já</a></div>
                </div>
            </div> -->

          <!--  <div class="text-center marbtm10">
                <h3 class="border-danger"><span class="heading_border bg-danger">GERE CUPONS</span></h3>
            </div> -->

          <!--  <div class="sliders">
                
                <div class="container">
                <div class="row">
                <div class="col-md-3 col-sm-6  text-center ">
                    <div class="text-center center-block">
                        <div id="myStat3" class="center-block" data-startdegree="0" data-dimension="150" data-text="10%" data-width="4" data-fontsize="28" data-percent="10" data-fgcolor="#f95500" data-bgcolor="#eee"></div>
                        <strong class="success">Desconto</strong>
                    </div>
                    <span></span>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="text-center center-block">
                        <div id="myStat4" class="center-block" data-startdegree="0" data-dimension="150" data-text="20%" data-width="4" data-fontsize="28" data-percent="20" data-fgcolor="#f95500" data-bgcolor="#eee"></div>
                        <strong class="success">Desconto</strong>
                    </div>
                    <span></span>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="text-center center-block">
                    <div id="myStat5" class="center-block" data-startdegree="0" data-dimension="150" data-text="50%" data-width="4" data-fontsize="28" data-percent="50" data-fgcolor="#f95500" data-bgcolor="#eee"></div>
                    <strong class="success">Desconto</strong>
                </div>
                <span></span>
                </div>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="text-center center-block">
                    <div id="myStat6" class="center-block" data-startdegree="0" data-dimension="150" data-text="100%" data-width="4" data-fontsize="28" data-percent="100" data-fgcolor="#f95500" data-bgcolor="#eee"></div>
                    <strong class="success">Desconto</strong>
                </div>
                <span></span>
                </div>
            </div> -->

        </section>
        <!-- Service Section Start-->
        
        <!-- //Services Section End -->
    </div>
    <!-- Layout Section Start -->
    <section class="feature-main">
        <div class="container">
            <div class="row">
                
                    <h2> Clientes & Parceiros</h2>
                    <!-- Images Section Start -->
                    <div class="col-md-12">
                            <div id="gallery">
                                <div>
                                    <button class="btn filter btn-primary" data-filter="all">TODOS</button>
                                    <button class="btn filter btn-primary" data-filter=".category-1">MODA FEMININA</button>
                                    <button class="btn filter btn-primary" data-filter=".category-2">MODA MASCULINA</button>
                                    <button class="btn filter btn-primary" data-filter=".category-2">MODA INFANTIL</button>
                                    <button class="btn filter btn-primary" data-filter=".category-2">CALÇADOS</button>
                                    <button class="btn filter btn-primary" data-filter=".category-2">ROUPAS ÍNTIMAS</button>
                                    <button class="btn filter btn-primary" data-filter=".category-2">ACESSÓRIOS</button>
                                </div>
                                <div>
                                    <div class="mix category-1" data-my-order="1">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/1.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-1" data-my-order="2">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/1.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-2" data-my-order="3">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/2.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-1" data-my-order="4">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/1.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-2" data-my-order="5">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/2.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-2" data-my-order="6">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/2.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-1" data-my-order="7">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/1.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-2" data-my-order="8">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/2.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-2" data-my-order="8">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/2.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-1" data-my-order="8">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/1.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-1" data-my-order="8">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/1.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/1.jpg" class="img-responsive"> </div>
                                    </div>
                                    <div class="mix category-2" data-my-order="8">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <a class="fancybox" href="images/gallery/2.jpg"><i class="fa fa-search-plus"></i></a>
                                            <a href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                        <div class="thumb_zoom"><img src="images/gallery/2.jpg" class="img-responsive"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- //Images Section End -->
            </div>
        </div>
    </section>
    <!-- //Layout Section Start -->
    <!-- Accordions Section End -->
    
        <!-- //Accordions Section End -->
        <!-- Our Team Start -->
       
        <!-- //Our Team End -->
        <!-- What we are section Start -->
        <div class="container">
            <!-- What we are Start -->
            <div class="col-md-6 col-sm-6">
                <div class="text-left">
                    <div>
                        <h4 class="border-warning"><span class="heading_border bg-warning">Sobre os descontos</span></h4>
                    </div>
                </div>
                <img src="images/image_12.jpg" class="img-responsive">
                <p>
                        Quem quiser usufruir dos descontos ou promoções oferecidas no
                        V Compre & Ganhe é só realizar qualquer compra em um de nossos parceiros.
                        
                </p>
                <p>
                    <div class="text-right primary"><a href="#">Saiba mais</a></div>
                </p>
            </div>
            <!-- //What we are End -->
            <!-- About Us Start -->
            <div class="col-md-6 col-sm-6">
                <div class="text-left">
                    <div>
                        <h4 class="border-success"><span class="heading_border bg-success">Sobre nós</span></h4>
                    </div>
                </div>
                <img src="images/image_11.jpg" class="img-responsive">
                <p>
                        V Compre e Ganhe tem o objetivo de se tornar o maior clube de
                        fidelidade, onde,
                        os usuários tem uma variedade de descontos para que possam
                        usufruir no seu dia a dia.
                </p>
                <p>
                    <div class="text-right primary"><a href="#">Saiba mais</a>
                    </div>
                </p>
            </div>
            <!-- //About Us End -->
        </div>
        <!-- //What we are section End -->
        <!-- Testimonial Start -->
        
        <!-- Testimonial End -->
        <!-- Features Start -->
        
        <!-- //Features End -->
        <!-- Our Skills Start aqui mano -->
        
      
            </div>
        
            <!-- Our skills Section End -->
        </div>
        <!-- //Our Skills End -->
    </div>
    <!-- //Container End -->
    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Container Start -->
        <div class="container footer-text">
            <!-- About Us Section Start -->
            <div class="col-sm-4">
                <h4>Sobre nós</h4>
                <p>
                    O Sistema V Compre & Ganhe tem tudo o que você precisa para criar seu programa de pontos com eficiência, gerenciamento e otimização usando a tecnologia e habilidade que impulsionam os negócios.
                </p>
                <!-- <h4>Redes Sociais</h4>
                <ul class="list-inline">
                    <li>
                        <a href="http://facebook.com/"> <i class="livicon" data-name="facebook" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/"> <i class="livicon" data-name="twitter" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://instagram.com/"> <i class="livicon" data-name="instagram" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>
                        </a>
                    </li>
                   
                </ul>

            -->
            </div>
            <!-- //About Us Section End-->
            <!-- Contact Section Start -->
            <div class="col-sm-4">
                <h4>Contato</h4>
                <ul class="list-unstyled">
                    <li>
                       
                        </li>
                    <li>Goiania, Brasil.</li>
                    <li><i class="livicon icon4 icon3" data-name="cellphone" data-size="18" data-loop="true" data-c="#ccc" data-hc="#ccc"></i>Tel:(62) 9 8432-0701</li>
                    
                    <li><i class="livicon icon3" data-name="mail-alt" data-size="20" data-loop="true" data-c="#ccc" data-hc="#ccc"></i> Email:<span class="success">
                        <a href="mailto:">contato@vcompreeganhe.com.br</a></span>
                    </li>
                    
                </ul>
                <div class="news">
                    <h4>Newsletter</h4>
                    <p>Inscreva-se em nossa newsletter e fique atualizado com as novidades em pontos de desconto.</p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="seu-email@mail.com" aria-describedby="basic-addon2">
                        <a href="#" class="btn btn-primary text-white" role="button">Assinar</a>
                    </div>
                </div>
            </div>
            <!-- //Contact Section End -->
            <!-- Recent post Section Start -->
            <div class="col-sm-4">
              <!--  <h4>Últimos Depoimentos</h4>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="images/image_14.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry dummy.
                            <br />
                            <div class="pull-right"><i>Prceiro</i></div>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="images/image_15.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry dummy.
                            <br />
                            <div class="pull-right"><i>Parceiro</i></div>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="images/image_13.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry dummy.
                            <br />
                            <div class="pull-right"><i>Parceiro</i></div>
                        </p>
                    </div>
                </div>
                <div class="media">
                    <div class="media-left media-top">
                        <a href="#">
                            <img class="media-object" src="images/c1.jpg" alt="image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p class="media-heading">Lorem Ipsum is simply dummy text of the printing and type setting industry dummy.
                            <br />
                            <div class="pull-right"><i>Parceiro</i></div>
                        </p>
                    </div>
                </div>
            -->
            </div>
            <!-- //Recent Post Section End -->
        </div>
        <!-- Footer Container Section End -->
    </footer>
    <!-- //Footer Section End -->
    <!-- Copy right Section Start -->
    <div class="copyright">
        <div class="container">
            <p>Copyright <a href="https://www.bluetdah.com.br/"> Blueemotion </a> 2019</p>
        </div>
    </div>
    <!-- Copy right Section End -->
    <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

     <!--global js starts-->
     <script src="/assets/js/jquery.min.js"></script>
     <script src="/assets/js/bootstrap.min.js"></script>
    
     <script src="/assets/js/raphael.js"></script>
     <script src="/assets/js/livicons-1.4.min.js"></script>
     <script src="/assets/js/josh_frontend.js"></script>
    <!--global js end-->
    <!-- page level js starts-->
    <script src="/assets/js/jquery.circliful.js"></script>
    <script src="/assets/vendors/owl-carousel/owl.carousel.js"></script>
    <script src="/assets/js/carousel.js"></script>
    <script src="/assets/js/index.js"></script>
    <script src="/assets/vendors/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script src="/assets/vendors/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="/assets/js/portfolio.js"></script>
    <!--page level js ends-->
    <!--page level js ends-->
</body>
</html>