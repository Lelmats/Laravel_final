@extends("layout")
@section("content")
<div class="container">
                
    <a href="articulos/create" class="btn btn-primary">CREAR</a>

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
                <td>id</td>
                <td>codigo</td>
                <td>descripcion</td>
                <td>cantidad</td>
                <td>precio</td>
                <td>
                <form action="" method="POST">
                <a href="" class="btn btn-info">Editar</a>         
                 
                <button type="submit" class="btn btn-danger">Delete</button>
                
                </form>          
                </td>        
            </tr>
        </tbody>
    </table>
    
</div>
@endsection