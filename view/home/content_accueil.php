<div id="slider">
	<div class="image_slider"><img src="assets/img/slider.png">
		<div class="info_slider">
			<span class="slider_titre"><?php echo $top_recipe['recette_name'] ?></span>
			<span class="slider_auteur">by <?php echo $top_recipe['users_name'] ?></span>
			<span class="slider_texte"><?php echo $top_recipe['description'] ?> </span>
			<a href="#" class="bt gris">See More</a>
		</div>
	</div>
</div>

<!--FIN SLIDER DEBUT CONTENT -->
<div id="homepage" class="reso_1024">
	<div class="col1">
		<div class="home1 bg_home bg_black">
			<div class="home_title bg_white">Chef of the week</div>
			<div class="content">
				<img href="#" src="assets/img/img_chef.png">
				<span>John DoeMorris</span></br>
				<a href="#" class="view_p">View Profil</a>
			</div>
		</div>
		<div class="home2 bg_home bg_black">
			<div class="home_title bg_green">Find us on Facebook</div>
			<div class="content">
				<span></span>
			</div>
		</div>
	</div>
	<div class="col2">
		<div class="home3 bg_home bg_green">
			<div class="home_title bg_green">What is Shiftie?</div>
			<div class="content">
				Shiftie is a new site who's proposing to users to post their recipes and to vote for others users' recipes, all that to promote the most voted recipe on the homepage for 24H.</br></br>
				You can also create your own cookbook which will be available on the website or the mobile app!</br></br>
				You can also log in to post your first recipe, let's go!
			</div>
		</div>
		<div class="home4 bg_home bg_black">
			<div class="home_title bg_white">Our Google+ Page</div>
			<div class="center">
				<img src="assets/img/like_panel.png">
			</div>
		</div>
	</div>
	<div class="col3">
		<?php ?>
		<div class="home5 bg_home bg_black">
			<div class="home_title bg_white">Book of the week</div>
			<img href="#" src="assets/img/cover_book.png"></br>
			<span>by <?php echo $ofzemonth['users_name'].''.$ofzemonth['users_firstname']; ?></span>
		</div>
		<div class="home6 bg_home bg_orange">
			<div class="home_title bg_orange">Shiftie News</div>
			<div class="news">This is the place where whe are going to display some of our news, or some random posts. Everyday this news will be changer by another one from our team.</div>
		</div>
	
	</div>
	<div class="col4">
		<div class="home7 bg_home bg_grey">
			<div class="home_title bg_grey">Newsletter</div>
			<span>Subscribe our newsletter to be informed of new recipes, new books and promotions of our partners</span>
			<input class="newsletter" placeholder="Shiftie@shiftie.org"></input>
			<button class="bt gris"><span class="icon icon-check"></span></button>
		</div>
		<div class="home8 bg_home">
			<div class="home_title bg_white">Partners</div>
			<img href="#" src='assets/img/partner.png'>
		</div>
	</div>

</div>