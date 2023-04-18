Editar Lista de Lista_Reproduccion
<form action="{{ url('/lista/'. $lista>->id) }}" method ="POST">
    @csrf
    {{ method_field('PUT') }}
    @include('lista.form')

</form>