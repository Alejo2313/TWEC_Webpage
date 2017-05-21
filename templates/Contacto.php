
</div>
    <div class="container">
        <h2 class="text-center">Formulario de contacto</h2>

        <form class="form-horizontal" action="Gracias.php" method="GET" role="form" id="form">
            <div class="form-group" id="formName">
                <label class="control-label col-md-3">Nombre:</label>
                <div class="col-md-6 col-sm-12">
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Nombre">
                </div>
            </div>

            <div class="form-group" id="formEmail">
                <label class="control-label col-md-3">Email:</label>
                <div class="col-md-6 col-sm-12 ">
                    <input type="email"  class="form-control" name="email" id="inputEmail" placeholder="Email">
                    <p id="emailHelp" class="hide"><small class="form-text text-muted hide" >Introduzca un email valido</small></p>
                </div>
            </div>
            <div class="form-group" id="formQuery">
                <label class="control-label  col-md-3">Consulta: </label>
                <div class="col-md-6 col-sm-12">
                    <select name="query">
                        <option value="" seleted="selected">Selecciona</option>
                        <option value="presupuesto">Presupuesto</option>
                    </select>
                </div>
            </div>
            <div class="form-group " id="formTitle">
                <label class="control-label  col-md-3">Título: </label>
                <div class="col-md-6 col-sm-12">
                    <input type="text" class="form-control" id="inputTitle" placeholder="Título" name="title">
                </div>
            </div>
            <div class="form-group" id="formDesc">
                <label class="control-label col-md-3">Descripción:</label>
                <div class="col-md-6 col-sm-12">
                    <textarea rows="3" class="form-control" placeholder="Texto" name="content" id="descrip"></textarea>
                </div>
            </div>
            <div class="form-group" id="filebox">
                <label class="control-label col-md-3">Archivo</label>
                <div class="col-md-6 col-sm-12">
                    <input type="file" placeholder="Inserte un fichero">
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="mail" name="resend"> Enviar copia al e-mail
                    </label>
                </div>
            </div>
            <div class="form-group " id="termGroup">
                <div class="col-xs-offset-3 col-xs-9">
                    <label class="checkbox-inline">
                        <input type="checkbox" id="term"> No los he leido, pero acepto los<a href="">Terminos y condiciones</a>
                    </label>
                    <p id="termHelp" class="hide"><small class="form-text text-muted has-alert">Debes aceptar las condiciones</small></p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-9">
                    <input type="button"  class="btn btn-primary" id="Enviar" value="Enviar">
                    <input type="button" class="btn btn-default" id="Limpiar" value="Limpiar">
                </div>
            </div>

        </form>

    </div>
