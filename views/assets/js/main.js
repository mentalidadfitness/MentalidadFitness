// ?c=access&a=signIn
//<--------------- SIGN IN --------------------------------------------->
$("#pass").focus(function(){
    $("#email").siblings("span").remove();
    var email = $("#email").val();
    $.post("index.php?c=user&a=validEmail",{email:email},function(data){
        var data = JSON.parse(data);
        if (data[1] == false) {
          $("#email").after("<span class='error'>el correo no existe</span>");
            $("#btnSignIn").attr("disabled",true);
        } else {
            $("#btnSignIn").attr("disabled",false);
        }
    });
})

 $("#email").focus(function(){
    $(this).siblings("span").remove();
    $("#btnSignIn").attr("disabled",false);
})

$("#frmSignIn").submit(function(e){
    e.preventDefault();
    if ($(this).parsley().isValid()) {
        var email = $("#email").val();
        var pass = $("#pass").val();
        $.post("index.php?c=access&a=signIn",{email:email, pass:pass},function(data){
            var data = JSON.parse(data);

            if (data[0] == true) {
                document.location.href = data[1];
            } else {
                $("#pass").after("<span class='error'>"+data[1]+"</span>");
            }
        })
    }
})

//<--------------- END SIGN IN --------------------------------------------->
//----------------------- CREATE USER
$("#pas_c_user").focus(function(){
  $("#ema_c_user").siblings("span").remove();
  var email = $("#ema_c_user").val();
  $.post("index.php?c=user&a=validEmail",{email:email},function(data){
          var data = JSON.parse(data);
          if(data[1]==true){
            $("#ema_c_user").after("<span class='error'>el correo existe</span>");
            $("#btn_c_user").attr("disabled",true);
          }else{
            $("#btn_c_user").attr("disabled",false);
          }
  });
});

$("#ema_c_user").focus(function(){
  $(this).siblings("span").remove();
  $("#btn_c_user").attr("disabled",false);
});

$("#frm_c_user").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
	var rol = $("#rol_c_user").val();
	if (!rol) {
		var datauser = [$("#nom_c_user").val(),
	                   $("#ema_c_user").val(),
	                   $("#pas_c_user").val(),
	                   $("#rpw_c_user").val()];
	}else{
  	var datauser = [$("#nom_c_user").val(),
                     $("#ema_c_user").val(),
                     $("#pas_c_user").val(),
                     $("#rpw_c_user").val()];
  	datauser[4]=rol;
	}
  $.post("index.php?c=user&a=create",{datauser:datauser},function(data){
    var data = JSON.parse(data);
    if (data[0]==true) {
      alert(data[1]);
      document.location.href=data[2];
    }else{
      alert(data[1]);
    }
  });
  }
});
//<--------------- CREATE BREAKFAST--------------------------------------------->


$("#descBre").focus(function(){
    $("#nameBre").siblings("span").remove();
    var nameBre = $("#nameBre").val();
    $.post("index.php?c=breakfast&a=validBreakfast",{nameBre:nameBre},function(data){
        var data = JSON.parse(data);
        $("#nameBre").after("<span class='error'>"+data[1]+"</span>")
        if (data[0] == false) {
            $("#btnBreakfast").attr("disabled",true);
        } else {
            $("#btnBreakfast").attr("disabled",false);
        }
    });
})

$("#nameBre").focus(function(){
   $(this).siblings("span").remove();
   $("#btnBreakfast").attr("disabled",false);
})

$("#frmBreakfast").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
    var nameBre = $("#nameBre").val();
    var descBre = $("#descBre").val();
    $.post("index.php?c=breakfast&a=create",{nameBre:nameBre, descBre:descBre},function(data){
      var data = JSON.parse(data);
      if (data[0] === true) {
        alert(data[1]);
        document.location.href=data[2];
      }else{
        alert(data[1]);
      }
    })
  }
});
//<--------------- END CREATE BREAKFAST--------------------------------------------->
//<--------------- CREATE DINNER--------------------------------------------->

$("#descDin").focus(function(){
    $("#nameDin").siblings("span").remove();
    var nameDin = $("#nameDin").val();
    $.post("index.php?c=dinner&a=validDinner",{nameDin:nameDin},function(data){
        var data = JSON.parse(data);
        $("#nameDin").after("<span class='error'>"+data[1]+"</span>")
        if (data[0] == false) {
            $("#btnDinner").attr("disabled",true);
        } else {
            $("#btnDinner").attr("disabled",false);
        }
    });
})

$("#nameDin").focus(function(){
   $(this).siblings("span").remove();
   $("#btnDinner").attr("disabled",false);
})

$("#frmDinner").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
    var nameDin = $("#nameDin").val();
    var descDin = $("#descDin").val();
    $.post("index.php?c=dinner&a=create",{nameDin:nameDin, descDin:descDin},function(data){
      var data = JSON.parse(data);
      if (data[0] === true) {
        alert(data[1]);
        document.location.href=data[2];
      }else{
        alert(data[1]);
      }
    })
  }
});

//<--------------- END CREATE DINNER--------------------------------------------->
//<--------------- CREATE FOOD--------------------------------------------->

$("#proFoo").focus(function(){
    $("#nameFoo").siblings("span").remove();
    var nameFoo = $("#nameFoo").val();
    $.post("index.php?c=food&a=validFood",{nameFoo:nameFoo},function(data){
        var data = JSON.parse(data);
        $("#nameFoo").after("<span class='error'>"+data[1]+"</span>")
        if (data[0] == false) {
            $("#btnFood").attr("disabled",true);
        } else {
            $("#btnFood").attr("disabled",false);
        }
    });
})

$("#nameFoo").focus(function(){
   $(this).siblings("span").remove();
   $("#btnFood").attr("disabled",false);
})

$("#frmFood").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
    var dataF = [$("#nameFoo").val(),$("#proFoo").val(),$("#calFoo").val(),
                 $("#azuFoo").val(),$("#carFoo").val(),$("#fibFoo").val(),
                 $("#vitFoo").val()];
    $.post("index.php?c=food&a=create",{dataF:dataF},function(data){
      var data = JSON.parse(data);
      if (data[0] === true) {
        alert(data[1]);
        document.location.href=data[2];
      }else{
        alert(data[1]);
      }
    })
  }
});
//------------------------------------------------------ROLE
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
      document.location.href="index.php?c=role";
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
//---------------------------------------------------LUNCH
$("#descripcionLun").focus(function(){
  $("#nombreLun").siblings("span").remove();
  var nombreLun = $("#nombreLun").val();
  $.post("index.php?c=lunch&a=validLunch",{nombreLun:nombreLun},function(data){
          var data = JSON.parse(data);

          if(data[0] == false){
            $("#lunaddbut").attr("disabled",true);
            $("#nombreLun").siblings("label").after("<span class='error'>"+data[1]+"</span>");
          }else{
            $("#lunaddbut").attr("disabled",false);
          }
  });
})

$("#nombreLun").focus(function(){
  $(this).siblings("span").remove();
})


$("#frmlun").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
    var nombreLun = $("#nombreLun").val();
    var descripcionLun = $("#descripcionLun").val();
    $.post("index.php?c=lunch&a=create",{nombreLun:nombreLun, descripcionLun:descripcionLun},function(data){
      var data = JSON.parse(data);
      if (data[0] === true) {
        alert(data[1]);
        document.location.href="index.php?c=lunch";
      }else{
        alert(data[1]);
      }
    })
  }
});
