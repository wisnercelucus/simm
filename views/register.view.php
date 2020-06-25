<?php $title ="S'inscrire"; ?>
<?php include('includes/constants.php') ?>
<?php require('partials/header_general.php') ?>
<?php require('partials/banner_general.php') ?>



<div class="wrapper">
<div class="form-div">
        <div class="display-errors">
			<?php
				require('partials/errors.php');
			?>
        </div>
		<form class="register-form" data-parsley-validate method="POST">
			
			<label for="last_name">Nom:</label><br/>
			<input type="text" placeholder="Jean" class="reg-form" id="last_name" name="last_name" required="required"><br/><br/>
			<label for="first_name">Prenom:</label><br/>
			<input type="text" placeholder="Dupont" class="reg-form" id="first_name" name="first_name" required="required"><br/><br/>
			<label for="pseudo">Pseudonyme:</label><br/>
			<input type="text" placeholder="JeanDu3" class="reg-form" id="pseudo" name="pseudo" required="required"><br/><br/>
			<label for="email">Email:</label><br/>
			<input type="email" placeholder="eleveouprof@example.com" data-parsley-trigger="keypress" class="reg-form" id="email" name="email" required="required"><br/><br/>
			<label for="password">Mot de passe:</label><br/>
			<input type="password" class="reg-form" id="password" name="password" required="required"><br/><br/>
			<label for="confirm_password">Retapez le Mot de passe:</label><br/>
			<input type="password" class="reg-form" id="confirm_password" name="confirm_password" required="required" data-parsley-equalto="#password"><br/><br/>
           
            
            <input type="submit" value ="Valider" class="btn-register" name="register"/><br/><br/>
			
			<p>Deja membre? <a href="login.php">Connectez-vous</a></p>
		</form>
	</div>

</div>

<?php require('partials/footer.php') ?>	