<!DOCTYPE html>
<html>
<head>
	<title></title>

	  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

 #sombra{
 
		
		-webkit-box-shadow: 9px 7px 5px rgba(50, 50, 50, 0.77);
		-moz-box-shadow:    9px 7px 5px rgba(50, 50, 50, 0.77);
		box-shadow:         9px 7px 5px rgba(50, 50, 50, 0.77);
 }

.caption {
    font-size: 1.25rem;
    font-weight: 300;
    margin-bottom: 10px;
}

ghpages-materialize.css:11
p {
    color: rgba(0,0,0,0.71);
    padding: 0;
    -webkit-font-smoothing: antialiased;
}

div.scroll {
    background-color: #00FFFF;
    width: 900px;
    height: 300px;
    overflow: scroll;
}


</style>

</head>
<body>







	<nav>
    <div class="nav-wrapper">
      <a href="/filmes/1" class="brand-logo" ><img src="https://popcorntime.sh/images/pctlogo.png" style="width: 60px;height: 60px;" title="PopWeb" /> <a href="/filmes/1" class="brand-logo" style="left: 70px;" >PopWeb</a></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">

        <li><a href="/filmes/1">Filmes</a></li>
        <li><a href="/shows/1">Shows</a></li>
      </ul>
    </div>
  </nav>



 
  		<center>
		@yield('content')
</center>


</body>
</html>