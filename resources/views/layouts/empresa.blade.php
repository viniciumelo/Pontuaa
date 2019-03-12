<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zxx">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>{{ getenv('APP_NAME') }} -  Clientes Vips</title>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="site/images/favicon.png">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="site/css/bootstrap.css">
    <!--Owl Carousel CSS-->
    <link rel="stylesheet" type="text/css" href="site/css/owl.carousel.min.css">
    <!--Magnific PopUp Stylesheet-->
    <link rel="stylesheet" type="text/css" href="site/css/magnific-popup.css">
    <!--Icofont CSS-->
    <link rel="stylesheet" type="text/css" href="site/css/icofont.css">
    <!--Mailer CSS-->
    <link rel="stylesheet" type="text/css" href="mailer/mailer-style.css">
    <!--Animate CSS-->
    <link rel="stylesheet" type="text/css" href="site/css/animate.css">
    <!--Bootsnav CSS-->
    <link rel="stylesheet" type="text/css" href="site/css/bootsnav.css">
    <!--Main CSS-->
    <link rel="stylesheet" type="text/css" href="site/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <!--Responsive CSS-->
    <link rel="stylesheet" type="text/css" href="site/css/responsive.css">

    <style>
        .selecionado {
            background-color: #cd0fd8 !important;
            border-color: #cd0fd8 !important;
            color: #fff !important;
        }
    </style>

    <!--Modanizr JS-->
    <script src="site/js/modernizr.custom.js"></script>
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
    <!--Start Preloader-->
    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
    <!--End Preloader-->

    <!--Start Body Wrap-->
    <div id="body-wrap">
        <!--Start Header-->
        <header id="header">
            <nav class="navbar navbar-default bootsnav" data-spy="affix" data-offset-top="10">
                <div class="container">
                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li><a href="https://play.google.com/store/apps/details?id=com.connectvalle.achei.palmas"><i class="icofont icofont-download-alt"></i> Baixar App</a></li>
                        </ul>
                    </div>
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="icofont icofont-navigation-menu"></i>
                        </button>
                        <a class="navbar-brand" href="/clientesvips" style="color:white;font-size: 25px;font-weight: 700; margin-top: 12px;">
                            {{ getenv('APP_NAME') }}
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeIn" data-out="fadeOut">
                            <li class="active"><a href="#header">Home</a></li>
                            <li><a href="#features">Vantagens</a></li>
                            <li><a href="#contact">Contato</a></li>
                            <li><a id="registro" href="#pricing">Registro</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </nav>
            <div class="clearfix"></div>
        </header>
        <!--End Header-->

        <!--Start Banner Section-->
        <section id="banner" class="gradient-bg full-height">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Banner Caption-->
                    <div class="col-md-6">
                        <div class="caption-content">
                            <h1 class="font-700 color-white text-uppercase wow fadeInUp" data-wow-delay="0.1s">Serviços  de marketing digital para seu negócio  vender mais</h1>
                            <p class="color-white wow fadeInUp" data-wow-delay="0.2s">O achei mais descontos é  a plataforma  completa  de marketing especialista em pequenos  e médias empresas.</p>
                            <div class="caption-btn wow fadeInUp" data-wow-delay="0.3s">
                                <!-- <a class="font-600" href="#pricing">Quero ser VIP!</a> -->
                                <a class="font-600" href="https://play.google.com/store/apps/details?id=com.connectvalle.achei.palmas"><i class="icofont icofont-download-alt"></i> Baixar App</a>
                            </div>
                        </div>
                    </div>
                    <!--End Banner Caption-->

                    <!--Start Banner Image-->
                    <div class="col-md-6">
                        <div class="banner-img wow fadeIn" data-wow-delay="0.4s">
                            <img src="site/images/app.png" class="img-responsive" alt="Image" style="padding-top: 50px; max-width: 600px;">
                        </div>
                    </div>
                    <!--End Banner Image-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Banner Section-->


        <!--Start Features Section-->
        <section id="features" >
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Vantagens para o seu negócio</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                            <!-- O Achei Mais Descontos proporciona para você cliente vip, descontos especiais em Pizzarias, lanchonetes, padarias,farmácias, manutenção de veículos, cabelereiros, Pet shop, lavanderia, lava jato, manicure, e muito mais. Confira as vantagens. -->
                            </p>
                        </div>
                    </div>
                    <!--End Heading content-->
                </div>
                <!--End Heading Row-->

                <!--Start Feature Items Row-->
                <div class="row">
                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.1s">
                            <i class="icofont icofont-money-bag gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Baixo custo</h5>
                            <p>
                            Comparado as mídias tradicionais, tv, jornais, rádio e revistas, anunciar no Achei mais descontos tem um custo beneficio  mais acessível.
                            </p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.2s">
                            <i class="icofont icofont-ui-social-link gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Interatividade</h5>
                            <p>
                            Realize sorteios, envie cupons de desconto, fidelize clientes, saiba a opinião deles sobre o seu negócio,
                            </p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.3s">
                            <i class="icofont icofont-chart-histogram gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Relatório</h5>
                            <p>
                            Acompanhe as visualizações que sua empresa teve, as visualizações em produtos, ligações recebidas, contatos feitos pelo whahtsapp, a quantidade de cupons validados e muito mais.
                            </p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.4s">
                            <i class="icofont icofont-speed-meter gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Velocidade</h5>
                            <p>
                                Em segundos, sem precisar imprimir nada e com apenas alguns cliques, anuncie promoções, serviços e cupons de descontos.
                            </p>
                        </div>
                    </div>
                    <!--End Feature Item-->
                </div>
                <!--End Feature Items Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Features Section-->


        <!--Start Features Section-->
        <section id="features" >
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Vantagens para o seu cliente</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.2s">
                            <!-- De forma fácil  e rápida  realize  o donwload de cupons de desconto, você  não  precisa imprimir  o cupom pois ele fica salvo  no seu celular é  só  apresentar o cupom e ganhar  seu desconto. -->
                            </p>
                        </div>
                    </div>
                    <!--End Heading content-->
                </div>
                <!--End Heading Row-->

                <!--Start Feature Items Row-->
                <div class="row">
                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.1s">
                            <i class="icofont icofont-price gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Cupons de Desconto</h5>
                            <p>
                            De forma fácil  e rápida  realize  o donwload de cupons de desconto, você  não  precisa imprimir  o cupom pois ele fica salvo  no seu celular é  só  apresentar o cupom e ganhar  seu desconto.
                            </p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.2s">
                            <i class="icofont icofont-sale-discount gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Vitrine Virtual</h5>
                            <p>
                           O Cliente pode acompanhar os principais produtos, promoções, novidades da loja, 24 horas por dia 7 dias por semana
                            </p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.3s">
                            <i class="icofont icofont-contacts gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Contato</h5>
                            <p>
                            Acesso fácil e organizado a Redes sócias, google mapas, horário de funcionamento, telefone, whatsapp.
                            </p>
                        </div>
                    </div>
                    <!--End Feature Item-->

                    <!--Start Feature Item-->
                    <div class="col-md-3 col-sm-6">
                        <div class="feature-single text-center wow fadeIn" data-wow-delay="0.4s">
                            <i class="icofont icofont-id-card gradient-bg-1 color-white"></i>
                            <h5 class="font-600">Cartão  Fidelidade</h5>
                            <p>Participe de clube de cartão  fidelidade  para clientes vips. Você  pode concorrer a prêmios, brindes, e  descontos nas lojas credenciadas.</p>
                        </div>
                    </div>
                    <!--End Feature Item-->
                </div>
                <!--End Feature Items Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Features Section-->


        <!--Start Demo Video Section-->
        <section id="demo-video" class="bg-cover position-relative">
            <div class="overlay"></div>
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Video Content-->
                    <div class="col-md-12 col-sm-12">
                        <div class="video-content text-center">
                        <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Conheça  o Achei  Mais descontos</h2>

                        <div class="owl-carousel owl-theme">
    <div class="item">
        <h5 style="height: 65px;color: #FFF;">O achei Mais descontos é  para todos os segmentos, Pet shops, supermercados, farmácias, pizzarias e muito mais.</h5>
        <img src="/img/slider1.png" alt="">
    </div>
    <div class="item">
    <h5 style="height: 65px;color: #FFF;">Anuncie promoções, produtos, serviços, cardápio, de uma forma simples  e rápida.</h5>
        <img src="/img/slider2.png" alt="">
    </div>
    <div class="item">
    <h5 style="height: 65px;color: #FFF;">Divulgue cupons de desconto nas redes sociais e atraia mais clientes, o seu cliente não  precisa imprimir nada.</h5>
        <img src="/img/slider3.png" alt="">
    </div>
    <div class="item">
    <h5 style="height: 65px;color: #FFF;">As informações  do seu negócio  estão  aqui, contato,  endereço, redes sociais, avaliação.</h5>
        <img src="/img/slider4.png" alt="">
    </div>
    
