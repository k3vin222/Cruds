<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD SEDE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>prueba crud</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('sede.create') }}"> Crear nueva sede </a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>codigo de la sede</th>
                    <th>nombre de la sede</th>
                    <th>especialidad de la sede</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mostrar as $i)
                    <tr>
                        <td>{{ $i->codigo }}</td>
                        <td>{{ $i->nombre_sede }}</td>
                        <td>{{ $i->especialidad_sede}}</td>
                        <td>
                            <form action="{{ route('sede.destroy',$i->codigo) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('sede.edit',$i->codigo) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Desactivar!</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>