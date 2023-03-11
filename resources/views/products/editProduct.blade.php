<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Animated Login Form</title>
    <link rel="stylesheet" href="{{ asset('css/productEdit.css') }}">

</head>
<body>
	<div class="box">
		<form action="auth/updateproduct" method="POST">
            @csrf

			<h2>Update</h2>
            <div class="inputBox">
				<input type="hidden" name="id" required="required" value="{{$item->Id}}">
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" name="gameName" required="required" >
				<span>GameName</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="text" name="title" required="required" >
				<span>title</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="text" name="Genre" required="required" >
				<span>Genre</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="text" name="SupportedDevices" required="required">
				<span>Supported Devices</span>
				<i></i>
			</div>
            <div class="inputBox">
				<input type="text" required="required" name="price" >
				<span>Price</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" required="required" name="description" >
				{{-- <textarea name="description" id="description" cols="30" rows="10"></textarea> --}}
				<span>Description</span>
				<i></i>
			</div>
			<input type="submit" value="Update">
		</form>
	</div>
</body>
</html> 






{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<form action="hello" method="POST">
		@csrf
		<input type="hidden" name="id" value="{{$item->Id}}">
		<input type="text" name="gameName" >
		<input type="text" name="title" value="title">
		<input type="text" name="Genre" value="Genre">
		<input type="text" name="SupportedDevices" value="SupportedDevices">
		<input type="text" name="price" value="price">
		<input type="text" name="description" value="description">
		<input type="submit" value="update">
	</form>
</body>
</html> --}}