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
                            <h2 class="font-700 color-base text-uppercase wow fadeInUp" data-wow-delay="0.1s">BEM VINDO AO ACHEI MAIS DESCONTOS</h2>
                            <p class="wow" data-wow-delay="0.2s">
                            AS INSTRUÇÕES DE ACESSO FORAM ENVIADAS PARA O SEU E-MAIL. <br>
                            QUALQUER DÚVIDA ENTRE EM CONTATO CONOSCO.

                            </p>
                        </div>
                    </div>
                    <!--End Heading content-->
                </div>
                <!--End Heading Row-->

                <!--Start Feature Items Row-->
              
                <!--End Feature Items Row-->
            </div>
            <!--End Container-->
        </section>
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
