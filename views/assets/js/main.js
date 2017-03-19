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

 var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
 acc[i].onclick = function(){
     /* Toggle between adding and removing the "active" class,
     to highlight the button that controls the panel */
     this.classList.toggle("active");

     /* Toggle between hiding and showing the active panel */
     var panel = this.nextElementSibling;
     if (panel.style.display === "block") {
         panel.style.display = "none";
     } else {
         panel.style.display = "block";
     }
 }
}
