<div id="book_display">
	<div class="book_slider"><img src="/assets/img/slider.png" alt="#"></div>
	
	<?php 	
 		//Reglage du nombre de recette à afficher dans controler/home/myrecipe.php
 		echo "<div class='book_pagination'>";											
	 		if ($_GET['pagin'] == 1 or !isset($_GET['pagin'])){
				//on affiche pas le lien
			}
			else{ ?>
				<div class="pag left">
					<a href='/home/mybook/<?php echo $_GET['id_books'] ?>/pagin/<?php echo $prec; ?>' class="bloc_vert"><span class="icon-left"><span></a>
					<span class="texte_pag">Previous</span>
				</div>			
			<?php }
			if ($_GET['pagin'] != $nb_pages){ ?>
				<div class="pag right">
					<span class="texte_pag">Next</span>
					<a href='/home/mybook/<?php echo $_GET['id_books'] ?>/pagin/<?php echo $suiv; ?>' class="bloc_vert"><span class="icon-right"><span></a>
				</div>
			<?php }			
		echo "</div>";	
	?>

	<?php foreach ($show_book3 as $key => $value) { ?>
	<div class="titre_book">
	<?php echo $value['books_name']; ?>
	</div>
	<?php } ?>
	<div class="display_full">
		<div class="left_part">
				<div class="time">
				<?php foreach ($show_recipe_book as $key => $value) { ?>
					<span class="icon icon-clock"></span>
					<span class="textleft">Preparation</span><span class="textright"><?php echo $value['time_prepa'].' min'; ?></span><br/>
					<span class="textleft">Cooking</span><span class="textright"><?php echo $value['time_cuisson'].' min'; ?></span><br/>
					<span class="textleft">Rest</span><span class="textright"><?php echo $value['time_repos'].' min'; ?></span><br/>
				</div>
				<div class="difficulty">
					<span class="icon icon-fire"></span><span style="text-transform:uppercase">Difficulty</span><br/>
					<span class="green_info"><?php echo $value['level']; ?></span>
				</div>
				<div class="ingre">
					<span class="icon icon-pencil"></span><span style="text-transform:uppercase">Ingredients</span><br/>
					<?php echo $value['ingredient'].' <br/>'; ?>
				</div>
		</div>
		<div class="right_part">
			<?php echo $value['preparation']; ?>
		</div>
	</div>
</div>

<?php } ?>





