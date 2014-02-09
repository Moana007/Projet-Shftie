
<div id="right_content">
    

<table class="table table-striped">
 		<thead>
 			<tr>
 				<td>
 					Nom du Books
 				</td>
 				<td>
 					Auteur
 				</td>
 				<td>
 					Désélire
 				</td>
 				<td>
 					Derniere mise a jour
 				</td>
 			</tr>
 		</thead>
 		<tbody>
   <?php foreach ($elu as $elu): ?>
    <tr>
        <td>
            <?php echo $elu['books_name'];?>
        </td>
        <td>
            <?php echo $elu['books_id_users'];?>
        </td>
        <td>
            <form action="?appli=book&action=deselire_book" method="post" id="deselireBook">
                <input type="hidden" name="id_book_elu" id="id_book_elu" value="<?php echo $elu['books_id'];?>"/>
                <button type="submit" class="btn btn-default">Deselire</button>
            </form>
        </td>
        <td>
            crée table update date
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
        
        BOOKS EN COMPET<br/>
      
<table class="table table-striped">
 		<thead>
 			<tr>
 				<td>
 					Nom du Books
 				</td>
 				<td>
 					Auteur
 				</td>
 				<td>
 					Elire
 				</td>
 				<td>
 					Derniere mise a jour
 				</td>
 			</tr>
 		</thead>
 		<tbody>
   <?php foreach ($show_book as $book): ?>
    <tr>
        <td>
            <?php echo $book['books_name'];?>
        </td>
        <td>
            <?php echo $book['books_id_users'];?>
        </td>
        <td>
            <form action="?appli=book&action=elire_book" method="post" id="elireBook">
                <input type="hidden" name="id_book" id="id_book" value="<?php echo $book['books_id'];?>"/>
                <button type="submit" class="btn btn-default">Elire</button>
            </form>
        </td>
        <td>
            crée table update date
        </td>
        </tr>
    <?php endforeach; ?>
     </tbody>
</table>
</div>
