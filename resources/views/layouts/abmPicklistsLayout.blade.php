<html>
        <head>
                <meta charset="utf-8" />
                <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/img/apple-icon.png')}}">
                <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
                <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

                <title>Survey</title>

                <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

                <!--     Fonts and icons     -->
                <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

                <!-- CSS Files -->
                <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
                <link href="{{asset('css/jquery-hex-colorpicker.css')}}" rel="stylesheet" />

                <link href="{{asset('css/material-kit.css?v=1.2.1')}}" rel="stylesheet"/>
                <link href="{{asset('css/footable.bootstrap.css')}}" rel="stylesheet"/>


                <!-- CSS Just for demo purpose, don't include it in your project -->
                <link href="{{asset('css/vertical-nav.css')}}" rel="stylesheet" />
                <link rel="stylesheet" href="{{asset('demo/demo.css')}}">
                <link rel="stylesheet" href="{{asset('css/abm.css')}}">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://kit.fontawesome.com/718cb808ee.js" crossorigin="anonymous"></script>


            </head>
            <style>
                    .header-filter::before {
                        /* background-color: #00274e00; */
                        background-color: #00274e99;
                    }

                    @media all and (max-width: 720px) { .botonesabm   {  justify-content: center; } }
.input-group-text {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    padding: .475rem .95rem;
    margin-bottom: 0;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: center;
    white-space: nowrap;
    background-color: #e9ecef;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.botonesabm{
    display:flex !important;
}
                    </style>

            <body class="product-page">
                    <nav class="navbar navbar-primary navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll="100">
                        <div class="container">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                {{-- <a class="navbar-brand" href="#">Grupo Piero</a>
                                 --}}
                            <img  class="navbar-brand" src="{{asset('img/GrupoPiero.png')}}" alt="" style="margin-top: -5px; height:60px;">

                            </div>

                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">

                                                             <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="#">
                                    <i class="fas fa-globe-americas"></i>  Paises
                                </a>
                            </li>

                            <li >
                                <a href="#" class="" data-toggle="">
                                    <i class="fas fa-language"></i> Idiomas
                                </a>
                            </li>
                            <li >
                                    <a href="#" class="" data-toggle="">
                                        <i class="fas fa-tty"></i> Provincias
                                    </a>
                                </li>
                                <li >
                                        <a href="#" class="" data-toggle="">
                                            <i class="fas fa-tty"></i> Codigos de Area
                                        </a>
                                    </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest


                                </ul>
                            </div>
                        </div>
                    </nav>

                <div class="page-header header-filter " data-parallax="true"  style=" height:100vh !important;">
                        <div class="container">
                            @yield('opciones')
                            
                            @yield('content')

                        </div>
                    </div>

                    {{-- <footer class="footer fondopiero">
                            <div class="container ">
                              <div class="row mt-4">
                                <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                                    <ul class="list-inline mb-2">
                                        <li class="list-inline-item">
                                          <a href="#" style="color:white;">Edificio Bureau Pilar Norte 
                                            Ruta Panamericana KM 49,5
                                            CP 1629 Pilar,  Buenos Aires
                                            Argentina</a>
                                        </li>
                                        <li class="list-inline-item">⋅</li>
                                        <li class="list-inline-item">
                                          <a href="#" style="color:white;">TELÉFONO: <br>
                                              (+54) 11 4006 7097</a>
                                        </li>
                                        <li class="list-inline-item">⋅</li>
                                        <li class="list-inline-item">
                                          <a href="#" style="color:white;">Email: <br>info@grupopiero.com</a>
                                        </li>
                                      
                                      </ul>
                                  <p class="text-muted small mb-4 mb-lg-0">© 2019 Todos los derechos reservados.</p>
                                </div>
                                <div class="col-lg-6 h-100 text-center text-lg-right my-auto ">
                                    <ul class="list-inline mb-2">
                               
        
                                        <li class="list-inline-item mr-3">
                                          <a href="http://www.piero.com.ar" target="blank">
                                              <img class="marca" src="{{asset('img/empresas/piero.svg')}}" style="height:20px;" alt="">
            
                                          </a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                          <a href="https://www.suavestar.com.ar/" target="blank">
                                              <img class="marca" src="{{asset('img/empresas/suavestar.svg')}}" style="height:20px;" alt="">
            
                                          </a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                          <a href="https://www.cannon.com.ar/" target="blank">
                                              <img class="marca" src="{{asset('img/empresas/cannon.svg')}}" style="height:20px;" alt="">
            
                                          </a>
                                        </li>
                                 
        
                                        <li class="list-inline-item mr-3">
                                          <a href="https://www.suavegom.com.ar/" target="blank">
                                              <img class="marca" src="{{asset('img/empresas/suavegom.svg')}}" style="height:20px;" alt="">
            
                                          </a>
                                        </li>
                                        <li class="list-inline-item mr-3">
                                          <a href="https://www.gani.com.ar/" target="blank">
                                              <img class="marca" src="{{asset('img/empresas/gani.svg')}}" style="height:20px;" alt="">
            
                                          </a>
                                        </li>
                                        <li class="list-inline-item">
                                          <a href="http://www.colchonbox.com" target="blank">
                                              <img class="marca" src="{{asset('img/empresas/cbox.svg')}}" style="height:20px;" alt="">
                                              </a>
                                          
                                        </li>
                                      
        
                                      </ul>
                                </div>
                              </div>
                            </div>
                          </footer> --}}



 @yield('modal')

                </body>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

                <script src="{{asset('js/jquery-hex-colorpicker.min.js')}}"></script>
                <script src="{{asset('js/jquery-hex-colorpicker.js')}}"></script>
                <script src="{{asset('js/jscolor.js')}}"></script>


                    <!--   Core JS Files   -->
                    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
                    <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
                    <script src="{{asset('js/material.min.js')}}"></script>

                    <!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
                    <script src="{{asset('js/moment.min.js')}}"></script>

                    <!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
                    <script src="{{asset('js/nouislider.min.js')}}" type="text/javascript"></script>

                    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
                    <script src="{{asset('js/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>

                    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select   -->
                    <script src="{{asset('js/bootstrap-selectpicker.js')}}" type="text/javascript"></script>

                    <!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/   -->
                    <script src="{{asset('js/bootstrap-tagsinput.js')}}"></script>

                    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
                    <script src="{{asset('js/jasny-bootstrap.min.js')}}"></script>

                    <!--	Plugin for Product Gallery, full documentation here: https://9bitstudios.github.io/flexisel/ -->
                    <script src="{{asset('js/jquery.flexisel.js')}}"></script>

                    <!--    Plugin For Google Maps   -->

                    <!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
                    <script src="{{asset('js/material-kit.js')}}?v=1.2.1" type="text/javascript"></script>
                    <script src="{{asset('js/footable.js')}}" type="text/javascript"></script>
    <script src="{{asset('demo/bootstrap-notify.js')}}"></script>

                    <script src="{{asset('demo/demo.js')}}"></script>

                    <script type="text/javascript">


                    $(document).ready(function() {
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 4,
                            itemsToScroll: 1,
                            animationSpeed: 400,
                            enableResponsiveBreakpoints: true,
                            responsiveBreakpoints: {
                                portrait: {
                                    changePoint:480,
                                    visibleItems: 3
                                },
                                landscape: {
                                    changePoint:640,
                                    visibleItems: 3
                                },
                                tablet: {
                                    changePoint:768,
                                    visibleItems: 3
                                }
                            }
                        });
// $('#color').hexColorPicker();


                    });
                    $(function() {
      $('table').footable(
        {
                       breakpoints: {
                            tiny: 480,
                            medium: 600,
                            big: 1280
                       }


   
      });
    });

// $('.table').footable();

                   </script>
                   @yield('scripts')


                </html>
