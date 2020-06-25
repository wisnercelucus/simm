<?php $title ="Requetes sur la base"; ?>
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
		<form class="register-form" method="POST">
			<table>	
				<tr>
					<th>Produit</th>
					<th>date debut</th>
					<th>date fin</th>
				</tr>
				<tr>
					<td>
						<input type="text" placeholder="Lait bongu" class="reg-form" id="last_name" name="product" required="required">
					</td>
					<td>
						<input type="date"  class="reg-form" id="date-started" name="started_date" required="required">
					</td>
					<td>
						<input type="date"  class="reg-form" id="date-ended" name="ended_date" required="required">
					</td>
				</tr>
				
	            
			</table>
		</form>
	</div>

</div>

<?php require('partials/footer.php') ?>	