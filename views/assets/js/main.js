// ?c=access&a=signIn

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
