<script src="/codeigniter/static/lib/ckeditor/ckeditor.js"></script>
<form action="/codeigniter/index.php/topic/add" method="post" class="span10">
    <?php echo validation_errors(); ?>
    <input type="text" name="title" placeholder="제목" class="span12" />
    <textarea name="description" placeholder="본문" class="span12" rows="15" ></textarea>
	<div class="form_control">
	    <input class="btn" type="submit" />
	</div>
</form>
<script>
	CKEDITOR.replace('description',{
		'filebrowserUploadUrl':'/codeigniter/index.php/topic/upload_receive_from_ck'
});
</script>