</div>

</div>
                            

                        </div>
                    </div>
                    <!--End Video Content-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Demo Video Section-->


        <!--Start Contact Section-->
        <section id="contact" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Col-->
                    <div class="col-md-12 col-sm-12">
                        <!--Start Heading-->
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Acompanhe os resultados</h2>
                        </div>


                        <div class="col-md-6">
                            <p><i class="icofont icofont-ebook" style="font-size: 50px; float: left; color: #cd0fd8"></i>Tenha acesso a relatórios por meio do canal exlusivo para anunciantes Achei mais descontos.</p>
                        </div>

                        <div class="col-md-6">
                           <p><i class="icofont icofont-eye-alt" style="font-size: 50px; float: left; color: #cd0fd8"></i>Saiba quantas pessoas viram e clicaram no sei anúncio, ligaram para seu estabelecimento e muito <mais!></mais!></p>
                        </div>
                        <!--End Heading-->
                    </div>
                    <!--End Heading Col-->
                </div>
                <!--End Heading Row-->

                <!--Start Contact Info-->
                <div class="contact-info">
                    <!--Start Row-->
                    <div class="row">
                        <!--Start Contact Info Single-->
                        <div class="col-sm-12">
                            <div class="contact-info-single text-center wow fadeIn" data-wow-delay="0.1s">
                              <img src="/img/notebook.jpg" width="100%" alt="">
                            </div>
                        </div>
                        <!--End Contact Info Single-->

                        <!--Start Contact Info Single-->

                        <!--End Contact Info Single-->

                    </div>
                    <!--End Row-->
                </div>
                <!--End Contact Info-->

            </div>
            <!--End Container-->
        </section>
        <!--End Contact Section-->

            <!--Start Pricing Section-->
            <section id="pricing">
            <!--Start Container-->
            <div class="container">
                <!--Start Heading Row-->
                <div class="row">
                    <!--Start Heading Content-->
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                        <div class="section-heading text-center">
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">Escolha o melhor plano para o seu negócio</h2>

                        </div>
                    </div>
                    <!--End Heading Content-->
                </div>
                <!--End Heading Row-->

                <!--Start Pricing Row-->
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="pricing-table-single text-center wow fadeIn" data-wow-delay="0.2s">
                            <div class="pricing-title">
                                <h3 class="font-700">Bronze</h3>
                            </div>
                            <div class="price-amount">
                                <h2 class="planoBronze font-700 color-base2"><span>6x</span> <span>R$</span> 20,00</h2>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                    <li class="font-500">

                                        <select name="plano_bronze" class="form-control" style="max-width: 250px; margin: 0 auto">
                                            <option value="1">Semestral (6 meses)</option>
                                            <option value="2">Anual (12 meses)</option>
                                        </select>
                                    </li>
                                        <li><strike>Cupom de descontos</strike></li>
                                        <li><strike>Envio de mensagem para clientes</strike></li>
                                        <li><strike>Programa de fidelização</strike></li>
                                        <li><strike>Link de vídeo nos anúncios</strike></li>
                                        <li><strike>Anuncie o seu cardápio</strike></li>
                                        <li>1 foto por anúncio</li>
                                        <li>Anuncie até 5 produtos/ ou serviço</li>
                                        <li>Endereço, telefone, whatsapp, google mapas.</li>
                                        <li>Relatórios</li>
                                        <li>Redes sociais</li>
                                        <li>Contato</li>
                                        <li>Perfeito  para profissionais liberais: mecânicos, eletricistas, pintores, encanadores, chaveiros, etc.</li>
