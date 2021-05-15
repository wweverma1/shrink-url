<?php if (count($errors_Shrink) > 0) : ?>
  <div class="message error validation_errors" >
  	<?php foreach ($errors_Shrink as $error_Shrink) : ?>
  	  <p style="color: red; font-weight: bold;"><?php echo $error_Shrink ?></p>
  	<?php endforeach ?>
  </div>
<?php endif ?>