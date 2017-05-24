<div class="container">
    <div class="row">
        <h2 class="text-center">Regístratre!</h2>

        <form class="form-horizontal" method="POST" action="/login/register.php" id="register-form">
                <div class="form-group">
                    <label class="control-label col-md-3" for="textinput">Nombre</label>
                    <div class="col-md-6 col-sm-12">
                        <input id="name" name="name" placeholder="Inserte su nombre" class="form-control input-md" required type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="textinput">Apellidos</label>
                    <div class="col-md-6 col-sm-12">
                        <input id="lname" name="lname" placeholder="Inserte su apellido" class="form-control input-md" required type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="textinput">Email</label>
                    <div class="col-md-6 col-sm-12">
                        <input id="email" name="email" placeholder="Insert your Email" class="form-control input-md" required type="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="textinput">Contraseña</label>
                    <div class="col-md-6 col-sm-12">
                        <input id="password" name="password" placeholder="Inserte su contraseña" class="form-control input-md" required type="password">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="textinput">Confirme su contraseña</label>
                    <div class="col-md-6 col-sm-12" id="password1-box">
                        <input id="password1"  placeholder="Repita su contraseña" class="form-control input-md" required type="text">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3" for="textinput">Dirección</label>
                    <div class="col-md-6 col-sm-12">
                        <input id="address" name="address" placeholder="Inserte su dirección" class="form-control input-md" required type="text">
                    </div>
                </div>

            <div class="form-group">
                <div class="col-sm-6 col-sm-offset-3">
                    <input type="submit" class="btn btn-login" name="register" id="register"  value="Register">
                </div>
            </div>

        </form>

    </div>
</div>