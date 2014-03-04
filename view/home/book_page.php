<?php if (isset($_SESSION['users_id'])) { ?>

<div id="book_catalogue">
	<div class="books">
	    <div class="titre_1">My Books</div>
	    	<div class="row_books">
	  		  <?php foreach ($show_book as $key => $value) { ?>
	        <a href="/home/mybook/<?php echo $value['books_id']; ?>" class="case_book tooltips">
	       	 <img src="/assets/img/covercookbook1.jpg">
	        	<span><?php echo $value['books_name']; ?></span>	        
	        </a>
	      	<?php } ?>
	      	</div>

	</div>
</div>

<?php } ?>