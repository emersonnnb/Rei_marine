<?php
$css = '/css/contatos.css';
$page = 'contatos';
require('header.php');
?>
<header class="cliente" style="background-image:url('img/banner/contato1.png')">
    <div class="container">
        <h1 class="clienteh1">CONTATO</h1>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <!-- Breadcrumb NavXT 5.7.1 -->
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to EMPRESA" href="index.html" class="home"><span property="name">Home</span></a>
                <meta property="position" content="1"></span> / <span property="itemListElement" typeof="ListItem" class="clienteColor"><span property="name">Contato</span>
                <meta property="position" content="2"></span>
        </div>
    </div> <!-- .container -->
</header>
    
<div class="container mb-5">
    <div class="row">
        <div class="col-md-4 align-self-center">
            <img src="img/contato/mapa.jpg" alt="" class="img-fluid" />
        </div>
        <div class="col-md-8 align-self-center mt-5">
            <h2 class="featurette-heading m-0">Venha nos <span class="text-muted">Conhecer</span></h2>
            <hr class="featurette-divider mt-4 mb-4">
            <p class="lead text-right">
                Avenida das Américas 5000
            </p>
            <p class="lead text-right">
                Bloco 6, 20° Andar Sala 2105
            </p>
            <p class="lead text-right">
                Barra da Tijuca / Rio de Janeiro
            </p>
            <p class="lead text-right">
                CEP 21990-050
            </p>
        </div>
    </div>

    <hr class="featurette-divider ">

    <div class="row">
        <div class="col-md-8 align-self-center">
            <div class="row">
                <h2 class="featurette-heading m-0 ">Deixe seu contato por <span class="text-muted">AQUI</span></h2>

            </div>
            <hr class="featurette-divider mt-4 mb-4">

            <form method="POST" action="enviarEmail.php">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Nome<span class="text-muted">*</span></label>
                        <input type="text" class="form-control" name="nome" placeholder="Insira seu nome aqui" required>
                    </div>                                    
                    <div class="col-md-6 mb-3">
                        <label for="email">E-mail <span class="text-muted">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" placeholder="seu@example.com" required>
                    </div>
                </div> 
                <div class="row">                  
                    <div class="col-md-6 mb-3">
                        <label for="fone">Telefone Celular<span class="text-muted">*</span></label>
                        <input type="tel" class="form-control" maxlength="15" name="telefone" id="fone" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}$" placeholder="(00)00000-0000" required>
                    </div>                
                    <div class="col-md-6 mb-3">
                        <label>Assunto<span class="text-muted">*</span></label>                        
                    <input type="text" class="form-control" name="assunto" placeholder="Assunto" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                    <label>Mensagem<span class="text-muted">*</span></label> <br>
                        <textarea class="form-control" name="mensagem" rows="5" cols="90" required></textarea>
                    </div>
                </div>    
                <hr class="mb-4">
                <div class="row">
                    <button class="btn-outline-purple btn-lg btn-block" type="submit">Enviar</button>
                </div>
            </form>           
        </div>
        <div class="col-md-4 align-self-center">
            <img src="img/contato/atendente.png" alt="" class="img-fluid" />
        </div>
    </div>
</div>

<?php
require('footer.php');
?>