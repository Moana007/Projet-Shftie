<div id="right_content">

  <ul>
  	<li><a href="?appli=recettes&filter=tocheck">Recettes a regarder</a></li>
      <li><a href="?appli=recettes&filter=checked">Recettes validées</a></li>
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
        default:
          require_once("tocheck.php");
          break;
      } 
  ?>
</div>

