@extends('usuario.layouts.masterUsuario')

@section("contenido")

<h1>{{$titulo}}</h1>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, cupiditate nostrum aliquid saepe labore est nam recusandae illo aliquam doloremque delectus excepturi modi nihil sit iure error numquam earum hic atque voluptate minima quisquam eveniet maiores. Iusto, tempora, quo facilis a quisquam est voluptas quas dolore. Dolores saepe distinctio impedit quas ab aspernatur? Voluptatem, totam, fugit, molestiae fugiat voluptas soluta aliquam quis laborum nulla laboriosam odio provident quae repudiandae exercitationem doloremque alias porro eius dolorem! Expedita, aperiam, iure quis blanditiis maiores sint debitis qui dolorem officia reprehenderit accusantium quidem vel rerum aliquam unde fuga voluptatum voluptas dolor odit eaque maxime.
<br>
@if($autor<>"")
<b>{{$autor}}</b>
@else
<b>Anonimo</b>
@endif

<hr>

@for ($i = 0; $i < 10; $i++)
    The current value is {{ $i }} <br>
@endfor

<hr>

@forelse ($usuarios as $user)
    <p>{{ $user->correo }}</p>
@empty
    <p>No users</p>
@endforelse

@endsection