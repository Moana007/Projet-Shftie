

<div>

	<h1 align="center" style="color:#89B929;"><?php echo $show_book2['books_name']; ?></h1>
	<?php if(isset($_SESSION['users_id'])) { ?>
	<?php if($_SESSION['users_id'] == $show_book2['books_id_users']) { ?>

		<div align="center">
			<h2 style="color:white;">Add a recipe to my book</h2>
			<form id="ajout" action="?appli=home&action=book_add&id_books=<?php echo $_GET['id_books']; ?>" method='post'>
				<?php if(!empty($show_all_recipe)) { ?>
				<select style="margin:5px;" name="books_id_recettes">
					<?php foreach($show_all_recipe as $show_all_recipes): ?>
							<option value="<?php echo $show_all_recipes['recettes_id']; ?>">
							<?php echo $show_all_recipes['recette_name']; ?>
							</option>  
					<?php endforeach; ?> 
				</select><br/>
				<?php } else {
					echo "<p style='color:#89B929;'>You have no favorite !</p>";
					} ?>
				<button type='submit' class="bt vert">Add</button>
			</form>
		</div>
		<?php } ?>
		<?php } else {	echo '<p align="center" style="background-color:white;">You have be registered for access this page</p>';	} ?>
		
		<h1 align="center" style="color:#89B929;">My recipe</h1>
		
			<?php foreach($show_recipe_book as $show_recipe_books) { ?>
		 <div class="bloc_recette">
	          <a href="?appli=home&action=recipe&id_rec=<?php echo $show_recipe_books['recettes_id']; ?>"><img src="<?php echo $show_recipe_books['photo']; ?>"></a>
	          <div class="info_bloc_recette">
	              <a href="?appli=home&action=recipe&id_rec=<?php echo $show_recipe_books['recettes_id']; ?>"><?php echo $show_recipe_books['recette_name']; ?></a>
	              <?php echo substr(htmlentities($show_recipe_books['description']),0, 230); ?>
	          </div>
	      </div>
		    <?php } ?>
	    
		
</div>

