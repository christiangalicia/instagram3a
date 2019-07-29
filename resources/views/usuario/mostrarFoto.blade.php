@extends('usuario.layouts.masterUsuario')

@section("contenido")

<div class="box">
   
            <div class="box-header with-border">
              <h3 class="box-title">{{$publicacion->usuario->nombre}}</h3>

            </div>
    <div class="row">
        <div class="col-md-8">
            <div class="box-body">
                
                <img src="{{$publicacion->fotografia}}">
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <b>Comentario del Autor:</b><br>
                <p>{{$publicacion->comentario}}</p>
            </div>
            <!-- /.box-footer-->
        </div>
        <div class="col-md-4">
        <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$publicacion->seguidores->count()}}</h3>

              <p>Seguidores</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            
          </div>
        <div class="box box-info box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Seguidores</h3>

              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <ul>
                    @forelse ($publicacion->seguidores as $seguidor)
                    <li>{{$seguidor->nombre}}</li>
                    @empty
                    <li>No hay seguidores</li>
                    @endforelse
                </ul>
            </div>
            <!-- /.box-body -->
          </div>
    </div>
    </div>
</div>
@endsection