<?php // if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){ ?>
	<!-- <div id='fond_valid'><p>You want to <a class="trigger_sign" href="#">sign in</a> for send a message</p></div> -->
<?php //} else {
	if(!isset($_SESSION['users_id']) or $_SESSION['users_id'] == ''){ $name_mail = ''; }
	else { $name_mail = $_SESSION['pseudo']; }
 ?>

<div id="contactus">
		<form method="post" action="?appli=home&action=mail_contact" id="formRecipe_mail">
			<p>You can contact us here</p>
			<label for="name" class="nom">Name</label>
				<input name="name_mail" type="text" id="name_mail" value="<?php echo $name_mail; ?>">
				<br>
			<label for="email" class="email">Mail</label>
				<input name="email_mail" type="text" id="email_mail">
				<br>
			<label for="comments" class="message">Your message</label>
				<textarea name="comments" cols="40" id="comments"rows="3" id="comments" style="width: 350px;"></textarea>
			<input type="submit" class="submit" value="Submit">
			<span id="message_error3" ></span>
		</form>
	</div>


<?php //} ?>