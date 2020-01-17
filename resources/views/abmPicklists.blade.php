@extends('layouts.abmPicklistsLayout')

@section('content')
<div class="main main main-raised-2 product">
        <div class="container-fluid   ">
                <div class="row">
                    <div class="col-12">
                            <h2 class="title" style="color:black;">  Dashboard </h2>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
        
                           <h3 style="color:black; margin-top:0px;" style="     font-size: 12em; padding-top: 0.2em;"    >Alta baja y modificacion de los picklists!</h3> 
                    </div>
                    
                    <div class="col-xl-3 col-sm-6">
                         
                        
                   
                        <div class="card card-stats mb-4 mb-xl-0 ">
                        <a class="btn p-o m-0 fondopiero" style="width:100%; margin:0px;" href="{{url('paises')}}">
                            <div class="card-body ">
                                <div class="row">
                                     
                                     
                                            <div class="col">
                                        
                                                    <h5 class="card-title text-uppercase text-muted mb-0" style="text-align: center; color:white;"> Paises</h5>
                                                   <i class="fas fa-globe-americas" style="font-size: 12em; padding-top: 0.2em;"></i>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </a>
                                </div>
                        
                    </div>

                    <div class="col-xl-3 col-sm-6">
                         
                        
                   
                            <div class="card card-stats mb-4 mb-xl-0 ">
                                    <a class="btn p-o m-0 fondopiero" style="width:100%; margin:0px;" href="#">
                                <div class="card-body ">
                                    <div class="row">
                                         
                                         
                                                <div class="col">
                                            
                                                        <h5 class="card-title text-uppercase text-muted mb-0" style="text-align: center; color:white;"> Provincias</h5>
                                                        <i class="fas fa-tty" style="font-size: 12em; padding-top: 0.2em;"></i>
                                                   
                                                    
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </a>
                                    </div>
                            
                        </div>

                        <div class="col-xl-3 col-sm-6">
                         
                        
                   
                                <div class="card card-stats mb-4 mb-xl-0 ">
                                        <a class="btn p-o m-0 fondopiero" style="width:100%; margin:0px;" href="#">
                                    <div class="card-body ">
                                        <div class="row">
                                             
                                             
                                                    <div class="col">
                                                
                                                            <h5 class="card-title text-uppercase text-muted mb-0" style="text-align: center; color:white;"> Idiomas</h5>
                                                       
                                                            <i class="fas fa-language" style="font-size: 12em; padding-top: 0.2em;"></i>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </a>
                                        </div>
                                
                            </div>



                            <div class="col-xl-3 col-sm-6">
                         
                        
                   
                                    <div class="card card-stats mb-4 mb-xl-0 " >
                                            <a class="btn p-o m-0 fondopiero" style="width:100%; margin:0px;" href="#">
                                        <div class="card-body ">
                                            <div class="row">
                                                 
                                                 
                                                        <div class="col">
                                                    
                                                                <h5 class="card-title text-uppercase  mb-0" style="text-align: center; color:white;"> Codigos De Area</h5>
                                                                <i class="fas fa-tty"  style="font-size: 12em; padding-top: 0.2em;"></i>
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </a>
                                            </div>
                                    
                                </div>




                                
                    
                   
            
             
            
            </div>



</div>
</div>
@endsection
