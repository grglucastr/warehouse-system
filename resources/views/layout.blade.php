<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Warehouse System - @yield('title')</title>
        <link href="{{URL::asset('/libs/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="{{URL::asset('/css/site.css')}}">
    </head>
    <body>
       <div class="wrapper container-fluid" id="main-container">
           <div class="row" id="main-container-row">
               <div class="col-md-3" id="sidebar">
                   <nav class="navbar">
                       <ul class="nav nav-stacked">
                           <li>
                               <img src="{{URL::asset('/img/prof.jpg')}}"
                                     alt="George Lucas T. Bentes"
                                     class="img-circle"
                                     width="80">
                                <span>George Lucas T. Bentes</span>
                           </li>
                           <li class="divider"></li>
                           <li><a href="/">Transferências</a></li>
                           <li><a href="#">Produtos</a></li>
                           <li><a href="#">Warehouses</a></li>
                           <li><a href="#">Pallets</a></li>
                           <li><a href="#">Masters</a></li>
                           <li><a href="#">IMEI</a></li>
                           <li><a href="#">Sair</a></li>
                       </ul>
                   </nav>
               </div>
               <div class="col-md-9" id="content">
                   @yield('content')
               </div>
           </div>
       </div>
    </body>
    <script src="{{URL::asset('/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{URL::asset('/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</html>
