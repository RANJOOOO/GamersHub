{{-- <!DOCTYPE html>
<html>
<!-- <head>
 <title>Add New Student</title>
  For Success alert that appears after deletion 
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head> -->
<body style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
    <h1>SP20-BCS-025</h1>
    <h1>Muhammad Ali Sabir</h1>
    <h1>Gamer Warrior a website to purchase game account</h1>
    <h1>Check entity to create a Buyer account</h1>
 <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
 Add new Seller
 </h2>
 <!-- For Redirecting With Flashed Session Data when 'Submit' button -->
 <!-- is pressed in the 'create.blade.php' view which calls the relevant -->
 <!-- function 'store' in the StudentController and then this -->
 <!-- view, 'create.blade.php' is again called -->
 <!-- START -->
 <!-- @if (session('status'))
 <div class="alert alert-success alert-dismissible">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 {{ session('status') }}
 </div> 
 @endif -->
 <!-- END -->
 <form action="store" method="post">
 @csrf
 <label for="buyer_name">buyer_name: &nbsp;</label>
 <input type="text" id="buyer_name" name="buyer_name"><br><br>
 <label for="buyer_address">buyer_address: &nbsp;</label>
 <input type="text" id="buyer_address" name="buyer_address"><br><br>
 <label for="Email">Email: &nbsp;</label>
 <input type="text" id="Email" name="Email"><br><br>
 <label for="Password">Password: &nbsp;</label>
 <input type="text" id="Password" name="Password"><br><br>
 <label for="Contact">Contact: &nbsp;</label>
 <input type="text" id="Contact" name="Contact"><br><br>
 <label for="CNIC">CNIC: &nbsp;</label>
 <input type="text" id="CNIC" name="CNIC"><br><br>
 <input type="submit" value="Submit">
 </form>
</body>
</html> --}}









<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buyer Adding Form</title>
    <link rel="stylesheet" href="{{ asset('css/createbuyer.css') }}">

</head>
<body>
	<div class="box">
		<form action="store" method="POST">
            @csrf

			<h2>Add</h2>
            <div class="inputBox">
                <input type="text" id="buyer_name" name="buyer_name">
                <span>Name</span>
				<i></i>
			</div>
			<div class="inputBox">
                <input type="text" id="buyer_address" name="buyer_address">
				<span>Address</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" id="Email" name="Email">

				<span>Email</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" id="Password" name="Password">

				<span>Password</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" id="Contact" name="Contact">

				<span>Contact</span>
				<i></i>
			</div>
            <div class="inputBox">
                <input type="text" id="CNIC" name="CNIC">
				<span>CNIC</span>
				<i></i>
			</div>
			<input type="submit" value="ADD">
            <div class="inputBox"><a href="http://127.0.0.1:8000/">Back</a></div>
			

		</form>
	</div>
</body>
</html> 



