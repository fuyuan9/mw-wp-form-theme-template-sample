<div class="form-group">
	<input type="password"
		name="<?php echo esc_attr( $name ); ?>"
		<?php echo MWF_Functions::generate_input_attribute( 'id', $id ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'class', 'form-control '.$class ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'size', $size ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'maxlength', $maxlength ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'value', $value ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'placeholder', $placeholder ); ?>
	/>
	<?php if ( $error ) { echo $error; } ?>
</div>
