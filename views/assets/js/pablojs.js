//ROLE
$("#estadoRol").focus(function(){
  $("#nombreRol").siblings("span").remove();
  var name = $("#nombreRol").val();
  $.post("index.php?c=role&a=validRole",{nombre:name},function(data){
          var data = JSON.parse(data);

          if(data[0] == false){
            $("#roleaddbut").attr("disabled",true);
            $("#nombreRol").siblings("label").after("<span class='error'>"+data[1]+"</span>");
          }else{
            $("#roleaddbut").attr("disabled",false);
          }
  });
})

$("#nombreRol").focus(function(){
  $(this).siblings("span").remove();
})


$("#frmrole").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
    var name = $("#nombreRol").val();
    var status = $("#estadoRol").val();
    $.post("index.php?c=role&a=create",{nombre:name, estado:status},function(data){
      var data = JSON.parse(data);
      if (data[0] === true) {
        alert(data[1]);
        document.location.href="index.php?c=role";
      }else{
        alert(data[1]);
      }
      //document.location.href="index.php?c=role";
    })
  }
});
//------------------------------PAGE
$("#iconoPag").focus(function(){
  $("#nombrePag").siblings("span").remove();
  var name = $("#nombrePag").val();
  $.post("index.php?c=page&a=validPage",{nombre:name},function(data){
          var data = JSON.parse(data);

          if(data[0] == false){
            $("#pagaddbut").attr("disabled",true);
            $("#nombrePag").siblings("label").after("<span class='error'>"+data[1]+"</span>");
          }else{
            $("#pagaddbut").attr("disabled",false);
          }
  });
})

$("#nombrePag").focus(function(){
  $(this).siblings("span").remove();
})


$("#frmpag").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
    var name = $("#nombrePag").val();
    var icon = $("#iconoPag").val();
    var main = $("#menuPag").val();
    var colors = $("#coloresPag").val();
    var url = $("#urlPag").val();
    var photo = $("#fotoPag").val();
    var description = $("#descripcionPag").val();
    var button = $("#botonesPag").val();
    var propierty = $("#propiedadesPag").val();
    var section = $("#seccionesPag").val();
    var images = $("#imagenesPag").val();
    var status = $("#estadoPag").val();
    $.post("index.php?c=page&a=create",{nombre:name,icono:icon,menu:main,colores:colors,url:url,foto:photo,descripcion:description,boton:button,propiedad:propierty,seccion:section,imagenes:images,estado:status},function(data){
      var data = JSON.parse(data);
      if (data[0] === true) {
        alert(data[1]);
        document.location.href="index.php?c=page";
      }else{
        alert(data[1]);
      }
    })
  }
});
//-------------------------------------------Exercise
$("#fechaExe").focus(function(){
  $("#nombreExe").siblings("span").remove();
  var name = $("#nombreExe").val();
  $.post("index.php?c=exercise&a=validExercise",{nombre:name},function(data){
          var data = JSON.parse(data);

          if(data[0] == false){
            $("#exeaddbut").attr("disabled",true);
            $("#nombreExe").siblings("label").after("<span class='error'>"+data[1]+"</span>");
          }else{
            $("#exeaddbut").attr("disabled",false);
          }
  });
})

$("#nombreExe").focus(function(){
  $(this).siblings("span").remove();
})


$("#frmexe").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
    var name = $("#nombreExe").val();
    var day = $("#fechaExe").val();
    var status = $("#estadoExe").val();
    $.post("index.php?c=exercise&a=create",{nombre:name,fecha:day,estado:status},function(data){
      var data = JSON.parse(data);
      if (data[0] === true) {
        alert(data[1]);
        document.location.href="index.php?c=exercise";
      }else{
        alert(data[1]);
      }
    })
  }
});
//------------------------------------SNACK
$("#descripcionSna").focus(function(){
  $("#nombreSna").siblings("span").remove();
  var name = $("#nombreSna").val();
  $.post("index.php?c=snack&a=validSnack",{nombre:name},function(data){
          var data = JSON.parse(data);

          if(data[0] == false){
            $("#snaaddbut").attr("disabled",true);
            $("#nombreSna").siblings("label").after("<span class='error'>"+data[1]+"</span>");
          }else{
            $("#snaaddbut").attr("disabled",false);
          }
  });
})

$("#nombreSna").focus(function(){
  $(this).siblings("span").remove();
})


$("#frmsna").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
    var name = $("#nombreSna").val();
    var description = $("#descripcionSna").val();
    $.post("index.php?c=snack&a=create",{nombre:name, descripcion:description},function(data){
      var data = JSON.parse(data);
      if (data[0] === true) {
        alert(data[1]);
        document.location.href="index.php?c=snack";
      }else{
        alert(data[1]);
      }
    })
  }
});