</li>
                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="font-600" id="plano_3" style="cursor: pointer;" onclick="SELECIONAR_PLANO(3)">Escolher</a>
                            </div>
                        </div>
                    </div>
                    {{-- PLANO PRATA --}}
                    <!--Start Pricing Table-->
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing-table-single text-center wow fadeIn" data-wow-delay="0.1s">
                            <div class="pricing-title">
                                <h3 class="font-700">Prata</h3>
                            </div>
                            <div class="price-amount">
                                <h2 class="planoPrata font-700 color-base2"><span>6x</span> <span>R$</span> 60,00<sub class="font-600"></sub></h2>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                     <li class="font-500">

                                        <select name="plano_prata" class="form-control" style="max-width: 250px; margin: 0 auto">
                                            <option value="1">Semestral (6 meses)</option>
                                            <option value="2">Anual (12 meses)</option>
                                        </select>
                                    </li>

<li>Cupom de descontos</li>
<li>Envio de mensagem para clientes</li>
<li>Programa de fidelização</li>
<li>Link de vídeo nos anúncios</li>
<li>Anuncie o seu cardápio</li>
<li>1 foto por anúncio</li>
<li>Endereço, telefone, whatsapp, google mapas.</li>
<li>Relatórios</li>
<li>Redes sociais</li>
<li>Contato</li>
<li>Perfeito para pequenos e médios  negócios  do ramo de alimentação.</li>

                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="font-600" id="plano_4" style="cursor: pointer;" onclick="SELECIONAR_PLANO(4)">Escolher</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table-->

                    <!--Start Pricing Table-->
                    <div class="col-md-4 col-sm-6">
                        <div class="pricing-table-single text-center wow fadeIn" data-wow-delay="0.2s">
                            <div class="pricing-title">
                                <h3 class="font-700">Ouro</h3>
                            </div>
                            <div class="price-amount">
                                <h2 class="planoOuro font-700 color-base2"><span>6x</span> <span>R$</span> 95,00</h2>
                            </div>
                            <div class="pricing-details">
                                <ul>
                                     <li class="font-500">

                                        <select name="plano_ouro" class="form-control" style="max-width: 250px; margin: 0 auto">
                                            <option value="1">Semestral (6 meses)</option>
                                            <option value="2">Anual (12 meses)</option>
                                        </select>
                                    </li>
