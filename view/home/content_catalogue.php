<div id="myrecipe">
      <div class="underscore_title">Catalogue</div>
      <?php 
        if($_GET['filter'] == 'rand'){
      ?>
           <a href="?appli=home&action=catalogue&filter=rand" id="rand" class="lien sort active">Random</a>
           <a href="?appli=home&action=catalogue&filter=popular" class="lien sort">Sort by popularity</a>
           <a href="?appli=home&action=catalogue&filter=new" id="new" class="lien sort">Sort by newest</a>
      <?php 
        } else if($_GET['filter'] == 'popular'){?>
         <a href="?appli=home&action=catalogue&filter=rand" id="rand" class="lien sort ">Random</a>
         <a href="?appli=home&action=catalogue&filter=popular" class="lien sort active">Sort by popularity</a>
         <a href="?appli=home&action=catalogue&filter=new" id="new" class="lien sort">Sort by newest</a>
      <?php } else if($_GET['filter'] == 'new'){ ?>
      <a href="?appli=home&action=catalogue&filter=rand" id="rand" class="lien sort ">Random</a>
      <a href="?appli=home&action=catalogue&filter=popular" class="lien sort">Sort by popularity</a>
      <a href="?appli=home&action=catalogue&filter=new" id="new" class="lien sort active">Sort by newest</a>
      <?php } else { ?>
     
           <a href="?appli=home&action=catalogue&filter=rand" id="rand" class="lien sort active">Random</a>
           <a href="?appli=home&action=catalogue&filter=popular" class="lien sort">Sort by popularity</a>
           <a href="?appli=home&action=catalogue&filter=new" id="new" class="lien sort">Sort by newest</a>
      <?php } ?>
      <div class="search"><input type="text" placeholder="Search into My Recipe"></input><a class="icon icon-search" href="#"></a></div>
      <div class="tablerecipe">
       
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