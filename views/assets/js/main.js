$(document).ready(function() {

  $('input').blur(function() {

    if ($(this).val())
      $(this).addClass('used');
    else
      $(this).removeClass('used');

  });
});

function openNav() {
     document.getElementById("mySidenav").style.width = "250px";
     document.getElementById("main").style.marginLeft = "250px";
     document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
 }

 function closeNav() {
     document.getElementById("mySidenav").style.width = "0";
     document.getElementById("main").style.marginLeft= "0";
     document.body.style.backgroundColor = "white";
 }
