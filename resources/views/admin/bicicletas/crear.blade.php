<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="shortcut icon" href="https://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />

    <title>Como crear un CRUD con Galería de Imágenes en Laravel 6.2 y Bootstrap 4 </title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/app.css') }}">      

  </head>

  <body> 

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="https://nubecolectiva.com"><img src="https://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample07">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="https://nubecolectiva.com">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://blog.nubecolectiva.com" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contacto</a>
          </li> 
          </ul>
          <form name="bencc" method="get" action="https://www.google.com/search" id="bencc" class="form-inline mt-2 mt-md-0" target="_blank">
            <input type="hidden" name="domains" value="blog.nubecolectiva.com">
            <input type="hidden" name="sitesearch" value="blog.nubecolectiva.com">
            <input class="form-control mr-sm-2" type="text" placeholder="Buscar..." aria-label="Buscar...">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="document.getElementById('bencc').submit()">Buscar</button>
          </form>
        </div>
      </div>
    </nav>
    </header>

    <div class="pccp mt-5 mb-3" align="center">
              <!-- P -->
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-2390065838671224"
                   data-ad-slot="1441100372"
                   data-ad-format="auto"
                   data-full-width-responsive="true"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
              <!-- End P -->
    </div>


      <div class="container mt-5 mb-5">

          <div class="row">

            <div class="col-md-12">

              <h1 style="font-size: 28px;" class=" text-center">Como crear un CRUD con Galería de Imágenes en Laravel 6.2 y Bootstrap 4 </h1>

              <div class="header">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <!-- Logo -->
                  <div class="logo">
                     <h1><a href="{{ route('admin/dashboard') }}">Administrador</a></h1>
                  </div>
               </div>
               <div class="col-md-5">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="input-group form">
                           <!--
                           <input type="text" class="form-control" placeholder="Buscar...">
                           <span class="input-group-btn">
                             <button class="btn btn-primary" type="button">Buscar</button>
                           </span>
                           -->
                      </div>
                    </div>
                  </div>
               </div>
               <div class="col-md-2">
                  <div class="navbar navbar-inverse" role="banner">
                      <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                          <li><a href="{{ route('admin/dashboard') }}">Administrador</a></li>
                        </ul>
                      </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="page-content">
        <div class="row">
          
          <div class="col-md-2">
            <div class="sidebar content-box" style="display: block;">

              <ul class="list-group">
                  <li class="list-group-item">
                    <a href="{{ route('admin/dashboard') }}"> Dashboard</a>
                  </li>
                  <li class="list-group-item">
                    <a href="{{ route('admin/bicicletas') }}"> Bicicletas</a>
                  </li>
                  <li class="list-group-item">
                    Opción 1
                  </li>
                  <li class="list-group-item">
                    Opción 2
                  </li>
                  <li class="list-group-item">
                    Opción 3
                  </li>
                  <li class="list-group-item">
                    Opción 4
                  </li>
                  <li class="list-group-item">
                    Opción 5
                  </li>
                  <li class="list-group-item">
                    Opción 6
                  </li>
                  <li class="list-group-item">
                    Opción 7
                  </li>
                  <li class="list-group-item">
                    Opción 8
                  </li>
              </ul>
            </div>
          </div>
        
            <div class="col-md-10">

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin/dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin/bicicletas') }}">Bicicletas</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear</li>
          </ol>
        </nav>
        
        <div class="row">

          <div class="col-md-12">

              <div class="content-box-large">

                <div class="panel-heading">
                <div class="panel-title"><h2>Crear</h2></div>             
                    
              </div>
                
                <div class="panel-body">                  

                  {{ $message=Session::get('message') }}                     
                  @include('alerts.request')
                                  
                  <section class="example mt-4">

                    <form method="POST" action="{{ route('admin/bicicletas/store') }}" role="form" enctype="multipart/form-data">

                      <input type="hidden" name="_method" value="PUT">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      @include('admin.bicicletas.frm.prt')
                                                          
                    </form>                                      
                                    
                  </section>

                </div>

              </div>

          </div>

        </div>

      </div>

      </div>

        </div>
              
            </div>

          </div>          

          <hr>

          <div class="row" align="center">

            <div class="col-md-12">

              <p class="lead">En <a href="https://nubecolectiva.com/" target="_blank"> Nube Colectiva </a> hablamos sobre:</p>

            </div>

          </div>

          <div class="row" align="center">

              <div class="col-md-3">
                <h3>Frontend</h3>
                <a href="https://blog.nubecolectiva.com/category/frontend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-11-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Backend</h3>                
                <a href="https://blog.nubecolectiva.com/category/backend/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-8-300x169.png">
                </a>
              </div>              

              <div class="col-md-3">
                <h3>Android</h3>
                <a href="https://blog.nubecolectiva.com/category/android/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-9-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Otros</h3>
                <a href="https://blog.nubecolectiva.com/category/articulos/" target="_blank">
                  <img class="img-fluid" src="https://blog.nubecolectiva.com/wp-content/uploads/2018/09/edit_img_destacada_blog_devs-300x169.png">
                </a>
              </div>

          </div>           
          
          
        </div>



    <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por <a href="https://www.nubecolectiva.com" target="_blank">Nube Colectiva</a>
      </div> 
    </footer>

    <!-- Bootstrap JS -->
    <!-- <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script> -->
    
  </body>
</html>
