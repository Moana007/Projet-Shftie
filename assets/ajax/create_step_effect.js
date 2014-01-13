
			/*$('.lien').on('click', function(){
    			$('#main').load('../../view/home/create/create_step'+$(this).attr('id')+'.php');
    			$('span#'+$(this).attr('id')).addClass('done');
    		});	*/	
            $('.create_recipe_trigger').slideUp();
    		$('#create_recipe').first().slideDown();
    		

    		$('.go_one').on('click', function(){
    			$('.create_recipe_trigger').slideUp();
    			$('#create_recipe').slideDown();
    		});
    		$('.go_two').on('click', function(){
    			$('.create_recipe_trigger').slideUp();
    			$('#create_recipe2').slideDown();
    		});
    		$('.go_three').on('click', function(){
    			$('.create_recipe_trigger').slideUp();
    			$('#create_recipe3').slideDown();
    		});
    		$('.go_four').on('click', function(){
    			$('.create_recipe_trigger').slideUp();
    			$('#create_recipe4').slideDown();
    		});
    		$('.go_five').on('click', function(){
    			$('.create_recipe_trigger').slideUp();
    			$('#create_recipe5').slideDown();
    		});

  