<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>title</title>
  <script src="/ajax.js"></script> 
  <script src="/deleteFile.js"></script> 
  <link rel="stylesheet" href="/ass011_files.css" type="text/css">
  </head>
  <body>
  
	<section class="row">
		<div class="col-2"></div>
		<div class="col-8 content">
			<div class="formHeader_container">
				<h1 class="formHeader">All files</h1>
			</div>
			<div class=""><a href=<?php echo "/new/" . $url[1] ?>>New file</a></div>
			<table class="fileTable">
				
				<tr>
					<th>Name</th>
					<th>Modified on</th>
					<th>File/Folder size</th>
					<th>Edit/Delete</th>
				</tr>
				
			<?php
				foreach(glob(filePath($url[1], '/') . '**') as $fileDir) {
					if(is_dir($fileDir)) {
						echo '<tr>';
						echo '<td class="middle"><a href="/folder/' . filePath($url[1], '-') . basename($fileDir) . '">' .basename($fileDir) . '</a></td>';	
						echo '<td class="middle">' . date("F d-m-Y H:i:s", filemtime($fileDir)) . '</td>';
						echo '<td class="middle">' . filesize($fileDir) . ' B</td>';
						echo '</tr>';
					}	
				}
				

				foreach(glob(filePath($url[1], '/') . '*.*') as $filename) {
					echo '<tr>';
					echo '<td class="middle">' . basename($filename) . '<br></td>';
					echo '<td class="middle">' . date("F d-m-Y H:i:s", filemtime($filename)) . '<br></td>';
					echo '<td class="middle">' . filesize($filename) . ' B</td>';
					echo '<td class="middle"> <a href="/edit/' . $url[1] . '/' . basename($filename) . '"><img class="pencil" src="/images/edit.png"></a><a href="javascript:;" value="' .   $fileDir . '"><img class="pencil" src="/images/delete.png"></a></td>';
					echo '</tr>';
				}
				
			
			?>
				
			</table>
		</div>
		<div class="col-2"></div>
		
	</section>	
  </body>
</html>