<?php
$css = '/css/index.css';
$page = 'sobre';
require('header.php');
?>

<header class="cliente" style="background-image:url('img/banner/empresa1.jpg')">
    <div class="container">
        <h1 class="clienteh1">Sobre</h1>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <!-- Breadcrumb NavXT 5.7.1 -->
            <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to EMPRESA" href="index.html" class="home"><span property="name">Home</span></a>
                <meta property="position" content="1"></span> / <span property="itemListElement" typeof="ListItem" class="clienteColor"><span property="name">Sobre</span>
                <meta property="position" content="2"></span>
        </div>
    </div> <!-- .container -->
</header>

<div class="container clienteTitulo">
    <h2 class="h1 text-center p-4"> <span> &laquo; </span>
        </span> Nossas <span> Histórias &raquo;</h2>
    <hr>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 align-self-center text-justify">
            <p class="lead">Criada em 2013 a REI MARINE tem como o objetivo ser uma empresa voltada para o ramo marítimo e apoio portuário, pesca esportivas amadoras, pescaria de Parcéis e Oceânica.</p>
            <p class="lead">No entanto com profissionalismo aos seus clientes, respeitando suas particularidades, desde então acreditamos e seguimos nesse objetivo, que se reflete na continuidade de nossas atividades com reconhecimento de nossos clientes.</p>
            <p class="lead">A empresa situa-se em Niterói, com trabalho diferenciado e diversas vantagens no mercado atual. Afinal somos mais acessíveis, temos uma equipe treinada, qualificada, comprometida, responsável, proporcionando assim aos nossos clientes maior confiança, conforto ,segurança e lazer.</p>
        </div>
        <div class="col-md-6 align-self-center text-right">
            <img src="img/logo.png" alt="" class="img-fluid" />
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row empresa justify-content-md-center text-center shadow">
        <div class="col-md-4 bg-dark">
            <div class="row justify-content-md-center">
                <h1 class="h2 text-white p-2">Missão</h1>
            </div>
            <div class="row bg-info justify-content-md-center m-2">
                <img src="img/svg/missao.svg" alt="" class="img-fluid w-50" />
            </div>
            <div class="row">
                <p class="text-white text-justify p-4">A nossa missão é sermos conhecidos e reconhecidos pela nossa liderança no setor marítimo, por oferecer um serviço de qualidade e eficaz.<br>
                    Fornecendo assim um serviço seguro, de qualidade, responsável , renovando, inovando e adaptando os nossos serviços para a procura do mercado.<br>
                    A nossa experiência permitiu-nos estabelecer valores que no dia a dia nos ajudam a prestar um excelente serviço aos nossos clientes. Visando a satisfação de todos.
                </p>
            </div>
        </div>
        <div class="col-md-4 bg-dark">
            <div class="row justify-content-md-center">
                <h1 class="h2 text-white p-2">Visão</h1>
            </div>
            <div class="row bg-warning justify-content-md-center m-2">
                <img src="img/svg/visao.svg" alt="" class="img-fluid w-50" />
            </div>
            <div class="row">
                <p class="text-white text-justify p-4">Tornar-se uma empresa com referência no âmbito marítimo, alcançando o reconhecimento de nossos clientes, pela excelência do serviços prestados, com serviço de qualidade e uma equipe qualificada.</p>
            </div>
        </div>
        <div class="col-md-4 bg-dark">
            <div class="row justify-content-md-center">
                <h1 class="h2 text-white p-2">Valores</h1>
            </div>
            <div class="row bg-danger justify-content-md-center m-2">
                <img src="img/svg/valores.svg" alt="" class="img-fluid w-50" />
            </div>
            <div class="row">
                <p class="text-white text-justify p-4">Tornar-se uma empresa com referência no âmbito marítimo, alcançando o reconhecimento de nossos clientes, pela excelência do serviços prestados, com serviço de qualidade e uma equipe qualificada.</p>
            </div>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7 text-justify">
            <h2 class="featurette-heading m-0 pb-4">Conheça Nossa <span class="text-muted">Equipe</span></h2>
            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem ratione perspiciatis voluptatibus maxime cupiditate, necessitatibus enim perferendis quam omnis sit, debitis culpa praesentium! Praesentium eligendi repellat est nihil, provident molestias!</p>
            <p class="lead">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem ratione perspiciatis voluptatibus maxime cupiditate, necessitatibus enim perferendis quam omnis sit, debitis culpa praesentium! Praesentium eligendi repellat est nihil, provident molestias!</p>
        </div>
        <div class="col-md-5 align-self-center justify-content-md-end">
            <img src="img/sobre/team.jpg" class="img-fluid shadow-lg" alt="" />
        </div>
    </div>
</div>
<header class="empresa" style="background-image:url('img/sobre/banner.jpg');">
    <div class="container jun">
        <h1 class="empresah1">Tratamos você cliente como <span class="empresacolor"> único </span></h1>
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
            <span property="itemListElement" typeof="ListItem" class="empresacolor"><span property="name">e por isso preparamos um atendimento especial para você.</span>
                <meta property="position" content="2"></span>
        </div>
    </div> <!-- .container -->
</header>

<?php
require('footer.php');
?>