<div id="contactus" align="center">
<?php if(isset($_SESSION['users_id'])){ ?>
	<div>
		<h1>Create my book</h1>
			<form id="create_book" name="book" action="?appli=home&action=book" method='post'>
				<p>Name of my book</p>
					<input class="book_name" type="text" name="book_name" maxlength="100">
				  	<input class="create_button" type="submit" value="Create">
			</form>
	</div>

	<div>
		<h1>My book</h1>
			<div>
				<?php foreach($show_book as $show_books) { ?>
					<a href=""><?php echo $show_books['books_name'].'<br/>'; ?></a>
				<?php } ?>
		 	</div>
	</div>
<?php } else{ echo '<p align=center>You need to register or connect yourself for create a new book</p>'; } ?>
</div>
