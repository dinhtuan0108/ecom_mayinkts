<script  type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('.select-image').click(function() {
			var objFormIn = jQuery("input[name=" + jQuery(this).attr("id") + "]");
			var display = jQuery("#" + jQuery(this).attr("id") + "-image");
			tb_show('', 'media-upload.php?type=image&amp;TB_iframe=true');
			window.send_to_editor = function(html) {
				imgurl = jQuery('img', html).attr('src');
				objFormIn.val(imgurl);
				display.attr("src", imgurl);
				tb_remove();
			}
			return false;
		});
	});

</script>
<?php
	if (isset($_POST[save])) :
		unset($_POST[save]);
		foreach ($_POST as $key => $val) :
			$getids = explode("-", $key);
			if (!empty($val))
				set_cat_logo($getids[2], $val);
		endforeach;
	endif;
?>
<?php    $categories = get_categories('hide_empty=0');?>
<form action="" method="post" >
	<input type="submit" name="save" value="save">
	<table align="center" class="widefat post fixed">
		<thead>
			<tr>
				<th>Category</th><th>Category Logo</th><th>Options</th>
			</tr>
		</thead>
		<thead>
			<?php foreach($categories AS $cat):
			?>
			<tr>
				<td><?php echo $cat->name
				?></td><td><img src="<?php  echo get_cat_logo($cat -> cat_ID);?>" width="150" id="select-image-<?php echo $cat->cat_ID?>-image"/></td><td>
				<input type="hidden" name="select-image-<?php echo $cat->cat_ID?>"/>
				<input type="button" id="select-image-<?php echo $cat->cat_ID?>" class="select-image" value="Select image">
				</td>
			</tr>
			<?php endforeach;?>
		</thead>
	</table>
</form>