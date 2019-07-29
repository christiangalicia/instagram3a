@extends('usuario.layouts.masterUsuario')

@section("contenido")
<h1>Muro Recientes</h1>
@forelse($publicaciones as $p)
<div class="col-md-4">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="img-responsive" src="{{$p->fotografia}}" >

              <h3 class="profile-username text-center">{{$p->usuario->nombre}}</h3>

              <p class="text-muted text-center">{{substr($p->comentario,0,60)}}</p>
              <a href="#" class="btn btn-primary btn-block"><b>Seguir</b></a>
              <a href="{{url('/foto')}}/{{$p->id}}" class="btn btn-primary btn-block"><b>Ver Más</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@empty
<h1>No hay publicaciones</h1>
@endforelse
<div class="text-center">
{{ $publicaciones->links() }}
</div>
@endsection