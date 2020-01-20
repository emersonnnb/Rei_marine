<?php
$css = '/css/index.css';
$page = 'index';
require('header.php');
?>

<!-- INCIO do Carousel
            -------------------------------------->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Imagens e Conteudos do Carousel
                    -------------------------------------->
    <div class="carousel-inner">

        <!-- 1º Banner
                       -------------------------------------->
        <div class="carousel-item active">
            <img src="img/banner/banner3.1.jpg" class="carousel-filter" alt="" />
            <div class="container">
                <div class="carousel-caption text-left">
                    <h1 class="text-dark featurette-heading">01 de Fevereiro
                    <br />Pescaria dos Graudos
                    <br />
                    R$: 150,00 p/ pessoa</h1>
                    <br />
                    <p><a class="btn btn-lg btn-warning" href="#" role="button">Saiba Mais <img src="img/svg/whatsapp1.svg" alt="" width="25"></a></p>
                </div>
            </div>
        </div>
        <!-- / 1º Banner -->

        <!-- 2º Banner
                        -------------------------------------->
        <div class="carousel-item">
            <img src="img/banner/banner2.jpg" class="carousel-filter" alt="" />
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="text-warning featurette-heading p-5">Mergulho em Família</h1>
                    <br />                    
                    <p><a class="btn btn-lg btn-warning" href="#" role="button">Saiba Mais <img src="img/svg/whatsapp1.svg" alt="" width="25"></a></p>
                </div>
            </div>
        </div>
        <!-- / 2º Banner -->

        <!-- 3º Banner
                        -------------------------------------->
        <div class="carousel-item">
            <img src="img/banner/banner1.jpg" class="carousel-filter" alt="" />
            <div class="container">
                <div class="carousel-caption text-right">
                    <h1 class="text-dark featurette-heading ">Viage com Conforto e Segurança.</h1>
                    <br />
                    <p><a class="btn btn-lg btn-warning" href="#" role="button">Saiba Mais <img src="img/svg/whatsapp1.svg" alt="" width="25"></a></p>
                </div>
            </div>
        </div>
        <!-- / 3º Banner -->
    </div>
    <!--/ Imagens e Conteudos do Carousel -->

    <!-- Botão para passar o Carrosel - Esquerdo
                    -------------------------------------->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <!-- / Botão para passar o Carrosel - Esquerda -->

    <!-- Botão para passar o Carrosel - Direito
                    -------------------------------------->
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!-- Botão para passar o Carrosel - Direito -->

</div>
<!-- / Carousel -->

<!-- Container
                -------------------------------------->
<div class="container marketing mb-5">

    <!-- Itens
                    -------------------------------------->
    <Section id="itens">

        <!-- Linha dos Itens
                        -------------------------------------->
        <div class="row text-center">

            <!-- 1º Iten
                            -------------------------------------->
            <div class="col-sm-3">
                <img src="img/svg/boat1.svg" class="product-device w-50 p-4" alt="" />
                <h2 class="p-2">Aluguel de<br>Barcos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam fuga est laborum repudiandae iusto natus excepturi quae iure. Minima debitis placeat quidem dolorem sequi vel nemo. Necessitatibus eos architecto possimus.</p>
                <p><a class="btn btn-outline-info" href="#" role="button">Saiba Mais &raquo;</a></p>
            </div>
            <!-- / 1º Item -->

            <!-- 2º Iten
                            -------------------------------------->
            <div class="col-sm-3">
                <img src="img/svg/fish1.svg" class="product-device w-50 p-4" alt="" />
                <h2 class="p-2">Pescaria<br>Avulsas </h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam fuga est laborum repudiandae iusto natus excepturi quae iure. Minima debitis placeat quidem dolorem sequi vel nemo. Necessitatibus eos architecto possimus.</p>
                <p><a class="btn btn-outline-info" href="#" role="button">Saiba Mais &raquo;</a></p>
            </div>
            <!-- / 2º Item -->

            <!-- 3º Iten
                            -------------------------------------->
            <div class="col-sm-3">
                <img src="img/svg/island-with-palm-trees1.svg" class="product-device w-50 p-4" alt="" />
                <h2 class="p-2">Passeios<br>Turísticos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam fuga est laborum repudiandae iusto natus excepturi quae iure. Minima debitis placeat quidem dolorem sequi vel nemo. Necessitatibus eos architecto possimus.</p>
                <p><a class="btn btn-outline-info" href="#" role="button">Saiba Mais &raquo;</a></p>
            </div>
            <!-- / 3º Item -->

            <!-- 4º Iten
                            -------------------------------------->
            <div class="col-sm-3">
                <img src="img/svg/group1.svg" class="product-device w-50 p-4" alt="" />
                <h2 class="p-2">Festas e<br>Eventos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam fuga est laborum repudiandae iusto natus excepturi quae iure. Minima debitis placeat quidem dolorem sequi vel nemo. Necessitatibus eos architecto possimus.</p>
                <p><a class="btn btn-outline-info" href="#" role="button">Saiba Mais &raquo;</a></p>
            </div>
            <!-- / 4º Item -->
        </div>
        <!-- / Linha dos Itens -->

    </Section>
    <!-- / Itens -->

    <!-- Anuncios
                    -------------------------------------->
    <section id="Anuncios">

        <hr class="featurette-divider">
        <!--/ Divisão -->

        <!-- 1º Anuncio
                        -------------------------------------->
        <div class="row featurette aling-self-center">

            <!-- Texto do Anuncio
                            -------------------------------------->
            <div class="col-md-7">
                <h2 class="featurette-heading">
                    Aproveite Nossas <span class="text-muted">Promoções.</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <!--/ Texto do Anuncio-->

            <!-- Imagem do Anuncio
                            -------------------------------------->
            <div class="col-md-5">
                <img src="img/img3.jpeg" class="img-fluid shadow-lg img-style" alt="" />
            </div>
            <!--/ Imagem do Anuncio -->

        </div>
        <!--/ 1º Anuncio -->

        <hr class="featurette-divider">
        <!--/ Divisão -->

        <!-- 2º Anuncio
                        -------------------------------------->
        <div class="row featurette">

            <!-- Texto do Anuncio
                            -------------------------------------->
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Seus Eventos <span class="text-muted">Pessonalizados.</span> Como você nunca Imaginou.</h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <!--/ Texto do Anuncio-->

            <!-- Imagem do Anuncio
                            -------------------------------------->
            <div class="col-md-5 order-md-1">
                <img src="img/img2.jpeg" class="img-fluid shadow-lg img-style" alt="" />
            </div>
            <!--/ Imagem do Anuncio -->

        </div>
        <!--/ 2º Anuncio -->

        <hr class="featurette-divider">

        <!-- 3º Anuncio
                        -------------------------------------->
        <div class="row featurette">

            <!-- Texto do Anuncio
                            -------------------------------------->
            <div class="col-md-7">
                <h2 class="featurette-heading">Conheça Nossas <span class="text-muted">Embarcações.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
            </div>
            <!--/ Texto do Anuncio-->

            <!-- Imagem do Anuncio
                            -------------------------------------->
            <div class="col-md-5">
                <img src="img/img1.jpeg" class="img-fluid shadow-lg img-style" alt="" />
            </div>
            <!--/ Imagem do Anuncio -->

        </div>
        <!--/ 3º Anuncio -->
    </section>
</div>
<!-- / Container -->
<?php
require('footer.php');
?>