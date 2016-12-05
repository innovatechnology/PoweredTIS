@extends('blog.app')
@section('content')
<div class="container">
    <div class="row">
          <div class="col-md-2 col-md-offset-0">
            <div class="panel panel-info">
                 <div class="panel-heading">Menu</div>
                 <div class="panel-body">
                          <a href="http://localhost:8000/blog" >Pagina de inicio</a>
                          <p> </p> 
                          <a href="http://localhost:8000/nombramiento"> >Nombramiento</a>
                          <p> </p> 
                          <a href="http://localhost:8000/seguimiento"> >Seguimiento</a>
                          <p> </p> 
                          <a href="http://localhost:8000/usuarios" >Usuarios</a>
                 
                  </div>
            </div>
          </div>

  <!--div class="row col-xs-10 col-xs-offset-0"-->
    <!--div class="col-xs-12 col-sm-12 col-md-15 margin-tb"-->
           <div class="col-md-8 col-md-offset-0">
                    <!--div class="pull-left"-->
                      <div class="panel panel-info">
                         <div class="panel-heading">Sistema de Nombramiento y Seguimineto Docente</div>
                           <div class="panel-body">            
            <!--h2>{{ config('blog.title') }}</h2-->

       
                      <div class="pull">
                            <a class="btn btn-success" href="/nombramiento"> Nuevo Nombramiento</a>
                      </div>
                      <div> <p> </p> </div>
                      <div class="pull">
                            <a class="btn btn-success" href="/seguimiento"> Nuevo Seguimiento</a>
                      </div>
                      <div> <p>  </p> </div>
                      <div> <p>  </p> </div>
                      <div> <p>  </p> </div>
                      <div> <p>  </p> </div>
                      <div> <p>  </p> </div>
                      <div> <p>  </p> </div>
                      <div> <p>  </p> </div>
                      <div> <p>  </p> </div>

                         </div>
                      </div>
                <!--/div-->
            </div>

  
          <div class="col-md-2 col-md-offset-0">
            <div class="panel panel-info">
                 <div class="panel-heading">Paginas Amigas</div>
                 <div class="panel-body">
                          <a href="http://www.cs.umss.edu.bo/" >cs.umss</a>
                          <p> </p> 
                          <a href="http://fcyt.umss.edu.bo/" >Fcyt</a>
                          <p> </p> 
                          <a href="http://websis.umss.edu.bo/"> Websis</a>
                          <p> </p> 
                          <a href="http://enlinea.umss.edu.bo/" >Moodle</a>
                  </div>
            </div>
          </div>
    </div>
  </div>
  @endsection