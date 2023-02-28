<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD AMBIENTES</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>CRUD AMBIENTE</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('ambiente.create') }}"> Crear nuevo ambiente </a>
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
                    <th>numero de ambiente</th>
                    <th>nombre del ambiente</th>
                    <th>aforo</th>
                    <th>especialidad</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mostrar as $e)
                    <tr>
                        <td>{{ $e->nro_ambiente }}</td>
                        <td>{{ $e->nombre_ambiente }}</td>
                        <td>{{ $e->aforo}}</td>
                        <td>{{ $e->especialidad}}</td>
                        <td>
                            <form action="{{ route('ambiente.destroy',$e->nro_ambiente) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('ambiente.edit',$e->nro_ambiente) }}">Edit</a>
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