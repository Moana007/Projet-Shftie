<?php if(isset($_SESSION['users_id'])){ ?>
	
	<div id="createbooks" class="createbooks">
		<div class="create_books_step1">
			<div class="titre_2">Create my book</div>
			<form id="create_book" name="book" action="/home/book" method='post'>
				<div class="bloc_name">
					<div class="name">Name of my book</div><br/>
					<input class="book_name" type="text" name="book_name" maxlength="100">
					<div class="img_cover_test"><img alt="" src="/assets/img/cover_book.png"></div>
					<div class="name_cover">Choose your cover over here:</div>
					<div class="row_covers">

							<div class="choose_cover">
								<img alt="" src="/assets/img/covercookbook1.jpg">
								<input type="radio" name="group1" value="cover1" class="cover">
							</div>

							<div class="choose_cover">
								<img alt="" src="/assets/img/covercookbook2.jpg">
								<input type="radio" name="group1" value="cover2" class="cover">
							</div>

							<div class="choose_cover">	
								<img alt="" src="/assets/img/covercookbook3.jpg">
								<input type="radio" name="group1" value="cover3" class="cover">
							</div>

							<div class="choose_cover">	
								<img alt="" src="/assets/img/covercookbook4.jpg">	
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
			<form action="/home/bookPage" name="editbook" id="editbook" method="post">
				<select>
					<?php foreach($show_book as $show_book) { ?>
						<option value="<?php echo $show_book['books_id']; ?>">
						<?php echo $show_book['books_name']; ?>
						</option>  
					<?php } ?>	
				</select>
				<button class="bt vert" type="submit">Edit</button>
			</form>
			
		</div>
	</div>



	
		 
<?php } else{ echo '<p align=center>You need to register or connect yourself for create a new book</p>'; } ?>
</div>















