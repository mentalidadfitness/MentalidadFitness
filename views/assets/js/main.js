// ?c=access&a=signIn
//<--------------- SIGN IN --------------------------------------------->
$("#MF_inputpass").focus(function(){
    $("#MF_inputemail").siblings("span").remove();
    var email = $("#MF_inputemail").val();
    $.post("index.php?c=user&a=validEmail",{email:email},function(data){
        var data = JSON.parse(data);
        $("#MF_inputemail").after("<span class='error'>"+data[0]+"</span>")
        if (data[1] == false) {
            $("#MF_button").attr("disabled",true);
        } else {
            $("#MF_button").attr("disabled",false);
        }
    });
})

 $("#MF_inputemail").focus(function(){
    $(this).siblings("span").remove();
    $("#MF_button").attr("disabled",false);
})

$("#MF_formulario").submit(function(e){
    e.preventDefault();
    if ($(this).parsley().isValid()) {
        var email = $("#MF_inputemail").val();
        var pass = $("#MF_inputpass").val();
        $.post("index.php?c=access&a=signIn",{email:email, pass:pass},function(data){
            var data = JSON.parse(data);

            if (data[0] == true) {
                document.location.href = data[1];
            } else {
                $("#MF_inputpass").after("<span class='error'>"+data[1]+"</span>")
            }
        })
    }
})

//<--------------- END SIGN IN --------------------------------------------->

$("#descBre").focus(function(){
    $("#nameBre").siblings("span").remove();
    var name = $("#nameBre").val();
    $.post("index.php?c=breakfast&a=validBreakfast",{name:name},function(data){
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
    var name = $("#nameBre").val();
    var desc = $("#descBre").val();
    $.post("index.php?c=breakfast&a=create",{name:name, desc:desc},function(data){
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
