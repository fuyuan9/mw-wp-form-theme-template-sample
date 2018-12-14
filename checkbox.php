<div class="form-group">
<?php
if ( 'true' === $vertically ) {
	$vertically_class = 'vertical-item';
} else {
	$vertically_class = 'horizontal-item form-check-inline';
}
?>
<?php foreach ( $fields as $field_value => $field ) : ?>
	<div class="mwform-checkbox-field form-check <?php echo esc_attr( $vertically_class ); ?>">
		<input type="checkbox"
			name="<?php echo esc_attr( $field['name'] ); ?>"
			value="<?php echo esc_attr( $field_value ); ?>"
			<?php checked( in_array( $field_value, $value ), true, true ); ?>
			<?php echo MWF_Functions::generate_input_attribute( 'id', $field['id'] ); ?>
			<?php echo MWF_Functions::generate_input_attribute( 'class', 'form-check-input '.$field['class'] ); ?>
		/>
		<label <?php echo MWF_Functions::generate_input_attribute( 'for', $field['id'] ); ?> class="mwform-checkbox-field-text form-check-label"><?php echo esc_attr( $field['label'] ); ?></label>
		<?php
		if ( $field === end( $fields ) && $error ) {
			echo $error;
		}
		?>
	</div>
<?php endforeach; ?>
</div>
