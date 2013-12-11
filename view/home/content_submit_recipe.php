<div id="create_recipe">
  <form method="post" action="?appli=home&action=submit_recipe" id="formRecipe">
    <div class="step step1">
      <div class="titre"><span>•</span>Step 1</div>      
        <div class="expl">First you have to enter the name of your recipe, choose what type it is and some description.</div>
              <!-- TITRE RECETTE -->
            <div class="form_title">Title of the recipe:</div>
            <input class="titre_recette" name="recette_name" id="recette_name" type="text"></input>

            <!-- DESCRIPTION -->
            <div class="form_title">Description:</div>
            <textarea class="description" type="text" name="description" id="description"></textarea>
             <a href="#" onClick="_gaq.push(['_trackEvent','create_recipe','step2']);" class="go_two bt">Next step</a>
    
			 <div class="steps">
		        <span class="undone done">1</span>
		        <span class="undone">2</span>
		        <span class="undone">3</span>         
		        <span class="undone">4</span>
		        <span class="undone">5</span>
		      </div>
    
    </div>
    <div class="step step2">
      <div class="titre"><span>•</span>Step 2</div>
          <div class="expl"></br> Now you have to upload your recipe picture, and position it. Try to make it as beautiful as you can, who knows, this recipe might be on our homepage someday!</div>
            <div class="images">
              <!-- IMG WIDE -->
              <div id="previews" class="img_wide"></div>
              <!-- IMG NORMALE -->
              <div class="text_img">NB: When you upload your photo, make sure you have a minimum resolution of **** x ****. </br>
              You can zoom and postion it whatever you like.</div>
              <!-- BT UPLOAD -->
              <input type="file" name="fileUpload1" id="fileUpload1" class="fileUpload" />
             <!-- <div id="details"></div>-->
              <input type="hidden" id="photo" name="photo" value="">
  <div id="response"></div>
  <?php echo $uploadedUrl;?>
  			  <a href="#" onClick="_gaq.push(['_trackEvent','create_recipe','step3']);" class="go_three bt">Next Step</a>
              <a href="#" class="go_one bt">Previous Step</a>
              
            </div>
            
              <div class="steps">
		        <span class="go_one undone done">1</span>
		        <span class="undone done">2</span>
		        <span class="undone">3</span>         
		        <span class="undone">4</span>
		        <span class="undone">5</span>
		      </div>
      
    </div>
    <div class="step step3">
          <div class="titre"><span>•</span>Step 3</div>
            
          <div class="expl">Now you have to give me all the ingredients needed for that recipe, and try to tell me how difficult is your recipe</div>
            
             <!-- INGREDIENTS -->
               <div class="form_title">Ingredients</div>
          <textarea name="ingredient" id="ingredient" class="ingredient" type="text"></textarea>
          <!-- TEMPS -->
          <div class="row_time">
            <div class="form_title">Preparation time:
            <select id="time_prepa" class="time" name="time_prepa">           
	            <option>-</option><option>5</option><option>10</option><option>15</option><option>5</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option>
	            <option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option>
	            <option>85</option><option>90</option><option>100</option><option>120</option><option>150</option><option>180</option>                
            </select> minutes.</div>
          </div>
          <div class="row_time">
            <div class="form_title">Cooking time:
            <select name="time_cuisson" class="time">
            	<option>-</option><option>0</option><option>5</option><option>10</option><option>15</option><option>5</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option>
	            <option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option>
	            <option>85</option><option>90</option><option>100</option><option>120</option><option>150</option><option>180</option>
	            
            </select>minutes.</div>
          </div>
          <div class="row_time">
            <div class="form_title">Rest time:
            <select name="time_repos" class="time">
	            <option>-</option><option>0</option><option>5</option><option>10</option><option>15</option><option>5</option><option>20</option><option>25</option><option>30</option><option>35</option><option>40</option>
	            <option>45</option><option>50</option><option>55</option><option>60</option><option>65</option><option>70</option><option>75</option><option>80</option>
	            <option>85</option><option>90</option><option>100</option><option>120</option><option>150</option><option>180</option><option>+180</option>

            </select>minutes.</div>
          </div>
              <!-- DIIFCULTE -->
              <div class="form_title">How difficult is it to cook?</div>
              <select class="difficulty" id="level" name="level" type="text"><option>Easy</option><option>Medium</option><option>Hard</option></select>
              <a href="#" onClick="_gaq.push(['_trackEvent','create_recipe','step4']);" class="go_four bt">Next Step</a>
              <a href="#" class="go_two bt">Previous Step</a> 
              
              <div class="steps">
		        <span class="go_one undone done">1</span>
		        <span class="go_two undone done">2</span>
		        <span class="undone done">3</span>         
		        <span class="undone">4</span>
		        <span class="undone">5</span>
		      </div>                    
           </div>
           
    <div class="step step4">
    <div class="titre"><span>•</span>Step 4</div>
        
      <div class="expl">It's time to tell me how you do this nice recipe, tell us all about the preparation</div>
      
     
          <div class="form_title">Preparation</div>
          <textarea class="preparation" id="preparation" name="preparation" type="text"></textarea>
        <a href="#" onClick="_gaq.push(['_trackEvent','create_recipe','step5']);" class="go_five bt">Next Step</a>
        <a href="#" class="go_three bt">Previous Step</a>
        <div class="steps">
	        <span class="go_one undone done">1</span>
	        <span class="go_two undone done">2</span>
	        <span class="go_three undone done">3</span>         
	        <span class="undone done">4</span>
	        <span class="undone">5</span>
		</div>
    </div>
    
    <div class="step step5">
      <div class="titre"><span>•</span>Step 5</div>    
        <div class="expl">Okay this our final goal, tag your recipe with those tags we propose you down there!</div>
      
        <div id="tag">
        	
        </div>
          <div class="bloc_tag">
          
          
          <div class="row_tag">
            <div class="tag_title">Viande</div>
