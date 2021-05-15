<?php if (count($errors_Deshrink) > 0) : ?>
  <div class="message error validation_errors" >
  	<?php foreach ($errors_Deshrink as $error_Deshrink) : ?>
  	  <p style="color: red; font-weight: bold;"><?php echo $error_Deshrink ?></p>
  	<?php endforeach ?>
  </div>
<?php endif ?>