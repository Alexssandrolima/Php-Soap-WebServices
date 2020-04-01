<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css?v=<?php echo $params['webversion'] ?>" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

</head>

<body>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalWarning">
        <div class="modal-dialog" role="document">
            <div class="modal-content panel-warning">
                <div class="modal-header panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body text-center" id="modalWarningBody"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="backsignin d-flex">
        <div class="container p-4 ">
            <div class="row">
                <div class="col-md-6 mx-auto ">
                    <div class="alert alert-info text-center">
                        Bienvenidos al Sistema de Pedidos
                    </div>
                    <div class="card-title text-center">
                        <h3>Si ya tienes una cuenta <br>Ingresa!</h3>
                    </div>
                    <!--<img src="/img/logo.png" alt="Logo" class="card-img-top mx-auto m-2 rounded-circle  d-block w-50 ">-->
                    <div class="card-body">
                        <form class="form-horizontal" id="formLogin">
                            <div class="form-group">
                                <input type="text" id="usuario" placeholder="Ingresa tu usuario" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <input type="password" id="clave" placeholder="Contraseña" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success btn-block" type="submit" id="btn_submit">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="libs/js/jquery-3.3.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./js/login.js"></script>


</body>

</html>