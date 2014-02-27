<div>
<?php if(isset($_SESSION['users_id'])){ ?>
	
	<div id="createbooks">
		<div class="create_books_step1">
			<div class="titre_2">Create my book</div>
			<form id="create_book" name="book" action="?appli=home&action=book" method='post'>
				<div class="bloc_name">
					<div class="name">Name of my book</div><br/>
					<input class="book_name" type="text" name="book_name" maxlength="100">
					<div class="img_cover_test"><img alt="" src="assets/img/cover_book.png"></div>
					<div class="name_cover">Choose your cover over here:</div>
					<div class="row_covers">

							<div class="choose_cover">
								<img alt="" src="assets/img/covercookbook1.jpg">
								<input type="radio" name="group1" value="cover1" class="cover">
							</div>

							<div class="choose_cover">
								<img alt="" src="assets/img/covercookbook2.jpg">
								<input type="radio" name="group1" value="cover2" class="cover">
							</div>

							<div class="choose_cover">	
								<img alt="" src="assets/img/covercookbook3.jpg">
								<input type="radio" name="group1" value="cover3" class="cover">
							</div>

							<div class="choose_cover">	
								<img alt="" src="assets/img/covercookbook4.jpg">	
								<input type="radio" name="group1" value="cover4" class="cover">
							</div>

						</div>	
					</div>
					<button class="bt vert" type="submit">Create</button>
			</form>
		</div>
	</div>

	<div id="editbooks">
		<div class="edit_book">
			<div class="titre_2">Edit your books</div>
			<div class="name">Choose one of your books in the list below</div>
			<select>
				<option>Turlutoto</option>
				<option>Turlutoto</option>
				<option>Turlutoto</option>
				<option>Turlutoto</option>
				<option>Turlutoto</option>
				<option>Turlutoto</option>
				<option>Turlutoto</option>
				<option>Turlutoto</option>
				<option>Turlutoto</option>
				<option>Turlutoto</option>
			</select>
		</div>
	</div>


	<div id="choosefav">
		<div class="choose_fav">
			<div class="row_titre">
				<div class="titre_2">Choose your recipe for this book</div>
				<div class="filter">Filters:<a href="#">Recently added</a><a href="#">By votes</a><a href="#">By favorites</a><a href="#">Tags</a></div>
			</div>

		<div class="bloc_recette">
			<a href="#"><img src="assets/img/290x190_recette.png"></a>
			<div class="info_bloc_recette">
				<a href="#">Bruschetta</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</div>
			<div class="views_bloc_recette">
				<div class="views"><span class="icon icon-star-empty"></span>30</div>
				<div class="views"><span class="icon icon-heart-empty"></span>30</div>
				<div class="views"><span class="icon icon-comment-empty"></span>30</div>
			</div>
			<input type="radio" name="" value="" class="check">
		</div>

		<div class="bloc_recette">
			<a href="#"><img src="assets/img/290x190_recette.png"></a>
			<div class="info_bloc_recette">
				<a href="#">Bruschetta</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</div>
			<div class="views_bloc_recette">
				<div class="views"><span class="icon icon-star-empty"></span>30</div>
				<div class="views"><span class="icon icon-heart-empty"></span>30</div>
				<div class="views"><span class="icon icon-comment-empty"></span>30</div>
			</div>
			<input type="radio" name="" value="" class="check">
		</div>

		<div class="bloc_recette">
			<a href="#"><img src="assets/img/290x190_recette.png"></a>
			<div class="info_bloc_recette">
				<a href="#">Bruschetta</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</div>
			<div class="views_bloc_recette">
				<div class="views"><span class="icon icon-star-empty"></span>30</div>
				<div class="views"><span class="icon icon-heart-empty"></span>30</div>
				<div class="views"><span class="icon icon-comment-empty"></span>30</div>
			</div>
			<input type="radio" name="" value="" class="check">
		</div>

		<div class="bloc_recette">
			<a href="#"><img src="assets/img/290x190_recette.png"></a>
			<div class="info_bloc_recette">
				<a href="#">Bruschetta</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</div>
			<div class="views_bloc_recette">
				<div class="views"><span class="icon icon-star-empty"></span>30</div>
				<div class="views"><span class="icon icon-heart-empty"></span>30</div>
				<div class="views"><span class="icon icon-comment-empty"></span>30</div>
			</div>
			<input type="radio" name="" value="" class="check">
		</div>

		<div class="bloc_recette">
			<a href="#"><img src="assets/img/290x190_recette.png"></a>
			<div class="info_bloc_recette">
				<a href="#">Bruschetta</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</div>
			<div class="views_bloc_recette">
				<div class="views"><span class="icon icon-star-empty"></span>30</div>
				<div class="views"><span class="icon icon-heart-empty"></span>30</div>
				<div class="views"><span class="icon icon-comment-empty"></span>30</div>
			</div>
			<input type="radio" name="" value="" class="check">
		</div>

		<div class="bloc_recette">
			<a href="#"><img src="assets/img/290x190_recette.png"></a>
			<div class="info_bloc_recette">
				<a href="#">Bruschetta</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</div>
			<div class="views_bloc_recette">
				<div class="views"><span class="icon icon-star-empty"></span>30</div>
				<div class="views"><span class="icon icon-heart-empty"></span>30</div>
				<div class="views"><span class="icon icon-comment-empty"></span>30</div>
			</div>
			<input type="radio" name="" value="" class="check">
		</div>

		<div class="bloc_recette">
			<a href="#"><img src="assets/img/290x190_recette.png"></a>
			<div class="info_bloc_recette">
				<a href="#">Bruschetta</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</div>
			<div class="views_bloc_recette">
				<div class="views"><span class="icon icon-star-empty"></span>30</div>
				<div class="views"><span class="icon icon-heart-empty"></span>30</div>
				<div class="views"><span class="icon icon-comment-empty"></span>30</div>
			</div>
			<input type="radio" name="" value="" class="check">
		</div>

		<div class="bloc_recette">
			<a href="#"><img src="assets/img/290x190_recette.png"></a>
			<div class="info_bloc_recette">
				<a href="#">Bruschetta</a>
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
			</div>
			<div class="views_bloc_recette">
				<div class="views"><span class="icon icon-star-empty"></span>30</div>
				<div class="views"><span class="icon icon-heart-empty"></span>30</div>
				<div class="views"><span class="icon icon-comment-empty"></span>30</div>
			</div>
			<input type="radio" name="" value="" class="check">
		</div>

		<button class="bt vert" type="submit">Create</button>

		</div>
	</div>
		 



















	<div>
		<h1 style="color:#89B929;">My book</h1>
				<?php foreach($show_book as $show_books) { ?>
				<div>
					<a style="color:white;" href="?appli=home&action=book&id_books=<?php echo $show_books['books_id']; ?>"><?php echo $show_books['books_name'].'<br/>'; ?></a>
				
		            <?php if(isset($_SESSION['users_id']) && $_SESSION['users_id'] == $show_books['books_id_users']) { ?>
					 	<a style="color:white;" href="?appli=home&action=book&page=book&books_id=<?php echo $show_books['books_id']; ?>" onclick="return(confirm('Do you really want delete this book ?'));">X</a>
				 	<?php } ?>
				</div>
			    <?php } ?>


	</div>
<?php } else{ echo '<p align=center>You need to register or connect yourself for create a new book</p>'; } ?>
</div>