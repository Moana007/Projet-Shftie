<div id="contactus" align="center">
<?php if(isset($_SESSION['users_id'])){ ?>
	<div>
		<h1 style="color:#89B929;">Create my book</h1>
			<form id="create_book" name="book" action="?appli=home&action=book" method='post'>
				<p style="color:white;">Name of my book</p>
					<input class="book_name" type="text" name="book_name" maxlength="100">
				  	<input class="create_button" type="submit" value="Create">
			</form>
	</div>

	<div>
		<h1 style="color:#89B929;">My book</h1>
				<?php foreach($show_book as $show_books) { ?>
				<div>
					<a style="color:white;" href="?appli=home&action=book_content&id_books=<?php echo $show_books['books_id']; ?>"><?php echo $show_books['books_name'].'<br/>'; ?></a>
				
		            <?php if(isset($_SESSION['users_id']) && $_SESSION['users_id'] == $show_books['books_id_users']) { ?>
					 	<a style="color:white;" href="?appli=home&action=book&page=book&books_id=<?php echo $show_books['books_id']; ?>" onclick="return(confirm('Etes-vous sur de vouloir supprimer ce livre ?'));">X</a>
				 	<?php } ?>
				</div>
			    <?php } ?>


	</div>
<?php } else{ echo '<p align=center>You need to register or connect yourself for create a new book</p>'; } ?>
</div>