/**
 * Created by alejo on 9/04/17.
 */
var reg;
reg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
var error = [true, true, true, true]

$(document).ready(function(){
    $('#nav').affix({
        offset: {
            top: $('header').height()
        }
    });
    $("#Enviar").click(function(){
        if($('#term').is(':checked') && !error[0] && !error[1] && !error[2] && !error[3]){
            $("#form").submit();
        }
        else{
            if(!$('#term').is(':checked')) {
                $("#termHelp").removeClass("hide");
                $("#termGroup").addClass("alert alert-danger");
            }
            alert("Hay errores en el formulario")
        }
    });

    $("#inputName").focusout(function () {
        if($(this).val().length > 0){
            $("#formName").removeClass("has-error");
            $("#formName").addClass("has-success has-feedback");
            error[0] = false;
        }
        else{
            $("#formName").addClass(" has-error has-feedback");
          //  $("#termHelp").removeClass("hide");
            error[0] = true;
        }

    });
    $("#inputEmail").focusout(function () {
        var str = $(this).val().toString();
        if(reg.test(str)){
            $("#formEmail").removeClass("has-error");
            $("#formEmail").addClass("has-success has-feedback");
            error[1] = false;
        }
        else{
            $("#formEmail").addClass(" has-error has-feedback");
            error[1] = true;
        }

    });
    $("#inputTitle").focusout(function () {
        if($(this).val().length > 10){
            $("#formTitle").removeClass("has-error");
            $("#formTitle").addClass("has-success has-feedback");
            error[2] = false;
        }
        else{
            $("#formTitle").addClass(" has-error has-feedback");
            error[2] = true;
        }

    });
    $("#descrip").focusout(function () {
        if($(this).val().length > 20){
            $("#formDesc").removeClass("has-error");
            $("#formDesc").addClass("has-success has-feedback");
            error[3]=false;
        }
        else{
            $("#formDesc").addClass(" has-error has-feedback");
            error[3]=true;
        }

    });

});