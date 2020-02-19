<?php
$css = '/css/index.css';
$page = 'servicos';
require('header.php');
?>
<header class="cliente" style="background-image:url('img/banner/servicos1.jpg')">
  <div class="container">
    <h1 class="clienteh1">Serviços</h1>
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
      <!-- Breadcrumb NavXT 5.7.1 -->
      <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to EMPRESA" href="index.html" class="home"><span property="name">Home</span></a>
        <meta property="position" content="1"></span> / <span property="itemListElement" typeof="ListItem" class="clienteColor"><span property="name">Serviços</span>
        <meta property="position" content="2"></span>
    </div>
  </div> <!-- .container -->
</header>

<div class="container clienteTitulo">
  <h2 class="h1 text-center p-4"> <span> &laquo; </span>
    </span> Nossos <span> Serviços &raquo;</h2>
  <hr>
</div>

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-md-6 text-center ">
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam fugiat, neque fuga rerum id ex sequi, magnam excepturi, repellendus commodi laborum quaerat temporibus expedita? Nemo recusandae expedita neque sed sunt.</p>
    </div>
  </div>

  <div class="row mt-5 mb-5">

    <div class="col-sm-6">
      <div class="box ">
        <div class="row pb-3">
          <div class="col-sm-3 text-center p-3">
            <img src="img/svg/fish.svg" alt="" class="" width="50">
          </div>
          <div class="col-sm-9 text-center">
            <h4 class="servicostopicos m-0 mb-3">Pescaria Avulsa</h4>
          </div>
        </div>
        <div class="row">
          <p class="description text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi quisquam asperiores nesciunt voluptatem ex natus, laboriosam veritatis repellat culpa mollitia quas vel similique minima corporis cum possimus facilis optio! Nisi?</p>
        </div>
        <div class="row justify-content-md-end">
          <p><a class="btn btn-outline-info" href="#" role="button" data-toggle="modal" data-target="#pescariaAvulsa">Saiba Mais &raquo;</a></p>
        </div>
      </div>
    </div>


    <div class="col-sm-6">
      <div class="box ">
        <div class="row pb-3">
          <div class="col-sm-3 text-center p-3">
            <img src="img/svg/island-with-palm-trees.svg" alt="" class="" width="50">
          </div>
          <div class="col-sm-9 text-center">
            <h4 class="servicostopicos m-0 mb-3">Passeios Turisticos</h4>
          </div>
        </div>
        <div class="row">
          <p class="description text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi quisquam asperiores nesciunt voluptatem ex natus, laboriosam veritatis repellat culpa mollitia quas vel similique minima corporis cum possimus facilis optio! Nisi?</p>
        </div>
        <div class="row justify-content-md-end">
          <p><a class="btn btn-outline-info" href="#" role="button" data-toggle="modal" data-target="#passeiosTuristicos">Saiba Mais &raquo;</a></p>
        </div>
      </div>

    </div>

    <div class="col-sm-6">

      <div class="box ">
        <div class="row pb-3">
          <div class="col-sm-3 text-center p-3">
            <img src="img/svg/boat.svg" alt="" class="" width="50">
          </div>
          <div class="col-sm-9 text-center">
            <h4 class="servicostopicos m-0 mb-3">Aluguel de Barcos</h4>
          </div>
        </div>
        <div class="row">
          <p class="description text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi quisquam asperiores nesciunt voluptatem ex natus, laboriosam veritatis repellat culpa mollitia quas vel similique minima corporis cum possimus facilis optio! Nisi?</p>
        </div>
        <div class="row justify-content-md-end">
          <p><a class="btn btn-outline-info" href="#" role="button" data-toggle="modal" data-target="#aluguelBarcos">Saiba Mais &raquo;</a></p>
        </div>
      </div>

    </div>

    <div class="col-sm-6">

      <div class="box ">
        <div class="row pb-3">
          <div class="col-sm-3 text-center p-3">
            <img src="img/svg/group.svg" alt="" class="" width="50">
          </div>
          <div class="col-sm-9 text-center">
            <h4 class="servicostopicos m-0 mb-3">Festas e Eventos</h4>
          </div>
        </div>
        <div class="row">
          <p class="description text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi quisquam asperiores nesciunt voluptatem ex natus, laboriosam veritatis repellat culpa mollitia quas vel similique minima corporis cum possimus facilis optio! Nisi?</p>
        </div>
        <div class="row justify-content-md-end">
          <p class=""><a class="btn btn-outline-info" role="button" data-toggle="modal" data-target="#festasEventos">Saiba Mais &raquo;</a></p>
        </div>
      </div>

    </div>

  </div>
</div>
<?php
require('footer.php');
include('modal.php');
?>