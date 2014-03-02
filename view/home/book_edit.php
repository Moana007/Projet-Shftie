<?php if(isset($_SESSION['users_id'])){ ?>
<div id="editbooks">
		<div class="edit_book">
			<div class="titre_2">Edit your books</div>
			<div class="name">Choose one of your books in the list below</div>
				<form action="?appli=home&action=book_edit" name="editbook" id="editbook" method="post">				
				<select name="book">
					<?php foreach($show_book as $show_books) { ?>
						<option value="<?php echo $show_books['books_id']; ?>">
						<?php echo $show_books['books_name']; ?>
						</option>  
					<?php } ?>	
				</select>
				<button class="bt vert" type="submit">Edit</button>
			</form>
			
		</div>
	</div>
<?php } ?>