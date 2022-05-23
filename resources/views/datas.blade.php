@extends("layout")
@section("content")
<div class="container">
    @forelse ($datas as $data)

    <a href="/add" class="btn btn-primary">CREAR</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Código</th>
                <th scope="col">Descripción</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>    
            <tr>
                <th>{{ $data->id }}</th>
                <td>{{ $data->codigo }}</td>
                <td>{{ $data->descripcion }}</td>
                <td>{{ $data->cantidad }}</td>
                <td>{{ $data->precio }}</td>
                <td>
                <form method="POST" action="{{ url("datas/{$data->id}") }}" >
                <a href="{{ route ('datas.edit', ['id' => $data->id]) }}" class="btn btn-info">Editar</a>   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>                
                </form>          
                </td>        
            </tr>
        </tbody>

        @empty
        <p> No hay registros que mostrar en este momento <a href="/add"> Agregar Nota</a></p>
        @endforelse

    </table>
    
</div>
@endsection