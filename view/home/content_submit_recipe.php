<form method="post" action="?appli=home&action=submit_recipe" id="formRecipe">
<div id="create_recipe" class="create_recipe_trigger">
      <div class="step step1">
        <div class="titre_recette"><span>•</span> Step 1</div>
        
        <div class="expl">First you have to enter the name of your recipe, choose what type it is and some description.</div>
        <form>
          <!-- TITRE RECETTE -->
          <div class="form_title">Title of the recipe:</div>
          <input class="case_remplir" name="recette_name" id="recette_name" type="text"/>
          <!-- DESCRIPTION -->
          <div class="form_title">Description:</div>
         <textarea class="case_remplir" type="text" name="description" id="description"></textarea>

         <div class="row_tag">
            <div class="tag_title">Tags</div>
            <div class="case_tag"><input type="radio" name="group1" value="" id="sucre">Sucré</div>
            <div class="case_tag"><input type="radio" name="group1" value="" id="sale">Salé</div>
            <div class="case_tag"><input type="radio" name="group1" value="" id="vege">Végétarien</div>
          </div>
        
        <div class="ligne_bt"><a href="#" class="bt vert go_two">Next step</a></div>
          <div class="etape">
            <span class="undone done">1</span>
            <span class="undone">2</span>
            <span class="undone">3</span>         
            <span class="undone">4</span>
            <span class="undone">5</span>
          </div>
    </div>
    </div>
    <div id="create_recipe2" class="create_recipe_trigger">
      <div class="step step2">
        <div class="titre_recette"><span>•</span> Step 2</div>
      
        <div class="expl"><br/> Now you have to upload your recipe picture, and position it. Try to make it as beautiful as you can, who knows, this recipe might be on our homepage someday!</div>
          <div id="details"></div>
          <!-- BT UPLOAD -->
            <input type="file" name="fileUpload1" id="fileUpload1" class="fileUpload bt vert" />
            <input type="hidden" id="photo" name="photo" value="">
          <div class="images">
            <!-- IMG NORMALE -->


        <div id="cover-container">

          <div id="cover-image" style="background-image; background-size: cover; background-position:center"></div>
          <div class="previews"><img src="assets/img/uploads/Thief-Clocktower-topview.jpg" alt=""></div>

        </div>

            <div class="text_img">NB: When you upload your photo, make sure you have a minimum resolution of **** x ****. <br/>
            You can zoom and postion it whatever you like.</div>

          
        </div>
          <div class="row_tag" id="ifsucre">
            <div class="tag_title">Tags if Sucré</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Chocolat</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Gateau</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Patisserie</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Fruit</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Glace</div>
          </div>

           <div class="row_tag" id="ifsale">
            <div class="tag_title">Tags if Salé</div>
            <div class="case_tag"><input type="radio" name="group2" value="" id="viande">Viande</div>
            <div class="case_tag"><input type="radio" name="group2" value="" id="mer">Produit de la mer</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Soupe</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Pate</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Pizza</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Salade</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Sandwich</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Fromage</div>
          </div>

          <div class="row_tag" id="ifvege">
            <div class="tag_title">Tags if Végétarien</div>
            <div class="case_tag"><input type="radio" name="group3" value="" id="mer2">Produit de la mer</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Soupe</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Pate</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Pizza</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Salade</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Sandwich</div>
            <div class="case_tag"><input type="checkbox" name="option1" value="">Fromage</div>
          </div>
        <div class="ligne_bt"><a href="#" class="bt gris go_one">Previous step</a><a href="#" class="bt vert go_three">Next step</a></div>
      <div class="etape">
        <span class="undone done">1</span>
        <span class="undone done">2</span>
        <span class="undone">3</span>         
        <span class="undone">4</span>
        <span class="undone">5</span>
      </div>
      </div>
    </div>
   <div id="create_recipe3" class="create_recipe_trigger">
      <div class="step step3">
      <div class="titre_recette"><span>•</span> Step 3</div>
        
      <div class="expl">Now you have to give me all the ingredients needed for that recipe, and try to tell me how difficult is your recipe</div>
      
        <div class="center">
        
         <!-- INGREDIENTS -->
          <div class="form_title">Ingredients</div>
          <textarea class="ingredient" name="ingredient" id="ingredient" type="text"></textarea>
          <!-- TEMPS -->
           <div class="row_time">
            <div class="form_title">Preparation time:
            <select id="time_prepa" class="time" name="time_prepa">           
              <option>-</option><option>0</option><option>5</option><option>10</option><option>15</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option>
              <option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option>
              <option>85</option><option>90</option><option>100</option><option>120</option><option>150</option><option>180</option>                
            </select> minutes.</div>
          </div>
          <div class="row_time">
            <div class="form_title">Cooking time:
            <select name="time_cuisson" class="time">
              <option>-</option><option>0</option><option>5</option><option>10</option><option>15</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option>
              <option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option>
              <option>85</option><option>90</option><option>100</option><option>120</option><option>150</option><option>180</option>
              
            </select>minutes.</div>
          </div>
          <div class="row_time">
            <div class="form_title">Rest time:
            <select name="time_repos" class="time">
              <option>-</option><option>0</option><option>5</option><option>10</option><option>15</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option>
              <option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option>
              <option>85</option><option>90</option><option>100</option><option>120</option><option>150</option><option>180</option><option>+180</option>
            </select>minutes.</div>
          </div>
          <!-- DIIFCULTE -->
          <div class="form_title">How difficult is it to cook?</div>
           <select class="difficulty" id="level" name="level" type="text"><option>Easy</option><option>Medium</option><option>Hard</option></select>
      </div>
        
     <div class="row_tag" id="ifviande">
        <div class="tag_title">Tags if Viande</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Canard</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Poulet</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Boeuf</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Hallal</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Casher</div>
      </div>
      <div class="row_tag" id="ifmer">
        <div class="tag_title">Tags if Prod.De la mer</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Poisson</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Crustacé</div>
      </div>
      <div class="row_tag" id="ifmer2">
        <div class="tag_title">Tags if Prod.De la mer</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Poisson</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Crustacé</div>
      </div>

      <div class="ligne_bt"><a href="#" class="bt gris go_two">Previous step</a><a href="#" class="bt vert go_four">Next step</a></div>
  
      
      <div class="etape">
        <span class="undone done">1</span>
        <span class="undone done">2</span>
        <span class="undone done">3</span>         
        <span class="undone">4</span>
        <span class="undone">5</span>
      </div>
    </div>
  </div>
    </div>
    <div id="create_recipe4" class="create_recipe_trigger">
      <div class="step step4">
      <div class="titre_recette"><span>•</span> Step 4</div>
        
      <div class="expl">It's time to tell me how you do this nice recipe, tell us all about the preparation</div>
      
        <div class="center">
          <div class="form_title">Preparation</div>
          <textarea class="preparation" id="preparation" name="preparation" type="text"></textarea>

      <div class="row_tag" id="tag4">
        <div class="tag_title">Tags 4</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Grillé</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Frit</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Barbecue</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Vapeur</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Légume</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Pain</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Epice</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Herbe</div>
        <div class="case_tag"><input type="checkbox" name="option1" value="">Sauce</div>
      </div>

        
        <div class="ligne_bt"><a href="#" class="bt gris go_three">Previous step</a><button type="submit" id="submit" class="bt vert">Upload!</button></div>
      </div>
    
      
      <div class="etape">
        <span class="undone done">1</span>
        <span class="undone done">2</span>
        <span class="undone done">3</span>         
        <span class="undone done">4</span>
        <span class="undone">5</span>
      </div>
    </div>
</div>
     
   
    </div>
     </form>
   
