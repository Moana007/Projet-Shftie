<div id="book_catalogue">
	<div class="books">
	    <div class="titre_1">Books catalog</div>
	    	<div class="row_books">
	  		  <?php foreach ($show_book_all as $key => $show_book_all) { ?>
	        <a href="/home/book/<?php echo $show_book_all['books_id']; ?>" class="case_book tooltips"><img src="/assets/img/covercookbook1.jpg"><span><?php echo $show_book_all['books_name']; ?></span></a>
	      <?php } ?>
	      </div>

	      
	</div>
</div>


