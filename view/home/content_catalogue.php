<div id="myrecipe">
      <div class="underscore_title">Catalogue</div>
      <a href="?appli=home&action=catalogue&filter=rand" id="rand" class="lien sort active">Random</a>
      <a href="?appli=home&action=catalogue&filter=popular" class="lien sort">Sort by popularity</a>
      <a href="?appli=home&action=catalogue&filter=new" id="new" class="lien sort">Sort by newest</a>
      <div class="search"><input type="text" placeholder="Search into My Recipe"></input><a class="icon icon-search" href="#"></a></div>
      <div class="tablerecipe">
        <!--<div class="bloc_recipe1 bloc_validate">
          <a href="#"><img src="img/img_recipe.png">
            <div class="info1">
              <a href="#">Salmon Bagel</a>
            </div>
          </a>
        </div

        ><div class="bloc_recipe1 bloc_validate">
          <a href="#"><img src="img/img_recipe.png">
            <div class="info1">
              <a href="#">Salmon Bagel</a>
            </div>
          </a>
        </div

        ><div class="bloc_recipe2 bloc_validate">
        <a href="#"><img src="img/img_recipe2.png">
            <div class="info2">
              <a href="#">Brushcetta del amor</a>
            </div>
          </a>

        </div

        ><div class="bloc_recipe3 bloc_moderate">
        <a href="#"><img src="img/img_recipe3.png">
            <div class="info3">
              <a href="#">Club sandwich</a>
            </div>
          </a>

        </div

         ><div class="bloc_recipe4 bloc_validate">
        <a href="#"><img src="img/img_recipe4.png">
            <div class="info4">
              <a href="#">Pasta salad</a>
            </div>
          </a>

        </div

        ><div class="bloc_recipe5 bloc_moderate">
          <a href="#"><img src="img/img_recipe5.png">
            <div class="info5">
              <a href="#">Tomato gnocchis</a>
            </div>
          </a>
        </div

        ><div class="bloc_recipe6 bloc_validate">
        <a href="#"><img src="img/img_recipe6.png">
            <div class="info6">
              <a href="#">Olive and tomato salad</a>
            </div>
          </a>

        </div

        ><div class="bloc_recipe7 bloc_moderate">
        <a href="#"><img src="img/img_recipe7.png">
            <div class="info7">
              <a href="#">Croissant dégeulasse</a>
            </div>
          </a>

        </div>
        <div class="pagination">
          <a class="bloc_pagination" href="#"><span class="icon icon-left"></span></a>
          <a class="bloc_chiffre actif" href="#">1</a>
          <a class="bloc_chiffre" href="#">2</a>
          <a class="bloc_chiffre" href="#">3</a>
          <a class="bloc_pagination" href="#"><span class="icon icon-right"></span></a>
        </div>

    -->
       <?php  
  
          switch($filter) 
          {     
            case "rand": 
              require_once("view/home/catalogue/rand.php");
              break;
            case "new": 
              require_once("view/home/catalogue/new.php");
              break;
            case "popular": 
              require_once("view/home/catalogue/popular.php");
              break;
            default:
              require_once("view/home/catalogue/rand.php");
              break;
          } 
        ?>

      </div>
    </div>
    <script type="text/javascript">
         // $(document).ready(function(){
           // $('.lien').click(function(){
             // $('.tablerecipe').load('catalogue/'+$(this).attr('id')+'.php');
            ///});
          //});
    </script>