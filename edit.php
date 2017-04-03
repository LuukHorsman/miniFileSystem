<div class="formHeader_container">
	<h1 class="formHeader">editing <?= basename($newFile->fileName) ?></h1>
</div>
<form class="formStyle" method="post">
	<?php
		echo '<input type="hidden" value="' . $newFile->fileName . '" id="oldFileName">';
		echo '<input name="fileTitle" id="fileName" class="longSelect" type="text" value="' . basename($newFile->fileName) . '">';
	?>
	
	<textarea class="formText" id="content" name="content"><?= $newFile->readTheFile(); ?></textarea>
	<div class="formButtons">		
		<a href="javascript:;"  id="save" class="saveButton">Save</a>
		<a href="<?php echo "/folder/" . $url[1] ?>"  id="delete" class="deleteButton">Cancel</a>	
	</div>	
</form>
<div class="message" id="message"></div>
<script src="/editFile.js"></script>