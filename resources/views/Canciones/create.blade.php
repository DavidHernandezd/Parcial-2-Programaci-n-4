Nuevo Registro de Canciones

<form action="{{ url('/canciones') }}" method="POST">
    @csrf
    @include('canciones.form')
   
</form>