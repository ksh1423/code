<script src="/static/lib/ckeditor/ckeditor.js"></script>
<form action="/index.php/topic/add" method="post" class="span10">
    <?php echo validation_errors(); ?>
    <input type="text" name="title" placeholder="제목" class="span12" value="<?=$this->input->post('title')?>" />
    <textarea name="description" placeholder="본문" class="span12" rows="15" value="<?=$this->input->post('description')?>" ></textarea>
	<div class="form_control">
	    <input class="btn" type="submit" />
	</div>
</form>
<script>
	CKEDITOR.replace('description',{
		'filebrowserUploadUrl':'/index.php/topic/upload_receive_from_ck'
});
</script>

