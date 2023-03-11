<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


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
                <li><a href="#">Home</a></li>
                <li><a href="http://127.0.0.1:8000/items_display">Games</a></li>
                <li><a href="http://127.0.0.1:8000/about">About</a></li>
                <li><a href="http://127.0.0.1:8000/contact">Contact</a></li>
            </ul>
          </nav>
          <a href="#" id="login-register-button">Login / Register</a>
        </div>
      </header>




    <div class="site-heading">
        <h2 class="heading_animation extend">our <span>games</span></h2>
        <p>We Provide You highly modified and upgraded accounts on minimum Rates</p>
    </div>
    <div class="check">
    <div class="current">Gaming Accounts</div>
    </div>
    <div class="big">
        <div class="container1"></div>
    <div class="container">
        
    @foreach ($data ?? '' as $items)
            <div class="grid-item">
            <a href="item_detail/{{$items['Id']}}">
                <div class="card">
                    <img class="card-img-top" src="{{$items->image1}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{$items->title}}</h5>
                        <p class="card-text">{{$items->price}}/-</p>
                        <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                    </div>
                    </a>
            </div>
    @endforeach
    </div>
    <div class="container2"></div>
    </div>


</body>
</html>


