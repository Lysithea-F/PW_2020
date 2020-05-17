<!DOCTYPE html>
<html>
<head>
	<title></title>

	   <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>

	<!-- Navbar -->
	<nav class="light-blue darken-2">
		<div class="container">
	   		<div class="nav-wrapper">
	     		<a href="#" class="brand-logo"><b>Hikmat Fadrial R</b></a>
	     			<ul id="nav-mobile" class="right hide-on-med-and-down">
	       			<li><a href="php/login.php">Login</a></li>
	       			<li><a href="registrasi.php">Registrasi</a></li>
	     			</ul>
	   		</div>
	   </div>
	 </nav>

	 <!-- Sidenav -->
	 <ul class="sidenav" id="mobile-nav">
	 	<li><a href="">Login</a></li>
	 	<li><a href="">Registrasi</a></li>
	 </ul>

	 
  <div class="row">
    <div class="col s12 m4">
      <div class="card deep-purple">
        <div class="card-content white-text">
          <span class="card-title center"><h5><b>Tugas Besar</b></h5></span>
          <p></p>
        </div>
        <div class="card-action">
          <a href="TugasBesar/index.php">This is a link</a>
        </div>
      </div>
    </div>
     <div class="col s12 m4">
      <div class="card indigo">
        <div class="card-content white-text">
          <span class="card-title center"><h5><b>Praktikum </b></h5></span>
          <p></p>
        </div>
        <div class="card-action">
          <a href="Praktikum">This is a link</a>
        </div>
      </div>
    </div>
     <div class="col s12 m4">
      <div class="card blue">
        <div class="card-content white-text">
          <span class="card-title center"><h5><b>Kuliah</b></h5></span>
          <p></p>
        </div>
        <div class="card-action">
          <a href="Kuliah">This is a link</a>
        </div>
      </div>
    </div>
  </div>



      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
      const sidenav = document.querySelectorAll('.sidenav');
      M.Sidenav.init(sidenav);

      const materialbox = document.querySelectorAll('.materialboxed');
      M.Materialbox.init(materialbox);
      
      const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll, {
          scrollOffset: 50
        });


      </script>

</body>
</html>