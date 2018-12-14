<div class="form-group">
	<input type="number"
		name="<?php echo esc_attr( $name ); ?>"
		<?php echo MWF_Functions::generate_input_attribute( 'id', $id ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'class', 'form-control '.$class ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'value', $value ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'min', $min ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'max', $max ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'step', $step ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'placeholder', $placeholder ); ?>
	/>
	<?php if ( $error ) { echo $error; } ?>
</div>
