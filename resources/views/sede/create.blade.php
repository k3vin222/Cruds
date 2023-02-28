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
                    <h2>añadir sede</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('sede.index') }}"> Regresar</a>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('guardar_sede') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong> codigo de la sede:</strong>
                        <input type="text" name="codigo" class="form-control" placeholder="Codigo de la sede">
                        @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nombre de la sede:</strong>
                        <input type="text" name="nombre_sede" class="form-control" placeholder="Nombre de la sede">
                        
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>especialidad de la sede:</strong>
                        <input type="text" name="especialidad_sede" class="form-control" placeholder="Especialidad de la sede">
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