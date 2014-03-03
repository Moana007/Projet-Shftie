

<div>
	

	<div id="choosefav">
	<form action="/home/book" method="post">
		<div class="choose_fav">
			<h1 align="center" style="color:#89B929;"><?php echo $show_book2['books_name']; ?></h1>
			<?php if(isset($_SESSION['users_id'])) { ?>
			<?php if($_SESSION['users_id'] == $show_book2['books_id_users']) { ?>
				<div class="row_titre">
					<div class="titre_2">Choose your recipe for this book</div>
					<div class="filter">Filters:<a href="#">Recently added</a><a href="#">By votes</a><a href="#">By favorites</a><a href="#">Tags</a></div>
				</div>

			<?php foreach ($show_all_recipe as $key => $show_all_recipe) { ?>
			<div class="bloc_recette">
				<a href="#"><img src="<?php echo $show_all_recipe['photo']; ?>"></a>
				<div class="info_bloc_recette">
					<a href="#"><?php echo $show_all_recipe['recette_name']; ?></a>
					<?php echo $show_all_recipe['description']; ?>
				</div>
				<div class="views_bloc_recette">
					<div class="views"><span class="icon icon-star-empty"></span>30</div>
					<div class="views"><span class="icon icon-heart-empty"></span>30</div>
					<div class="views"><span class="icon icon-comment-empty"></span>30</div>
				</div>
				
				<input type="hidden" name="books_id" value="<?php echo $show_book2['books_id']; ?>">
				<input type="checkbox" name="recipe_book[]" value="<?php echo $show_all_recipe['recettes_id']; ?>" class="check">				
				
			</div>
			<?php } ?>
			<button class="bt vert" type="submit">Add</button>
		</div>

		</form>
	</div>

		<?php } ?>
		<?php } else {	echo '<p align="center" style="background-color:white;">You have be registered for access this page</p>';	} ?>
		
			
</div>

