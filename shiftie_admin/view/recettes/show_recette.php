<?php 
    $id = $_GET['id'];
    $show = show_recette($id);
    foreach($show as $show):
?>
<form method="post" action="#">
    Titre : 
    <input  type="hidden"  name="id" value="<?php echo $id ?>"/>
    <input class="form-control" type="text"  name="recette_name" value="<?php echo $show['recette_name']; ?>"/>
    Description : 
    <input class="form-control" type="text"  name="description" value="<?php echo $show['description']; ?>"/>
    Preparation : 
    <input class="form-control" type="text"  name="preparation" value="<?php echo $show['preparation']; ?>"/>
    Ingredient : 
    <input class="form-control" type="text"  name="ingredient" value="<?php echo nl2br($show['ingredient']); ?>"/> 
    <br/>
        <button class="btn btn-success" type="submit">UPDATE</button>
       
        <button class="btn btn-danger" id="fermer_show" >CANCEL</button>
    </form>
<?php   
    endforeach;
?>
<script type="text/javascript">
    
</script>