<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/productDetailcss.css') }}">
    <title>Document</title>
</head>
<body>


<div class="min">

  <header>
    <div class="flex">
      <div class="logo">
        <a href="#"><img src="https://onclickwebdesign.com/wp-content/uploads/game_warrior_logo.png" alt="Game Warrior Logo" /></a>
      </div>
      <nav>
            <button id="nav-toggle" class="hamburger-menu">
              <span class="strip"></span>
                <span class="strip"></span>
                <span class="strip"></span>
            </button>
            <ul id="nav-menu-container">
                <li><a href="http://127.0.0.1:8000/">Home</a></li>
                <li><a href="http://127.0.0.1:8000/items_display">Games</a></li>
                <li><a href="http://127.0.0.1:8000/about">About</a></li>
                <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{$items->image1}}" class="d-block w-100" alt="..." >
                </div>
                <div class="carousel-item">
                  <img src="{{$items->image2}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{$items->image3}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <div class="col-md-7">
      
      <div class="newarrival">NEW</div>
      <h2>{{$items->gameName}}</h2>
      <p><span class="g"> Title : {{$items->title}}</span></p>
      <p class="price"> <span class="g"> {{$items->price}}Pkr </span> </p>
      <p><span class="g">Supported Devices : {{$items->SupportedDevices}}</span> </p>
    </div>
    <hr style="height:2px;border-width:0;color:rgb(102, 134, 220);background-color:gray" class="saas">
    <span class="g"> Description : </span>
    <p class="kk">
      <br>
      {{$items->description}}</p>
    </div>
<div class="edit">

<a href="{{url('updateproduct/'.$items->Id)}}">Update</a>
<a href="{{url('deleteproduct/'.$items->Id)}}">Delete</a>

</div>

</div>
  
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>