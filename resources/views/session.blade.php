<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <div class="container">

        <div class="card mt-3">
                <div class="card-header">
                Inicio de sessión
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" id="email" placeholder="ejemplo@ejemplo.com" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contraseña" class="col-sm-2 col-form-label">Contraseña</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="contraseña" id="contraseña" value="{{ old('contraseña') }}">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" id="iniciar" name="iniciar" style="">Entrar</button>
                        <button type="submit" class="btn btn-secondary" id="cancelar" name="cancelar">Cancelar</button>
                    </form>



            </div>
        </div>

    </div>

</body>
</html>



