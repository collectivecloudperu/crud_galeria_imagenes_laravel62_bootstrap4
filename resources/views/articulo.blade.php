
  <!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Nube Colectiva">
    <link rel="shortcut icon" href="http://nubecolectiva.com/favicon.ico" />

    <meta name="theme-color" content="#000000" />

    
  
  <title>Demo: Que son los atributos data-toggle, data-set, etc. en HTML5</title>

 <style type="text/css">
    .ghbmd {
      /* display: none!important; */
    }
  </style>

  
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="http://nubecolectiva.com/blog/tutos/demos/enc.css">    

  </head>

  <body> 

    <header>
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="http://nubecolectiva.com"><img src="http://nubecolectiva.com/img/logo.png" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample07">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
              <a class="nav-link" href="http://nubecolectiva.com">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://blog.nubecolectiva.com" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li> 
            </ul>

            <div class="btn-group btodt" role="group" aria-label="Basic example">
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#reportarmodal">Reportar Error</button>
              <button type="button" onclick="window.open('https://paypal.me/nubecolectiva','_blank')" class="btn btn-warning">Donar</button>
              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#compartirmodal">Compartir</button>
              <button type="button" onclick="window.open('http://blog.nubecolectiva.com/que-son-los-atributos-data-toggle-data-set-etc-en-html5/','_blank')" class="btn btn-info">Post</button>
              <button type="button" onclick="window.open('https://github.com/collectivecloudperu/atributos_html5_personalizados','_blank')" class="btn btn-secondary ghbmd">GitHub</button>
            </div>

          </div>
        </div>
      </nav>
    </header>
  
<div class="pccp mb-3 mtpnc" align="center">
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
</div>
    <main role="main">

        <div class="container text-center mt-5">

          <!-- Contenido -->

          <div class="row">

            <div class="col-md-12">

              <a href="http://blog.nubecolectiva.com/las-novedades-que-trae-laravel-6/" target="_blank">

                <img src="http://blog.nubecolectiva.com/wp-content/uploads/2019/09/img_destacada_blog_devs_3-930x360.png" class="img-fluid">
                
              </a>

            </div>

          </div> 

          <!-- Fin Contenido -->     

          <hr>

          <div class="row text-center">

            <div class="col-md-12">

              <p class="lead">En <a href="http://nubecolectiva.com/" target="_blank"> Nube Colectiva </a> hablamos sobre:</p>

            </div>

          </div>

          <div class="row text-center">

              <div class="col-md-3">
                <h3>Frontend</h3>
                <a href="http://blog.nubecolectiva.com/category/frontend/" target="_blank">
                  <img class="img-fluid" src="http://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-11-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Backend</h3>                
                <a href="http://blog.nubecolectiva.com/category/backend/" target="_blank">
                  <img class="img-fluid" src="http://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-8-300x169.png">
                </a>
              </div>              

              <div class="col-md-3">
                <h3>Android</h3>
                <a href="http://blog.nubecolectiva.com/category/android/" target="_blank">
                  <img class="img-fluid" src="http://blog.nubecolectiva.com/wp-content/uploads/2018/11/img_destacada_blog_devs-9-300x169.png">
                </a>
              </div>

              <div class="col-md-3">
                <h3>Otros</h3>
                <a href="http://blog.nubecolectiva.com/category/articulos/" target="_blank">
                  <img class="img-fluid" src="http://blog.nubecolectiva.com/wp-content/uploads/2018/09/edit_img_destacada_blog_devs-300x169.png">
                </a>
              </div>

          </div>            
          
        </div>

    </main>


        <footer class="text-muted mt-3 mb-3">
        <div align="center">
          Desarrollado por <a href="http://www.nubecolectiva.com" target="_blank">Nube Colectiva</a>
      </div> 
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    	
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d77ca750f8a618e"></script>

	<!-- Modal Compartir -->
	<div class="modal fade" id="compartirmodal" tabindex="-1" role="dialog" aria-labelledby="compartirmodallabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="compartirmodallabel">Comparte esta DEMO</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" align="center">

            <div class="addthis_inline_share_toolbox"></div>
            	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- Modal Reportar error Demo -->
	<div class="modal fade" id="reportarmodal" tabindex="-1" role="dialog" aria-labelledby="reportarmodallabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="reportarmodallabel">Reportar error de esta DEMO</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">

            Si esta DEMO esta fallando, por favor adjunta una captura de pantalla con el error al siguiente correo:
            <br>
            <strong>nubecolectiva@gmail.com</strong>

            <br><br>

            De esta manera estaremos ayudando a otros Desarrolladores.

            <br><br>

            <span style="color:red;"><strong>NOTA:</strong> No olvides adjuntar la URL de este tutorial para su inmediata reparación !</span>
            	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>

    
  </body>
</html>
