

<div class="row">	
<!-- Registrasi Script -->
<div class="col-md-5">
<h1>Registration Form</h1>



<?php $attributes = array('class'=>'form-horizontal'); ?>


<?php echo form_open('users/register',$attributes); ?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>


<div class="form-group">
	
		<?php echo form_label('Username'); ?>

			<?php 

				$data = array(
					'class' => 'form-control',
					'name' => 'username',
					'placeholder' => ' username'

				);


			?>
		<?php echo  form_input($data); ?>
	
</div>
<div class="form-group">
	
		<?php echo form_label('Password'); ?>

		<?php 

			$data = array(
				'class' => 'form-control',
				'name' => 'password',
				
				'placeholder' => ' Password'
			);

		?>

		<?php echo form_password($data); ?>

</div>


<div class="form-group">
	
	<?php 

		$data  = array(
			'class' => 'btn btn-md u-btn-outline-orange g-mr-10 g-mb-15',
			'name' => 'submit',
			'value' => 'Registrasi'

		);



	?>
	
	<?php echo form_submit($data); ?>
	
</div>


<?php echo form_close(); ?>
</div>
<!-- End Registrasi Script -->

</div>