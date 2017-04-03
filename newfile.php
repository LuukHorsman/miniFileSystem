<div class="formHeader_container">
	<h1 class="formHeader">Make a new file</h1>
</div>
<div><a class="newItem" id="newFile" href="javascript:void(0);">Add more files</a></div>
<form class="formStyle" method="post">
		<div id="inputDiv">
			<input name="fileTitle[0]" id="fileName" class="longSelect" type="text">
		</div>
		<textarea class="formText" id="content" name="content"></textarea>
	<div class="formButtons">		
		<a href="javascript:;"  id="saveNewFile" class="saveButton">Save</a>
		<a href="<?php echo "/folder/" . $url[1] ?>"  id="delete" class="deleteButton">Cancel</a>	
	</div>	
</form>

<script src="/newfile.js"></script>