<?php foreach($data1 as $datas): ?>            
            <div class="case_tag"><input id="option1" type="checkbox" name="option[]" value="<?php echo $datas['tags_id']; ?>"><?php echo $datas['tags_name'];  ?></div>

<?php endforeach; ?>            
          </div>
       
       
       
          <div class="row_tag">
            <div class="tag_title">Produit de la mer</div>
<?php foreach($data2 as $datass): ?>            
            <div class="case_tag"><input id="option2" type="checkbox" name="option[]" value="<?php echo $datass['tags_id']; ?>"><?php echo $datass['tags_name']; ?></div>
 <?php endforeach; ?>            
          </div>
       
       
       
          <div class="row_tag">
            <div class="tag_title">Condiment & Accompagnement</div>
<?php foreach($data3 as $datab): ?>            
            <div class="case_tag"><input id="option3" type="checkbox" name="option[]" value="<?php echo $datab['tags_id']; ?>"><?php echo $datab['tags_name']; ?></div>
<?php endforeach; ?>            
          </div>
        
        
        
          <div class="row_tag">
            <div class="tag_title">Sucré</div>
<?php foreach($data4 as $datam): ?>            
            <div class="case_tag"><input id="option4" type="checkbox" name="option[]" value="<?php echo $datam['tags_id']; ?>"><?php echo $datam['tags_name']; ?></div>
<?php endforeach; ?>
          </div>
      
      
        </div>
        <div class="bloc_tag2">
        
        
          <div class="row_tag">
            <div class="tag_title">Salé</div>
<?php foreach($data5 as $dataj): ?>            
            <div class="case_tag"><input id="option5" type="checkbox" name="option[]" value="<?php echo $dataj['tags_id']; ?>"><?php echo $dataj['tags_name']; ?></div>
<?php endforeach; ?>
          </div>
        
            
          <div class="row_tag">
            <div class="tag_title">Cuisson</div>
                        
<?php foreach($data6 as $datag): ?>
            <div class="case_tag"><input id="option6" type="checkbox" name="option[]" value="<?php echo $datag['tags_id']; ?>"><?php echo $datag['tags_name']; ?></div>
<?php endforeach; ?> 

          </div>
          
          
          <div class="row_tag">
            <div class="tag_title">Spécifité</div>
<?php foreach($data7 as $datak): ?>            
            <div class="case_tag"><input id="option7" type="checkbox" name="option[]" value="<?php echo $datak['tags_id']; ?>"><?php echo $datak['tags_name']; ?></div>
<?php endforeach; ?>            
          </div>
          
          
        </div>
        
        <a href="#" class="go_four bt">Previous Step</a>
        <button type="submit" id="submit" onClick="_gaq.push(['_trackEvent','create_recipe','validation']);">Envoyer la recette</button>
        
        <div class="steps">
	        <span class="go_one undone done">1</span>
	        <span class="go_two undone done">2</span>
	        <span class="go_three undone done">3</span>         
	        <span class="go_four undone done">4</span>
	        <span class="undone done">5</span>
		</div>
 
    </div>
     </form>
    </div>

