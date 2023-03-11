<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buyer Adding Form</title>
    <link rel="stylesheet" href="{{ asset('css/createseller.css') }}">

</head>
<body>
	<div class="box">
		<form action="adding_seller" method="POST">
            @csrf

			<h2>Add</h2>
            <div class="inputBox">
                <input type="text" id="buyer_name" name="sellerName">
                <span>Name</span>
				<i></i>
			</div>
			<div class="inputBox">
                <input type="text" id="buyer_address" name="sellerAddress">
				<span>Address</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" id="Email" name="sellerEmail">
				<span>Email</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" id="Password" name="sellerPassword">
				<span>Password</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" id="Contact" name="contact">
				<span>Contact</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" id="CNIC" name="cnic">
				<span>CNIC</span>
				<i></i>
			</div>
			<input type="submit" value="ADD">
            <div class="inputBox"><a href="http://127.0.0.1:8000/">Back</a></div>
		</form>
	</div>
</body>
</html> 
