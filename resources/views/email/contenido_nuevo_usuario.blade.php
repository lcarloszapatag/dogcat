<p style="font-size: large;">
    Hola, {{$usuario->nombres.' '.$usuario->apellidos}}
</p>

<p>Ha sido creada una nueva cuenta de usuario con sus datos en DogCat ({{$rol->nombre}}). Para activar su cuenta dirijase a <a href="{{url('/nueva-cuenta/'.$usuario->token.'/'.\Illuminate\Support\Facades\Crypt::encrypt($usuario->id))}}">este link</a> y diligencie el formulario.</p>
<p>Gracias por confiar en nosotros.</p>