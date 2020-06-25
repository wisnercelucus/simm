<?php $title ="Connexion"; ?>
<?php include('includes/constants.php') ?>
<?php require('partials/header_general.php') ?>
<?php require('partials/banner_general.php') ?>



<div class="wrapper">
    <div class="display-errors">
			<?php
				require('partials/errors.php');
   
			?>
     </div>
	<div class="form-div">
		<form class="register-form" data-parsley-validate method="POST">
		<label for="identifiant">Identifiant:</label><br />
		<input type="text" placeholder="Email ou Pseudo" class="reg-form" id="identifiant" required="required"><br/><br/>
		<label for="password">Mot de passe:</label><br />
		<input type="password" class="reg-form" id="password" required="required"><br/><br/>

		<label for="active">
        <input type="checkbox" name="active" class="" />
         Garder ma session active
        </label><br /><br />

        <input type="submit" value ="Valider" class="btn-register" /><br/><br />

		<p>Pas encore membre? <a href="register.php">Inscrivez-vous</a></p>
		</form>
    </div>
</div>

<?php require('partials/footer.php') ?>	