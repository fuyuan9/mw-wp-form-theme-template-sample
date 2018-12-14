<div class="form-group">
    <label>ファイル</label>
	<div class="input-group">
        <div class="custom-file">
			<input type="file"
				name="<?php echo esc_attr( $name ); ?>"
				<?php echo MWF_Functions::generate_input_attribute( 'id', $id ); ?>
				<?php echo MWF_Functions::generate_input_attribute( 'class', 'custom-file-input '.$class ); ?>
			/>
			<label class="custom-file-label" 
				<?php echo MWF_Functions::generate_input_attribute( 'for', $id ); ?>
			>ファイル選択...</label>
        </div>
        <div class="input-group-append">
            <button type="button" class="mwform-file-delete btn btn-outline-secondary reset" data-mwform-file-delete="<?php echo esc_attr( $name ); ?>">取消</button>
        </div>
	</div>
	<?php if ( $error ) { echo $error; } ?>
	<script type="text/javascript">
	jQuery(function($) {
		$("input[name='<?php echo esc_js( $name ); ?>']").on('change', function() {
			$(this).next('.custom-file-label').html($(this)[0].files[0].name);
		});
		$("input[name='<?php echo esc_js( $name ); ?>']").closest('.input-group').find('.reset').on('click', function() {
			$(this).parent().prev().children('.custom-file-label').html('ファイル選択...');
			$("input[name='<?php echo esc_js( $name ); ?>']").val('');
		})
	});
	</script>
</div>
