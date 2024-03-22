<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Login Informativo con Bootstrap</title>
</head>

<body>
    
        
            <div class="row">
                <div class="col-md-3"></div>
            <div class="col-md-6" >
                <!-- Formulario principal -->
                <div class="card" id="form">
                    <div class="card-body " >
                        <h1 class="text-center mb-4"> SS-ETP</h1>
                        
                        <form action="procesando.php"method="post" >

                            
                            <div class="form-group">
                                
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <div class="form-group">
                                
                                <input type="password" class="form-control" id="password"  name="password"  required>
                            </div>
                            
                            <div class="form-check">
                         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                           Default checkbox
                        </label>
                         </div>

                            <a href="{{asset('/admin')}}" class="btn btn-primary btn-block" id="ingresar">Ingresar</a><br>

                            <div class="form-group text-center">
                                <a href="/html/recupero.html">¿Olvidaste tu contraseña?</a>
                            </div>
                            <div class="form-group text-center">
                                <a href="/html/recupero.html">¿Olvidaste tu correo electronico?</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
