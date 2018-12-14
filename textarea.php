<div class="form-group">
	<textarea
		name="<?php echo esc_attr( $name ); ?>"
		<?php echo MWF_Functions::generate_input_attribute( 'id', $id ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'class', 'form-control '.$class ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'cols', $cols ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'rows', $rows ); ?>
		<?php echo MWF_Functions::generate_input_attribute( 'placeholder', $placeholder ); ?>
	><?php echo esc_html( $value ); ?></textarea>
	<?php if ( $error ) { echo $error; } ?>
</div>
