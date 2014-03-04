<div id="catalogue">

      <?php 
        if($filter == 'rand'){
      ?>
          <div class="titre_1">Catalogue
            <a href="/home/catalogue/new">Newest</a>
            <a href="/home/catalogue/popular">Popular</a>
            <a href="/home/catalogue/rand" class="actif">All</a>
          </div>
      <?php 
        } else if($filter == 'popular'){?>
          <div class="titre_1">Catalogue
            <a href="/home/catalogue/new">Newest</a>
            <a href="/home/catalogue/popular" class="actif">Popular</a>
            <a href="/home/catalogue/rand" >All</a>
          </div>
      <?php } else if($filter  == 'new'){ ?>
          <div class="titre_1">Catalogue
            <a href="/home/catalogue/new" class="actif">Newest</a>
            <a href="/home/catalogue/popular">Popular</a>
            <a href="/home/catalogue/rand" >All</a>
          </div>
      <?php } else { ?>
     
           <div class="titre_1">Catalogue
            <a href="/home/catalogue/new">Newest</a>
            <a href="/home/catalogue/popular">Popular</a>
            <a href="/home/catalogue/rand" class="actif">All</a>
          </div>
      <?php } ?>

       
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
  <div style='clear:both;'></div>
    <script type="text/javascript">
         // $(document).ready(function(){
           // $('.lien').click(function(){
             // $('.tablerecipe').load('catalogue/'+$(this).attr('id')+'.php');
            ///});
          //});
    </script>