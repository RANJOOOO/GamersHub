<!DOCTYPE html>
<html>

<head>
	<title>Image Upload</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> 
	<link rel="stylesheet" type="text/css" href="upload.css" />
    <link rel="stylesheet" href="upload.css">
</head>

<body>
	<div id="content">
		<form action="adding_file" method="post" enctype="multipart/form-data">
			@csrf
			<input class="form-control" name="file" type="file" id="photo">
			<!-- <input class="form-control" name="photo1" type="file" id="photo1"> -->
			<!-- <input class="form-control" name="photo" type="file" id="photo2"> -->
			<input type="submit" value="Save" class="btn btn-success"></br>
			
		</form>
	</div>
</body>

</html>