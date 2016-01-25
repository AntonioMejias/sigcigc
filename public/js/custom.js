(function () {
    
    var objCedula = {}

    jQuery.fn.resetForm = function () {
        $(this).each (function() { this.reset(); });
    }

    $(".agregar-u").click(function(){
        alert("afsadf");
        $("#form-edit-creat").resetForm();
    });

    $(".edit-t").click(function(){

        var usuario = {
            "login":   $(this).parent().siblings('td#usuario-t').text(),
            "apellido": $(this).parent().siblings('td#apellido-t').text(),
            "nombre": $(this).parent().siblings('td#nombre-t').text(),
            "cedula": $(this).parent().siblings('td#cedula-t').text(),
            "ficha": $(this).parent().siblings('td#ficha-t').text(),
            "departamento":$(this).parent().siblings('td#departamento-t').text(),
            "correo": $(this).parent().siblings('td#correo-t').text()         
        }

        $("div#añadirUsuario #form-edit-creat").attr({action:"backend/editar_usuario"});

        $("div#añadirUsuario input#usuario").val(usuario.login);
        $("div#añadirUsuario input#usuario").prop({disabled:true});

        $("div#añadirUsuario input#nombre").val(usuario.nombre);
        $("div#añadirUsuario input#apellido").val(usuario.apellido);
        $("div#añadirUsuario input#cedula").val(usuario.cedula);
        /*$("div#añadirUsuario input#cedula").prop({disabled:true});*/

        $("div#añadirUsuario input#ficha").val(usuario.ficha);
        

        $("div#añadirUsuario input#departamento").val(usuario.departamento);
        $("div#añadirUsuario input#correo").val(usuario.correo);
    });
  

  $(".delete-t").click( function(){

        objCedula["cedula"] = $(this).parent().siblings('td#cedula-t').text();
    });

   $(".delete-u").click( function(){

       $.ajax({
            url:"backend/eliminar_usuario",
            type: "post",
            data: objCedula,
            success: function(data){
                location.reload();
            }
       })
    });

})();


(function () {
    
    var indicadores = {
        vector : []
    }

    function BlockEveryInput() {

            $('#crear-obj-ges').find('input, textarea, button, select').prop({disabled:true});
    }



   $("#crear-obj-ges").on("submit", function(e){
        e.preventDefault();
        //console.log($(this).serializeArray());
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
        });
        $.ajax({
            url:"http://localhost:8000/objetivo/crear-objetivo",
            type: "POST",
            data: $(this).serialize(),
            beforeSend: function(xhr) {
                xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));
            },
            success: function(data){
                alert("hola mundo");
                if (data.success){
                    $(".info-alert").show("fade");
                    $(".info-alert #menssage").html("Objetivo de gestion creado exitosamente <br> Agregue las correspondientes acciones <span class='glyphicon glyphicon-arrow-down'> </span>");
                    $("#panel-accion").show("fade");
                    BlockEveryInput();
                    setTimeout(function () {
                         $(".info-alert").hide("fade");
                    }, 7000);



                } else {
                    alert("peo loco");
                }
            }
        });
    });

    function ConvertFormToJSON(array){
        var json = {};
        
        jQuery.each(array, function() {
            json[this.name] = this.value || '';
        });
        
        return json;
    }


    $("#add-indicador").click(function () {
        indicadores.vector.push(ConvertFormToJSON($("#form-indicador").serializeArray()));
        $("span.cantidad").text("("+indicadores.vector.length+")");

        //console.log(indicadores.vector);
    });


     $("#crear-accion-indicador").on("submit", function(e){
        alert("todo bien");
            e.preventDefault();
            indicadores.accion=(ConvertFormToJSON($(this).serializeArray()));

            indicadores.idobjetivo=$("input#codigo").val();

            alert(indicadores.idobjetivo);
                ///console.log(JSON.stringify(indicadores));
             $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
             });

            $.ajax({
                url: 'http://localhost:8000/objetivo/crear-accion-indicador',
                type: 'POST',
                data: indicadores,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-CSRF-TOKEN', $("#token").attr('content'));
                },
                success: function (data) {
                    alert("todo bien");
                     //console.log(data.data);
                }
            });
            
            
     });
})();