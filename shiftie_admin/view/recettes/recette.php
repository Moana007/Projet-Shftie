<div id="right_content">

  <ul>
  	<li><a href="?appli=recettes&filter=tocheck">Recettes a regarder</a></li>
    <li><a href="?appli=recettes&filter=checked">Recettes validées</a></li>
    <li><a href="?appli=recettes&filter=day_recipe">Recette du jour</a></li>
  </ul>
  	

  <?php
   switch($filter) 
      {     
        case "tocheck": 
          require_once("tocheck.php");
          break;
        case "checked": 
          require_once("checked.php");
          break;
       case "show": 
          require_once("show_recette.php");
          break;
      case "day_recipe": 
          require_once("day_recipe.php");
          break;
        default:
          require_once("tocheck.php");
          break;
      } 
  ?>
</div>

