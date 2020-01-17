
@extends('layouts.abm')

@section('opciones')
<div class="row title-row">
        <div class="col-md-4 col-md-offset-8">
            <button class="btn btn-white pull-right" data-toggle="modal" data-target="#nuevoModal">  
                    <i class="material-icons">person_add</i>
                     Agregar Nuevo País</button>

        </div>
    </div>
@endsection
@section('content')
<div class="main main-raised main-product">
        <div class="row">
            
            <div class="col-md-12 col-sm-6 " style="    padding: 0;">
                <h2 class="title">  Listado de Países </h2>
             
                <table class="table table-striped mt-2" data-paging="true" data-filtering="true" style="">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                              



                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($paises as $pais)
                            <tr>
                                    <td>{{$pais->id}}</td>
                                    <td>{{$pais->nombre}}</td>
                            <td style="white-space:normal;">  <button class="btn btn-primary botonmodificar" data-id-borrar="{{$pais->id}}" data-nombre="{{$pais->nombre}}"  type="button" >  <i class="fas fa-edit"></i>  </button></td>
                              
                                   
                                    

                                    <td> 
                                        <form action="{{url('bajapais')}}"  method="POST" class="form" id="form{{$pais->id}}" style="margin:0;"  onsubmit="return confirm('Esta seguro que quiere eliminar la pais?');">
                                            @csrf
                                            <input type="hidden" value="{{$pais->id}}" name="id" >
                                            <button class="btn btn-primary" type="submit" form="form{{$pais->id}}" >   <i class="fas fa-trash"></i></button>  
                                        </form>
                                    </td>
                                    
                                    
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>

        
               
            </div>
        </div>
    </div>
 
  
                     
         

  <!-- Agregar Nuevo pais Modal -->
<div class="modal fade" id="nuevoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <div class="card card-signup card-plain">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
    
                        <div class="header header-primary text-center" style="">
                            <h4 class="card-title" style="color:white;">Agregar Nuevo País</h4>
                         
                        </div>
                    </div>
                    <div class="modal-body">
                            <form  method="post"  action="{{url('crearpais')}}" class="form"  enctype="multipart/form-data" onsubmit="return confirm('Esta seguro que quiere agregar un nuevo país a la lista?');">
                                    @csrf
                            <p class="description text-center">Grupo Piero</p>
                            <div class="card-content">
    
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="fas fa-globe-americas"></i>
                                            </span>
                                            <input type="text"  name="nombre" class="form-control" placeholder="Nombre">
                                        </div>
                             
                              
                            
                                
                            
                        
                            </div>
                            <div class="modal-footer text-center">
                                <button  type="submit"  class="btn btn-primary btn-simple btn-wd btn-lg">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  End Modal -->

      <!-- Modificar pais Modal -->
<div class="modal fade" id="modificarModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>

                    <div class="header header-primary text-center" style="">
                        <h4 class="card-title" style="color:white;">Modifcar País</h4>
                     
                    </div>
                </div>
                <div class="modal-body">
                        <form  method="post"  action="{{url('modificarpais')}}" class="form"  enctype="multipart/form-data" onsubmit="return confirm('Esta seguro que quiere agregar un nuevo país a la lista?');">
                                @csrf
                        <p class="description text-center">Grupo Piero</p>
                        <div class="card-content">

                                <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="fas fa-globe-americas"></i>
                                        </span>
                                        <input type="text" id="campoamodificar"  name="nombre" class="form-control" placeholder="Nombre">
                                        <input type="hidden" id="idamodificar"  name="id" class="form-control" placeholder="">
                                    </div>
                         
                          
                        
                            
                        
                    
                        </div>
                        <div class="modal-footer text-center">
                            <button  type="submit"  class="btn btn-primary btn-simple btn-wd btn-lg">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  End Modal -->

@endsection
@section('scripts')
<script>
    //  data-toggle="modal" data-target="#modificarModal"
        $(document).on('click', '.botonmodificar', function(){ 
            var nombre = $(this).data('nombre');
            var id = $(this).data('id-borrar');
            $('#campoamodificar').val(nombre);
            $('#idamodificar').val(id);
        $('#modificarModal').modal('toggle');
     // Your Code
})
// $('#color').hexColorPicker();

</script>

@endsection