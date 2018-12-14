<div class="form-group">
	<input type="range"
		name="<?php echo esc_attr( $name ); ?>"
		<?php echo MWF_Functions::generate_input_attribute( 'id', $id ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'class', 'form-control-range '.$class ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'value', $value ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'min', $min ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'max', $max ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'step', $step ); ?>
	/>
	<?php if ( $error ) { echo $error; } ?>
</div>