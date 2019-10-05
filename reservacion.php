
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Reservación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>



    <div class="container-fluid">
        <div class="row">
      
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4" id="main">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Reservación</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-danger cancelar">Cancelar</button>
                            <button type="button" class="btn btn-sm btn-outline-success"
                                id="nuevo_registro">Reservar</button>
                        </div>
                    </div>
                </div>
               <center> <h2 id="h2-title">Consultar Reservación</h2></center>
                <div class="table-responsive view" id="show_data">
                    <table class="table table-striped table-sm" id="list-usuarios">
                        <thead>
                            <!--id
usuario
fecha_inicio
hora_inicio
fecha_fin
hora_fin
servicio
cañon
salon
comentario
accesorio(cable,control,bocina, si se les va aproporcionar)
status-->
                            <tr> 
                                <th>Usuario</th>
                                <th>Fecha_inicio</th>
                                <th>Hora_inicio</th>
                                <th>Fecha_fin</th>
                                <th>Hora_fin</th>
                                <th>Servicio</th>
                                <th>Cañon</th>
                                <th>Salon</th>
                                <th>Comentario</th>
                                <th>Accesorio</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
                <div id="insert_data" class="view">
                    <form action="#" id="form_data" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="usuario">Usuario</label>
                                    <input type="text" id="inputusuario" name="usuario" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fecha_inicio">Fecha_inicio</label>
                                    <input type="date" id="inputFecha_inicio" name="fecha_inicio" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="hora_inicio">Hora_inicio</label>
                                    <input type="time" id="inputHora_inicio" name="hora_inicio" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="fecha_fin">Fecha_fin</label>
                                    <input type="date" id="inputFecha_fin" name="fecha_fin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="hora_fin">Hora_fin</label>
                                    <input type="time" id="inputHora_fin" name="hora_fin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="servicio">Servicio</label>
                                    <input type="text" id="inputServicio" name="servicio" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cañon">Cañon</label>
                                    <input type="text" id="inputCañon" name="cañon" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="salon">Salon</label>
                                    <input type="text" id="inputSalon" name="salon" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="cañon">Comentario</label>
                                    <input type="text" id="inputComentario" name="comentario" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="accesorio">Accesorio</label>
                                    <input type="text" id="inputAccesorio" name="accesorio" class="form-control">
                                </div>
                            
                                          <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-success" id="listo-ola">Guardar</button>
                            </div>
              
                        </div>
                        <div class="mensaje">
                            <span class="alert alert-danger" id="error" style='display:none;'></span>
                            <span class="alert alert-success" id="success" style='display:none;'></span>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        //FUNCION PARA CAMBIAR VISTA
        function change_view(vista = 'show_data') {
            $("#main").find(".view").each(function () {
                $(this).slideUp('fast');
                let id = $(this).attr("id");
                if (vista == id) {
                    $(this).slideDown(300);
                }
            });
        }
        //FUNCION PARA CONSULTAR A LA BD
        function consultar() {
            let obj = {
                "accion": "consultar_reservacion"
            };
            $.post("includes/_funciones.php", obj, function (respuesta) {
                let template = ``;
                $.each(respuesta, function (i, e) {
                    template +=
                        `
          <tr>
          <td>${e.usuario}</td>
          <td>${e.fecha_inicio}</td>
          <td>${e.hora_inicio}</td>
          <td>${e.fecha_fin}</td>
          <td>${e.hora_fin}</td>
          <td>${e.servicio}</td>
          <td>${e.cañon}</td>
          <td>${e.salon}</td>
          <td>${e.comentario}</td>
          <td>${e.accesorio}</td>
          <td>${e.status}</td>
          <td>
          <a href="#" data-id="${e.id_reservacion}" class="editar_reservacion">Editar</a>
          <a href="#" data-id="${e.id_reservacion}" class="eliminar_reservacion">Eliminar</a>
          </td>
          </tr>
          `;
                });
                $("#list-usuarios tbody").html(template);
            }, "JSON");
        }
        //FUNCION PARA CAMBIAR VISTA -> FORMULARIO
        $("#nuevo_registro").click(function () {
            change_view('insert_data');
            $("#h2-title").text("Insertar Reservacion");
            $("#guardar_datos").text("Guardar").data("editar", 0);
            $("#preview").html("");
            $("#rangevalue").html("");
            $('#ruta').attr('value', '');
            $("#form_data")[0].reset();
        });
        //FUNCION PARA INSERTAR DATOS A LA BD
        $("#guardar_datos").click(function () {
            let usuario = $("#inputUsuario").val();
            let fecha_inicio = $("#inputFecha_inicio").val();
            let hora_inicio = $("#inputHora_inicio").val();
            let fecha_fin = $("#inputFecha_fin").val();
            let hora_fin = $("#inputHora_fin").val();
            let servicio = $("#inputServicio").val();
            let cañon = $("#inputCañon").val();
            let salon = $("#inputSalon").val();
            let comentario = $("#inputComentario").val();
            let accesorio = $("#inputAccesorio").val();
            let status = $("#inputStatus").val();
            let obj = {
                "accion": "insertar_reservacion",
                "usuario": usuario,
                "fecha_inicio": fecha_inicio,
                "hora_inicio" : hora_inicio,
                "fecha_fin": fecha_fin,
                "hora_fin": hora_fin,
                "servicio": servicio,
                "cañon": cañon,
                "salon": salon,
                "comentario":comentario,
                "accesorio":status
            }
            $("#form_data").find("input").each(function () {
                $(this).removeClass("has-error");
                if ($(this).val() != "") {
                    obj[$(this).prop("name")] = $(this).val();
                } else {
                    $(this).addClass("has-error");
                    return false;
                }
            });
            if ($(this).data("editar") == 1) {
                obj["accion"] = "editar_reservacion";
                obj["id"] = $(this).data('id');
            }
            $.post("includes/_funciones.php", obj, function (v) {
                if (v == 0) {
                    $("#error").html("Campos vacios").fadeIn();
                }
                if (v == 1) {
                    alert("Reservacion insertado");
                    location.reload();
                }
                if (v == 2) {
                    $("#error").html("Favor de ingresar un usuario").fadeIn();
                }
                if (v == 3) {
                    $("#error").html("Favor de ingresar una fecha_inicio").fadeIn();
                }
                if (v == 4) {
                    $("#error").html("Favor de ingresar una hora_inicio").fadeIn();
                }
                if (v == 5) {
                    $("#error").html("Favor de ingresar una fecha_fin").fadeIn();
                }
                if (v == 6) {
                    alert("Reservacion editado");
                    location.reload();
                }
                if (v == 7) {
                    alert("Se produjo en error, intente nuevamente");
                    location.reload();                    
                }
                if (v == 8) {
                    alert("Este loader no está disponible, por favor elimine uno o editelo");
                    location.reload();                    
                }
            });
        });
        //FUNCION PARA ELIMINAR 1 REGISTRO EN LA BD
        $("#main").on("click", ".eliminar_reservacion", function (e) {
            e.preventDefault();
            let confirmacion = confirm('¿Desea eliminar esta Reservacion');
            if (confirmacion) {
                let id = $(this).data('id'),
                    obj = {
                        "accion": "eliminar_reservacion",
                        "id": id
                    };
                $.post("includes/_funciones.php", obj, function (respuesta) {
                    alert(respuesta);
                    consultar();
                });
            } else {
                alert('El registro no se ha eliminado');
            }
        });
        //FUNCION PARA CONSULTAR REGISTRO A EDITAR
        $("#list-usuarios").on("click", ".editar_reservacion", function (e) {
            e.preventDefault();
            let id = $(this).data('id'),
                obj = {
                    "accion": "consultar_registro_reservacion",
                    "id": id
                };
                // <td>${e.usuario}</td>
          //<td>${e.fecha_inicio}</td>
          //<td>${e.hora_inicio}</td>
          //<td>${e.fecha_fin}</td>
          //<td>${e.hora_fin}</td>
          //<td>${e.servicio}</td>
          //<td>${e.cañon}</td>
          //<td>${e.salon}</td>
          //<td>${e.comentario}</td>
          //<td>${e.accesorio}</td>
          //<td>${e.status}</td>
          //<td>
            $("#form_data")[0].reset();
            change_view('insert_data');
            $("#h2-title").text("Editar Reservacion");
            $("#guardar_datos").text("Editar").data("editar", 1).data("id", id);
            $.post("includes/_funciones.php", obj, function (r) {
                $("#inputUsuario").val(r.usuario);
                $("#inputFecha_inicio").val(r.fecha_inicio);
                $("#inputHora_inicio").val(r.hora_inicio);
                $("#inputFecha_fin").val(r.fecha_fin);
                $("#inputHora_fin").val(r.hora_fin);
                $("#inputServicio").val(r.servicio);
                $("#inputCañon").val(r.cañon);
                $("#inputSalon").val(r.salon);
                $("#inputComentario").val(r.comentario);
                $("#inputAccesorio").val(r.accesorio);
                $("#inputStatus").val(r.status);
                let template =
                    `
                   
                    `;
                $("#rangevalue").html(template);
                $("#loader").val(r.loader);
                $("#color").val(r.color);
            }, "JSON");
        });
        //FUNCION DESHABILITAR ATRAS EN EL NAVEGADOR
        function deshabilitaRetroceso() {
            window.location.hash = "no-back-button";
            window.location.hash = "Again-No-back-button" //chrome
            window.onhashchange = function () {
                window.location.hash = "no-back-button";
            }
        }
        //CARGAR FUNCIONES CUANDO EL DOCUMENTO ESTE LISTO
        $(document).ready(function () {
            consultar();
            change_view();
            deshabilitaRetroceso();
        });
        
        
        //BOTON CANCELAR
        $("#main").find(".cancelar").click(function () {
            change_view();
            $("#form_data")[0].reset();
            $("#form_data").find("input").each(function () {
                $(this).removeClass("has-error");
            });
            $("#error").hide();
            $("#success").hide();
            $("#h2-title").text("Consultar Reservacion");
            $("#preview").html("");
            if ($("#guardar_datos").data("editar") == 1) {
                $("#guardar_datos").text("Guardar").data("editar", 0);
                consultar();
            }
        });
    </script>
</body>

</html>
<