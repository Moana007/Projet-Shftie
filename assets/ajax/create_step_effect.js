
			/*$('.lien').on('click', function(){
    			$('#main').load('../../view/home/create/create_step'+$(this).attr('id')+'.php');
    			$('span#'+$(this).attr('id')).addClass('done');
    		});	*/	
    		$('.step').slideUp();
    		$('.step').first().slideDown();

    		$('.go_one').on('click', function(){
    			$('.step').slideUp();
    			$('.step1').slideDown();
    		});
    		$('.go_two').on('click', function(){
    			$('.step').slideUp();
    			$('.step2').slideDown();
    		});
    		$('.go_three').on('click', function(){
    			$('.step').slideUp();
    			$('.step3').slideDown();
    		});
    		$('.go_four').on('click', function(){
    			$('.step').slideUp();
    			$('.step4').slideDown();
    		});
    		$('.go_five').on('click', function(){
    			$('.step').slideUp();
    			$('.step5').slideDown();
    		});

  