<div id="create_recipe5" class="create_recipe_trigger">
      <div class="step step5">
      <div class="titre_recette"><span>•</span> Step 5</div>
        
      <div class="expl">Okay this our final goal, tag your recipe with those tags we propose you down there!</div>
      
       
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
        
        <div class="ligne_bt"><a href="#" class="bt gris go_four">Previous step</a><button type="submit" id="submit" class="bt vert">Upload!</button></div>
      
    
      
      <div class="etape">
        <span class="undone done">1</span>
        <span class="undone done">2</span>
        <span class="undone done">3</span>         
        <span class="undone done">4</span>
        <span class="undone done">5</span>
      </div>
  </div>
    </div>