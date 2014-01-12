<div id="catalogue">

      <?php 
        if($_GET['filter'] == 'rand'){
      ?>
          <div class="titre_1">Catalogue
            <a href="?appli=home&action=catalogue&filter=new">Newest</a>
            <a href="?appli=home&action=catalogue&filter=popular">Popular</a>
            <a href="?appli=home&action=catalogue&filter=rand" class="actif">All</a>
          </div>
      <?php 
        } else if($_GET['filter'] == 'popular'){?>
          <div class="titre_1">Catalogue
            <a href="?appli=home&action=catalogue&filter=new">Newest</a>
            <a href="?appli=home&action=catalogue&filter=popular" class="actif">Popular</a>
            <a href="?appli=home&action=catalogue&filter=rand" >All</a>
          </div>
      <?php } else if($_GET['filter'] == 'new'){ ?>
          <div class="titre_1">Catalogue
            <a href="?appli=home&action=catalogue&filter=new" class="actif">Newest</a>
            <a href="?appli=home&action=catalogue&filter=popular">Popular</a>
            <a href="?appli=home&action=catalogue&filter=rand" >All</a>
          </div>
      <?php } else { ?>
     
           <div class="titre_1">Catalogue
            <a href="?appli=home&action=catalogue&filter=new">Newest</a>
            <a href="?appli=home&action=catalogue&filter=popular">Popular</a>
            <a href="?appli=home&action=catalogue&filter=rand" class="actif">All</a>
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
    <script type="text/javascript">
         // $(document).ready(function(){
           // $('.lien').click(function(){
             // $('.tablerecipe').load('catalogue/'+$(this).attr('id')+'.php');
            ///});
          //});
    </script>