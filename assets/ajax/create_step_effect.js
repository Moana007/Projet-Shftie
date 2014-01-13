
			/*$('.lien').on('click', function(){
    			$('#main').load('../../view/home/create/create_step'+$(this).attr('id')+'.php');
    			$('span#'+$(this).attr('id')).addClass('done');
    		});	*/	
            $('.create_recipe').slideUp();
    		$('#create_recipe').first().slideDown();
    		

    		$('.go_one').on('click', function(){
    			$('.create_recipe').slideUp();
    			$('.step1').slideDown();
    		});
    		$('.go_two').on('click', function(){
    			$('.create_recipe').slideUp();
    			$('#create_recipe2').slideDown();
    		});
    		$('.go_three').on('click', function(){
    			$('.create_recipe').slideUp();
    			$('.step3').slideDown();
    		});
    		$('.go_four').on('click', function(){
    			$('.create_recipe').slideUp();
    			$('.step4').slideDown();
    		});
    		$('.go_five').on('click', function(){
    			$('.create_recipe').slideUp();
    			$('.step5').slideDown();
    		});

  