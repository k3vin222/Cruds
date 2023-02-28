<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>prueba</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>añadir instructor</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('instructor.index') }}"> Regresar</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('guardar_instructor') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> Numero de documento del instructor:</strong>
                        <input type="text" name="nro_doc" class="form-control" placeholder="Nombre del Instructor">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre del Instructor:</strong>
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre del Instructor">
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Apellido del Instructor:</strong>
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido del Instructor">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Registrar</button>
            </div>
        </form>
    </div>
</body>

</html>