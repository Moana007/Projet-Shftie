<form method="post" action="/home/submitrecipe" id="formRecipe">
<div id="create_recipe" class="create_recipe_trigger">

        <!-- - - - - - - - - - - - - -  - - - - - - - - - - -->
        <!-- - - - - - - - - -  STEP 1  - - - - - - - - - - -->
        <!-- - - - - - - - - - - - - -  - - - - - - - - - - -->
      <div class="step step1">
        <div class="titre_recette"><span>•</span> Step 1</div>
        
        <div class="expl">First you have to enter the name of your recipe, choose what type it is and some description.</div>
        <form>
          <!-- TITRE RECETTE -->
          <div class="form_title">Title of the recipe:</div>
          <input class="case_remplir" name="recette_name" id="recette_name" type="text" maxlength="55"/>
          <!-- DESCRIPTION -->
          <div class="form_title">Description:</div>
         <textarea class="case_remplir" type="text" name="description" id="description" maxlength="120" /></textarea>

         <div class="row_tag">
            <div class="tag_title">What kind of recipe this is?</div>
            <div class="case_tag"><input type="radio" name="group1" value="su" id="sucre"> Sweet</div>
            <div class="case_tag"><input type="radio" name="group1" value="sa" id="sale"> Salty</div>
            <div class="case_tag"><input type="radio" name="group1" value="ve" id="vege"> Vegan</div>
          </div>
        
        <div class="ligne_bt"><a href="#" onClick="_gaq.push(['_trackEvent','create_recipe','step2']);" class="bt vert go_two">Next step</a></div>
          <div class="etape">
            <span class="undone done">1</span>
            <span class="undone">2</span>
            <span class="undone">3</span>         
            <span class="undone">4</span>
  
          </div>
    </div>
    </div>

        <!-- - - - - - - - - - - - - -  - - - - - - - - - - -->
        <!-- - - - - - - - - -  STEP 2  - - - - - - - - - - -->
        <!-- - - - - - - - - - - - - -  - - - - - - - - - - -->
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


        <div class="cover-container">

          <div class="cover-image" style="background-image; background-size: cover; background-position:center"></div>
          <img src="assets/img/preview_upload.jpg" class="previews" alt="">
          <input type='hidden' name="img_top" id="img_top" value=""> <!-- Recupere la valeur top -->
        </div>

            <div class="text_img">NB: When you upload your photo, make sure you have a minimum width of 1024px. <br/>
            You can postion it whatever you like.</div>

          
        </div>
          <div class="row_tag" id="ifsucre">
            <div class="tag_title">Oh, Sweet, i love sweet food, tell me more!</div>
            <?php foreach($data4 as $datam): ?>
            <div class="case_tag"><input type="checkbox" name="option[]" value="<?php echo $datam['tags_id']; ?>"> <?php echo $datam['tags_name']; ?></div>
            <?php endforeach; ?>
          </div>

           <div class="row_tag" id="ifsale">
            <div class="tag_title">Yay, Salty, i like that, i'm getting hungry, tell me more!</div>
            <div class="case_tag"><input type="radio" name="group2" value="" id="viande"> Meat</div>
            <div class="case_tag"><input type="radio" name="group2" value="" id="mer"> Shellfish</div>
            <?php foreach($data5 as $dataj): ?>
            <div class="case_tag"><input type="checkbox" name="option[]" value="<?php echo $dataj['tags_id']; ?>"> <?php echo $dataj['tags_name']; ?></div>
            <?php endforeach; ?>
          </div>

          <div class="row_tag" id="ifvege">
            <div class="tag_title">Oh, Vegan food? I'm curious, what's inside?</div>
            <div class="case_tag"><input type="radio" name="group3" value="" id="mer2"> Shellfish</div>
            <?php foreach($data5 as $dataj): ?>
            <div class="case_tag"><input type="checkbox" name="option[]" value="<?php echo $dataj['tags_id']; ?>"> <?php echo $dataj['tags_name']; ?></div>
            <?php endforeach; ?>
          </div>
          
        <div class="ligne_bt"><a href="#" class="bt gris go_one">Previous step</a><a href="#" onClick="_gaq.push(['_trackEvent','create_recipe','step3']);" class="bt vert go_three">Next step</a></div>
      <div class="etape">
        <span class="undone done go_one">1</span>
        <span class="undone done">2</span>
        <span class="undone">3</span>         
        <span class="undone">4</span>
      </div>
      </div>
    </div>



        <!-- - - - - - - - - - - - - -  - - - - - - - - - - -->
        <!-- - - - - - - - - -  STEP 3  - - - - - - - - - - -->
        <!-- - - - - - - - - - - - - -  - - - - - - - - - - -->  
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
            <select name="time_cuisson"  id="time_cuisson" class="time">
              <option>-</option><option>0</option><option>5</option><option>10</option><option>15</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option>
              <option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option>
              <option>85</option><option>90</option><option>100</option><option>120</option><option>150</option><option>180</option>
              
            </select>minutes.</div>
          </div>
          <div class="row_time">
            <div class="form_title">Rest time:
            <select name="time_repos" id="time_repos" class="time">
              <option>-</option><option>0</option><option>5</option><option>10</option><option>15</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option>
              <option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option>
              <option>85</option><option>90</option><option>100</option><option>120</option><option>150</option><option>180</option><option>+180</option>
            </select>minutes.</div>
          </div>
          <!-- DIIFCULTE -->
          <div class="form_title">How difficult is it to cook?</div>
           <select class="difficulty" id="level" name="level" type="text"><option>-</option><option>Easy</option><option>Medium</option><option>Hard</option></select>
      </div>
        
     <div class="row_tag" id="ifviande">
        <div class="tag_title">Who doesn't love a good meat? Whick kind of meat you'll propose?</div>
        <?php foreach($data1 as $datas): ?>
        <div class="case_tag"><input type="checkbox" name="option[]" value="<?php $datas['tags_id']; ?>"> <?php echo $datas['tags_name']; ?></div>
        <?php endforeach; ?>
      </div>
      <div class="row_tag" id="ifmer">
        <div class="tag_title">Shellfish? Never tried that, finish that recipe so i can see it!</div>
        <?php foreach($data2 as $datass): ?>
        <div class="case_tag"><input type="checkbox" name="option[]" value="<?php echo $datass['tags_id']; ?>"> <?php echo $datass['tags_name']; ?></div>
        <?php endforeach; ?>
      </div>
      <div class="row_tag" id="ifmer2">
        <div class="tag_title">Shellfish? Never tried that, finish that recipe so i can see it!</div>
        <?php foreach($data2 as $datass): ?>
        <div class="case_tag"><input type="checkbox" name="option[]" value="<?php echo $datass['tags_id']; ?>"> <?php echo $datass['tags_name']; ?></div>
        <?php endforeach; ?>
      </div>

      <div class="ligne_bt"><a href="#" class="bt gris go_two">Previous step</a><a href="#" onClick="_gaq.push(['_trackEvent','create_recipe','step4']);" class="bt vert go_four">Next step</a></div>
  
      
      <div class="etape">
        <span class="undone done go_one">1</span>
        <span class="undone done go_two">2</span>
        <span class="undone done go_three">3</span>         
        <span class="undone">4</span>
      </div>
    </div>
  </div>
    </div>



        <!-- - - - - - - - - - - - - -  - - - - - - - - - - -->
        <!-- - - - - - - - - -  STEP 4  - - - - - - - - - - -->
        <!-- - - - - - - - - - - - - -  - - - - - - - - - - -->
    <div id="create_recipe4" class="create_recipe_trigger">
      <div class="step step4">
      <div class="titre_recette"><span>•</span> Step 4</div>
        
      <div class="expl">It's time to tell me how you do this nice recipe, tell us all about the preparation</div>
      
        <div class="center">
          <div class="form_title">Preparation</div>
          <textarea class="preparation" id="preparation" name="preparation" type="text"></textarea>

      <div class="row_tag" id="tag4">
        <div class="tag_title">It's time to finish, do you want to add something more?</div>
        <?php foreach($data7 as $datak): ?>
        <div class="case_tag"><input type="checkbox" name="option[]" value="<?php echo $datak['tags_id']; ?>"> <?php echo $datak['tags_name']; ?></div>
        <?php endforeach; ?> 
      </div>

        
        <div class="ligne_bt"><a href="#" class="bt gris go_three">Previous step</a><button type="submit" onClick="_gaq.push(['_trackEvent','create_recipe','step5']);" id="submit" class="submitrecipe bt vert">Upload!</button></div>
      </div>
    
      
      <div class="etape">
        <span class="undone done go_one">1</span>
        <span class="undone done go_two">2</span>
        <span class="undone done go_three">3</span>         
        <span class="undone done">4</span>
      </div>
    </div>
</div>
     
   
    </div>
     </form>
   
