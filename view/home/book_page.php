<?php if (isset($_SESSION['users_id'])) { ?>

<div id="book_catalogue">
	<div class="books">
	    <div class="titre_1">Books catalog</div>
	    	<div class="row_books">
	  		  <?php foreach ($show_book as $key => $value) { ?>
	        <a href="/home/mybook/<?php echo $value['books_id']; ?>" class="case_book tooltips">
	       	 <img src="/assets/img/covercookbook1.jpg">
	        	<span><?php echo $value['books_name']; ?></span>	        
	        </a>
	      	<?php } ?>
	      	</div>

	      <?php 	
	 		//Reglage du nombre de recette à afficher dans controler/home/myrecipe.php
	 		echo "<div class='pagination'>";											
		 		if ($_GET['pagin'] == 1 or !isset($_GET['pagin'])){
					//on affiche pas le lien
				}
				else{
					echo "<a class='bt vert' href='".$_SERVER["PHP_SELF"]."?appli=home&action=myrecipe&pagin=".$prec."' ><span class='icon icon-left'></span></a>";
				}
				
				for ($i=1; $i<=$nb_pages; $i++){
					if ($_GET['pagin'] == $i){
						$style = "class='bt vert'"; 
					}
					else{
						$style = "class='bt gris'";
					}
					echo "<a ".$style." href='".$_SERVER["PHP_SELF"]."?appli=home&action=myrecipe&pagin=".$i."'><span>".$i."</span></a>";
				}
				if ($_GET['pagin'] != $nb_pages){
					echo "<a class='bt vert' href='".$_SERVER["PHP_SELF"]."?appli=home&action=myrecipe&pagin=".$suiv."' ><span class='icon icon-right'></span></a>";
				}			
			echo "</div>";	
		?>

	</div>
</div>

<?php } ?>