<div id="slider">
	<div class="image_slider"><img src="<?php echo $top_recipe['photo']; ?>">
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
		<div class="home6 bg_home bg_orange">
			<div class="home_title bg_orange">Shiftie News</div>
			<div class="news">Shiftie has been developped throught our third and last year of study at EEMI. This is now our final Beta version, feel free to test everything and give us some feedback on our contact page! <br/>Cheers!</div>
		</div>
		<div class="home10 bg_home bg_black">
			<div class="home_title bg_white">They talk about us</div>
			<div class="content">
				<img href="#" src="assets/img/tabata.png">
				<span>Tabata Bonardi</span></br>
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
		<div class="home4 bg_home">
			<div class="home_title bg_white">Partners</div>
			<img src="assets/img/partner2.png" alt=""/>
		</div>
	</div>
	<div class="col3">
		<?php ?>
		<div class="home5 bg_home bg_black">
			<div class="home_title bg_white">Book of the week</div>
			<img href="#" src="assets/img/cover_book.png"></br>
			<span>by <?php echo $ofzemonth['users_name'].''.$ofzemonth['users_firstname']; ?></span>
		</div>
		<div class="home11 bg_home bg_black">
			<div class="home_title bg_white">They talk about us</div>
			<div class="content">
				<img href="#" src="assets/img/cyril.png">
				<span>Cyril Lignac</span></br>
			</div>
		</div>
		<div class="home12 bg_home bg_orange">
			<div class="home_title bg_orange">Shiftie News</div>
			<div class="news">Our news features which are coming very soon, are about the Gamification of Shiftie. You'll be able to win badges and achievement to compete between each others.<br/> Don't forget that you'll have a Shiftie application for iOS and Android!</div>
		</div>
	</div>
	<div class="col4">
		<div class="home7 bg_home bg_grey">
			<div class="home_title bg_grey">Newsletter</div>
			<span>Subscribe our newsletter to be informed of new recipes, new books and promotions of our partners</span>
			<input class="newsletter" placeholder="Shiftie@shiftie.org"></input>
			<button class="bt gris"><span class="icon icon-check"></span></button>
		</div>

		<div class="home9 bg_home bg_black">
			<div class="home_title bg_white">Social</div>
			<div class="social_image">
				<a href="https://www.facebook.com/shiftie.org"><img src="assets/img/fb.png" alt=""/></a>
				<a href="https://plus.google.com/+ShiftieOrg/"><img src="assets/img/google.png" alt=""/></a>
				<a href="https://twitter.com/ShiftieCooking"><img src="assets/img/twitter.png" alt=""/></a>
			</div>
		</div>

		<div class="home8 bg_home">
			<div class="home_title bg_white">Partners</div>
			<img href="#" src='assets/img/partner.png'>
		</div>
		<div class="home13 bg_home">
			<div class="home_title bg_white">Partners</div>
			<img src="assets/img/partner3.png" alt=""/>
		</div>
	</div>
	<div style='clear:both;'></div>

</div>