<?php require_once "phpuploader/include_phpuploader.php" ?>
<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Files Uploader</title>
	<link href="demo.css" rel="stylesheet" type="text/css" />
</head>
<body style="background: url(../assets/img/pic1.jpg)">
	<div class="demo">
        <p> Select multiple files in the file browser dialog then upload them at once (Allowed file types: <span style="color:red">jpg, gif, png,mp4,</span>).
		<p> 
		<?php
			$uploader=new PhpUploader();
			
			$uploader->MultipleFilesUpload=true;
			$uploader->InsertText="Upload Multiple File (Max 1GB)";
			
			$uploader->MaxSizeKB=1048576;	
			$uploader->AllowedFileExtensions="jpeg,jpg,gif,png";
			
			//Where'd the files go?
			$uploader->SaveDirectory="../assets/img/gallery";
			
			$uploader->Render();
		?>	
		</p>
	<script type='text/javascript'>
	function CuteWebUI_AjaxUploader_OnTaskComplete(task)
	{
		var div=document.createElement("DIV");
		div.innerHTML=task.FileName + " is uploaded!";
		document.body.appendChild(div);
	}
	</script>		
	</div>
</body>
</html>
