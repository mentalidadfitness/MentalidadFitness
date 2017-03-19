<div class="container">
     <header>
       <nav class="navbar navbar-inverse navbar-fixed-top" id="navitar">
         <div id="mySidenav" class="sidenav">
           <span class="closebtn" onclick="closeNav()" id="cerrar">&times;</span>
           <a href="#slideshow" id="inicio"><i class="fa fa-home" aria-hidden="true"></i> INICIO</a>
           <button class="accordion" style="font-size: 15px;color: black;"> COMIDAS</button>
           <div class="panel">
             <ul style="list-style:none">
               <li><a href="?c=alimento">Alimentos</a></li>
               <li><a href="?c=desayuno">Desayunos</a></li>
               <li><a href="?c=almuerzo">Almuerzos</a></li>
               <li><a href="?c=snack">Snacks</a></li>
               <li><a href="?c=comida">Cena</a></li>
               <li><a href="?c=dieta">Dieta</a></li>
             </ul>
           </div>
           <button class="accordion" style="font-size: 15px;color: black;"> SEGURIDAD</button>
           <div class="panel">
             <ul style="list-style:none">
               <li><a href="">Rol</a></li>
               <li><a href="">Pagina</a></li>
               <li><a href="">Usuario</a></li>
             </ul>
           </div>
           <a href="#contacto"><i class="fa fa-envelope-open" aria-hidden="true"></i> EJERCICIOS</a>
         </div>
         <a href="#" class="navbar-brand hidden-xs" style=""></a>
         <span style="font-size:30px;cursor:pointer;color:#ffb81f;margin-left:1%;margin-top:3px;position:absolute" onclick="openNav()">&#9776;</span>
         </div>
         <div class="" id="main">
           <img src="views/assets/images/images_principal/MF.jpg" style="margin-top: 51px;">
         </div>
       </nav>
     </header>
   </div>

  <script>
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

  </script>