<li>Cupom de descontos</li>
<li>Envio de mensagem para clientes</li>
<li>Programa de fidelização/ Cartão  fidelidade</li>
<li>Link de vídeo nos anúncios</li>
<li>Até 5 fotos em anúncios</li>
<li>Anuncie até 150 produtos</li>
<li>Endereço, telefone, whatsapp, google mapas.</li>
<li>Relatórios</li>
<li>Redes sociais</li>
<li>Contato</li>
<li>Perfeito para supermercados, farmácias, lojas de roupas. </li>

                                </ul>
                            </div>
                            <div class="pricing-btn">
                                <a class="font-600" id="plano_5" style="cursor: pointer;" onclick="SELECIONAR_PLANO(5)">Escolher</a>
                            </div>
                        </div>
                    </div>
                    <!--End Pricing Table-->

                   <div class="col-md-3 col-sm-6"></div>


                </div>
                <!--End Pricing Row-->
            </div>
            <!--End Container-->
        </section>
        <!--End Pricing Section-->

        <!--Start Contact Section-->
        <a style="display:none;" id="link-registro" href="contact2"></a>
        <section id="contact2" >
            <!--Start Container-->
            <div class="container">

                <br>
                <br>

                <!--Start Contact Form Content-->
                <div class="contact-form-content">
                    <!--Start Row-->
                    <div class="row">
                        <!--Start Contact Form-->
                        <div class="col-md-12">
                            <div class="contact-form">
                                <h3 class="font-600 text-center">Registre-se</h3>

                                <form action="/cadastrar-empresa" method="post"  enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="col-md-2">
                                    </div>

                                    <div class="col-md-8">

                                            @if(Session::has('errors'))
                                            <div class="widget tag-cloud" >
                                                <h4><a style="background-color: red; border-radius: unset; width: 100%;"
                                                        class="font-500">
                                                        {{ $errors->first() }} <i style="float:right; margin-top: 10px;" class="icofont icofont-close"></i>
                                                    </a>
                                                </h4>
                                            </div>
                                            @endif


                                        <input type="hidden" id="plano" name="plano">
                                        <input type="hidden" id="valor" name="valor">

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nome fantasia" id="name" name="name" value="{{ old('name') }}" required>
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Razão Social" id="razao_social" name="razao_social" value="{{ old('razao_social') }}" required>
                                        </div>

                                       


                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" id="email" name="email"  value="{{ old('email') }}" required>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <select type="text" class="form-control" id="categorias" name="categorias" style="height: 50px;" required>
                                                <option>Selecione uma categoria</option>
                                                    @foreach($dados as $dado)
                                                    <option value="{{$dado->id}}">{{$dado->nome}}</option>
                                                    @endforeach                                            
                                                   
                                                  
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-md-2">
                                            <select type="text" class="form-control" id="estado" value="{{ old('estado') }}" name="estado" style="height: 50px;" required>
                                            <option>Estado</option>
                                                    @foreach($estados as $estado)
                                                    <option value="{{$estado->cod_estados}}">{{$estado->sigla}}</option>
                                                    @endforeach                                       
                                                   
                                                  
                                                </select>
                                            
                                            </select>
                                            </div>


                                            <div class="form-group col-md-4">
                                            <select type="text" class="form-control" id="cidade" value="{{ old('cidade') }}" name="cidade" style="height: 50px;" required>
                                            </select>
                                            
                                            </div>
                                            
                                        </div>

                                      <div class="row">
                                      <div class="form-group col-md-6">
                                      <label for="">
                                        Logo
                                      </label>
                                            <input type="file" class="form-control" onchange="verifica_extencao()"  id="foto" name="foto"  required>                                        
                                        </div>

                                        <div class="col-md-6">
                                        <div id="logotipo">
                                        <img border="0" src="" name="img" style="visibility: hidden">
                                        </div>
                                        </div>
                                      </div>
                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <input type="password" class="form-control" placeholder="Senha" id="password" name="password" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="password" class="form-control" placeholder="Confirmação de Senha" id="password_confirmation" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="row col-md-12">
                                            <p>
                                                <input type="checkbox" style="height: unset;" required/>
                                                Li e concordo com os <a href="/termodeuso.pdf" target="_blank" style="text-decoration: underline;">termos de uso</a>.
                                            </p>
                                        </div>

                                        <div class="contact-btn">
                                            <button class="font-500 gradient-bg-1 color-white" type="submit">Finalizar</button>
                                        </div>
                                    </div>

                                    <div class="col-md-2">

                                    </div>

                                </form>
                                <div id="form-messages"></div>
                            </div>
                        </div>
                        <!--End Contact Form-->



                            <div class="google-map" style="display:none;">
                                <h3 class="font-600 text-center">Find Us In Google Map</h3>
                                <div id="map"></div>
                            </div>

                    </div>
                    <!--End Row-->
                </div>
                <!--End Contact Form Content-->
            </div>
            <!--End Container-->
        </section>
        <!--End Contact Section-->


        <br>
        <br>
        <!--Start Footer-->
        <footer id="footer">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Footer Social-->
                    <div class="col-sm-4">
                        <div class="footer-social text-left wow fadeIn" data-wow-delay="0.1s">
                            <ul>
                                <li><a href="https://www.facebook.com/acheimaisdescontos/"><i  class="icofont icofont-social-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Footer Social-->

                    <!--Start Copyright Text-->
                    <div class="col-sm-8">
                        <div class="copyright-text text-right wow fadeIn" data-wow-delay="0.2s">
                            <p class="color-white">&copy; 2018 Achei Mais Descontos</p>
                        </div>
                    </div>
                    <!--End Copyright Text-->
                </div>
                <!--End Row-->
            </div>
            <!--End Container-->

            <!--Start ClickToTop-->
            <div class="click-to-top">
                <a class="gradient-bg" href="#header"><i class="icofont icofont-simple-up"></i></a>
            </div>
            <!--End ClickToTop-->
        </footer>
        <!--End Footer-->
    </div>
    <!--End Body Wrap-->

    <!--jQuery JS-->
    <script src="site/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!--Google Map API-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC4yKUBz0tTKwfw8zY8mYOR7MAZy9coIMg&callback" async defer></script>
    <script src="site/js/map.js"></script>
    <!--Counter JS-->
    <script src="site/js/waypoints.js"></script>
    <script src="site/js/jquery.counterup.min.js"></script>
    <!--Bootstrap JS-->
    <script src="site/js/bootstrap.min.js"></script>
    <!--Magnic PopUp JS-->
    <script src="site/js/magnific-popup.min.js"></script>
    <!--Owl Carousel JS-->
    <script src="site/js/owl.carousel.min.js"></script>
    <!--Wow JS-->
    <script src="site/js/wow.min.js"></script>
    <!--Bootsnavs JS-->
    <script src="site/js/bootsnav.js"></script>
    <!--Contact Form JS-->
    <script src="mailer/ajax-contact-form.js"></script>
    <!--Main-->
    <script src="site/js/custom.js"></script>

    <script>



    


        function verifica_extencao() {
            var file    = document.querySelector('input[type=file]').files[0];    
        var extensoesOk = ",.gif,.jpg,.jpeg,.png,.bmp,";
        var alturaOk = 360;
        var larguraOk = 250;
        var pesoOk = 1500000;
        var extensao	= "," + document.forms[0].foto.value.substr( document.forms[0].foto.value.length - 4 ).toLowerCase() + ",";
        if (document.forms[0].foto.value == "")
            {alert("O campo do endereço da imagem está vazio!!")}
        else if( extensoesOk.indexOf( extensao ) == -1 )
            { alert( document.forms[0].foto.value + "\nNão possui uma extensão válida" );}
        else {
            var reader = new FileReader();
            var image = new Image();
            reader.onload = function(e) {       
                image.src = reader.result
                image.class= 'img'
                image.classList.add("img-thumbnail");
                //document.getElementById('logotipo').innerHTML = "<img border=\"0\" src=\""+reader.result+"\" id=\"img\" name=\"img\"  >"  

            $('#logotipo').html( image);
       
               
        }

        image.onload = function(){
            var largura = image.height;
                var altura = image.width;
                var tamanho_imagem = image.fileSize 
                console.log(largura)
                if (largura >larguraOk || altura > alturaOk ){
                    alert("A imagem é "+largura+"x"+altura+" está fora do padrão requerido");
                }

                if (tamanho_imagem > pesoOk)
                    {alert("O tamanho da Imagem é muito grande ...  "+tamanho_imagem+" Bytes!!");}
                }
        }
        if (file) {
        reader.readAsDataURL(file);
        }         
	}



        function SELECIONAR_PLANO(id){
            $('.selecionado').removeClass('selecionado');
            $('#plano_'+id).addClass('selecionado');
            $('#plano').val(id);

            if(id == 3){
                $('#valor').val($('select[name="plano_bronze"]').val())
            }
            if(id == 4){
                $('#valor').val($('select[name="plano_prata"]').val())
            }

            if(id == 5){
                $('#valor').val($('select[name="plano_ouro"]').val())
            }
        }


            $('select[name="plano_bronze"]').change(function(){
                var valorSelecionado = $(this).val()
                if(valorSelecionado == 1){
                   $('.planoBronze').html('<span>6x</span> <span>R$</span> 20,00')
                } else {
                  $('.planoBronze').html('<span>12x</span> <span>R$</span> 15,00')

                }
            })

            $('select[name="plano_prata"]').change(function(){
                var valorSelecionado = $(this).val()
                if(valorSelecionado == 1){
                   $('.planoPrata').html('<span>6x</span> <span>R$</span> 60,00')
                } else {
                  $('.planoPrata').html('<span>12x</span> <span>R$</span> 45,00')

                }
            })

             $('select[name="plano_ouro"]').change(function(){
                var valorSelecionado = $(this).val()
                if(valorSelecionado == 1){
                   $('.planoOuro').html('<span>6x</span> <span>R$</span> 95,00')
                } else {
                  $('.planoOuro').html('<span>12x</span> <span>R$</span> 70,00')

                }
            })


            $("#estado").on('change',function(){
            var estadoSelecionado = $(this).val();


                if(estado){
                    var url = '/api/cidades';  //caminho do arquivo php que irá buscar as cidades no BD
                    $.post(url,{estados: estadoSelecionado}, function(cidades) {
                   
                          
      $('select[name=cidade]').append("<option value='' disabled selected style='display:none;'>Cidade</option>");

      $.each(cidades, function(key, value) {
        $('select[name=cidade]').append('<option value=' + value + '>' + value + '</option>');
      });
                        
                    });
                }
            });


        @if(Session::has('errors'))
        setTimeout(() => {
            $('#registro').click();
        }, 1000);
        @endif

        $('.carousel').carousel({
            interval: 3000
        })


        $('.owl-carousel').owlCarousel({
    loop:true,
   
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

       
    </script>

</body>

</html>
