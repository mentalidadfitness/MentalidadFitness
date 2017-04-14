$("#estador").focus(function(){
  $("#namer").siblings("span").remove();
  var name = $("#namer").val();
  $.post("index.php?c=role&a=validRole",{nombre:name},function(data){
          var data = JSON.parse(data);

          if(data[0] == false){
            $("#roleaddbut").attr("disabled",true);
            $("#namer").siblings("label").after("<span class='error'>"+data[1]+"</span>");
          }else{
            $("#roleaddbut").attr("disabled",false);
          }
  });
})

$("#namer").focus(function(){
  $(this).siblings("span").remove();
})


$("#frmrole").submit(function(e){
  e.preventDefault();
  if ($(this).parsley().isValid()) {
    var name = $("#namer").val();
    var status = $("#estador").val();
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
