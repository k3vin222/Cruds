<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD INSTRUCTORES</title>
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
                    <a class="btn btn-success" href="{{ route('instructor.create') }}"> Crear nuevo instructor </a>
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
                    <th>numero de documento</th>
                    <th>nombre del instructor</th>
                    <th>apellido del instructor</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mostrar as $a)
                    <tr>
                        <td>{{ $a->nro_doc }}</td>
                        <td>{{ $a->nombre }}</td>
                        <td>{{ $a->apellido}}</td>
                        <td>
                            <form action="{{ route('instructor.destroy',$a->nro_doc) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('instructor.edit',$a->nro_doc) }}">Edit</a>
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