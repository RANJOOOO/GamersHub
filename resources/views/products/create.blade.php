{{-- <!DOCTYPE html>
<html>
<head>
 <title>Add New Student</title>
  For Success alert that appears after deletion 
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"> -->
  <title>Add Product</title>
</head>
<body style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
    <h1>SP20-BCS-025</h1>
    <h1>Muhammad Ali Sabir</h1>
    <h1>Gamer Warrior a website to purchase game account</h1>
    <h1>Check entity to create a Buyer account</h1>
 <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
 Add Products
 </h2>
 <form action="items" method="post"  enctype="multipart/form-data">
 @csrf
 <label for="cnic">Name of the game: &nbsp;</label>
 <input type="text" id="cnic" name="gameName" value="Rise Of Kingdoms"><br><br>
 <label for="name">Title: &nbsp;</label>
 <input type="text" id="name" name="title"><br><br>
 <label for="address">Genre: &nbsp;</label>
 <input type="text" id="address" name="Genre"><br><br>
 <label for="address">Supported Devices: &nbsp;</label>
 <input type="text" id="address" name="SupportedDevices"><br><br>
 <label for="telNo">Price: &nbsp;</label>
 <input type="text" id="telNo" name="price"><br><br>
 <label for="age">Product Description: &nbsp;</label>
 <input type="text" id="age" name="description"><br><br>
 <label for="telNo">Upload Image 1: &nbsp;</label>
 <input class="form-control" name="image1" type="file" id="file"><br><br>
 <label for="telNo">Upload Image 2: &nbsp;</label>
 <input class="form-control" name="image2" type="file" id="file"><br><br>
 <label for="telNo">Upload Image3: &nbsp;</label>
 <input class="form-control" name="image3" type="file" id="file"><br><br>
 <input type="submit" value="Save" class="btn btn-success">
 </form>
</body>
</html> --}}





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Adding Form</title>
    <link rel="stylesheet" href="{{ asset('css/Productcreatebuyer.css') }}">

</head>
<body>
	<div class="box">
		<form action="items" method="POST" enctype="multipart/form-data">
            @csrf

			<h2>Add</h2>
            <div class="inputBox">
              <input type="text" id="cnic" name="gameName">

                <span>GameName</span>
				<i></i>
			</div>
			<div class="inputBox">
        <input type="text" id="name" name="title">

				<span>Title</span>
				<i></i>
			</div>
            <div class="inputBox">
              <input type="text" id="address" name="Genre">
				<span>Genre</span>
				<i></i>
			</div>
            <div class="inputBox">
              <input type="text" id="address" name="SupportedDevices">
				<span>SupportedDevices</span>
				<i></i>
			</div>
        <div class="inputBox">
            <input type="text" id="telNo" name="price">
				<span>Price</span>
				<i></i>
			</div>
      <div class="inputBox">
            <input type="text" id="age" name="description">
				<span>Description</span>
				<i></i>
			</div>

      <div class="inputBox">
        <input class="form-control" name="image1" type="file" id="file">
      <span>Upload Image1</span>
      <i></i>
      </div>
      <div class="inputBox">
        <input class="form-control" name="image2" type="file" id="file">
      <span>Upload Image 2</span>
      <i></i>
      </div>
      <div class="inputBox">
        <input class="form-control" name="image3" type="file" id="file">
      <span>Upload Image 3</span>
      <i></i>
      </div>
			<input type="submit" value="ADD">
            <div class="inputBox"><a href="http://127.0.0.1:8000/">Back</a></div>
		</form>
	</div>
</body>
</html> 