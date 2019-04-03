<?php
/**
 * The sidebar containing the main widget area.
 */
?>

<button  type="button" class="showBtn"onclick="show()"><i class="fa fa-bars fa-lg"></i></button>

<aside id="secondary" class="widget-area site-column sidebar">
		<div class="sidecontent">
									<div class="sidenav">	
									<ul>
	  			<li><a href="http://localhost/wordpress/"><i class="fa fa-home fa-lg"></i>Hem</a></li>
	  			<li><a href="http://localhost/wordpress/videos/sportnyheter/"><i class="fa fa-fire fa-lg"></i>Populärt</a></li>
	  			<li><a href="http://localhost/wordpress/single-videos/"><i class="fa fa-history fa-lg"></i>Historik</a></li>
	                </ul>
									</div>

			<h1>Det bästa på youtube</h1>

<div class="sidenav-circle">	
									<ul>
		  		<li><a href="#"><i class="fa fa-music"></i>Musik</a></li>
		 		  <li><a href="#"><i class="fa fa-life-ring"></i>Sport</a></li>
		 		  <li><a href="#"><i class="fa fa-gamepad"></i>Gaming</a></li>
					<li><a href="#"><i class="fa fa-film"></i>Filmer</a></li>
					<li><a href="http://localhost/wordpress/nyheter/"><i class="fa fa-paste"></i>Nyheter</a></li>
					<li><a href="#"><i class="fa fa-heart"></i>Live</a></li>
					<li><a href="#"><i class="fa fa-camera"></i>360-video</a></li>
									</ul>
</div>

<div class="sidenav">
					<p><i class="fa fa-plus-circle"></i>Bläddra bland kanaler</p>
</div>

<div class="sidenav">
					<p>Logga in nu om du vill se
							dina kanaler och
							rekomenderationer!
							<a href="#">LOGGA IN</a>
					</p>

</div>

					<h1>Mer från youtube</h1>
<div class="sidenav">	<ul>
					<li><a href="#">Youtube Premium</a></li>
					<li><a href="#">Live</a></li>
											</ul>
</div>

<div class="sidenav">	<ul>
					<li><a href="#">Inställningar</a></li>
					<li><a href="#">RaportHistorik</a></li>
					<li><a href="#">Hjälp</a></li>
					<li><a href="#">Skicka Feedback</a></li>
										 </ul>
</div>
					<p><a href="#">Om press</a>	<a href="#">Upphovsrätt</a>	<a href="#">Kontakta oss</a>
							<a href="#">Innehållsskapare</a>	<a href="#">Annonsera</a>	<a href="#">Utvecklare</a>
						</br>
						<a href="#">Vilkor</a><a href="#">Sekretess</a><a href="#">Policy & säkerhet</a>
						<a href="#">Testa nya funktioner</a>
					</p>

					<p>2019 © Youtube,LLC</p>
</div>
</aside>

<script>
function show() {
  var side = document.getElementById("secondary");
  if (side.style.display === "none") {
    side.style.display = "block";
  } else {
    side.style.display = "none";
  }
}
</script>
