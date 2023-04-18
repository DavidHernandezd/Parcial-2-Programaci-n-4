Editar Registro de Canciones

<form action="{{ url('/canciones/'. $canciones->id) }}" method="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('canciones.form')
   
</form>