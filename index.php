<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type = "text/css" href = "css/style.css"  rel = "stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
    


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Wanderlust Adventures</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
       <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        
          </ul>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Chicago</h5>
        <p>Embrace the Heartbeat of the Midwest: Chicago's Vibrant Soul, Architecture, and Deep-Rooted Culture</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/london.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>London</h5>
        <p>Unveil the Majesty of London: A Timeless Tapestry of History and Modern Marvels</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Greece</h5>
        <p>Discover the Timeless Beauty of Greece: Where Ancient Legends Meet Stunning Landscapes</p>
      </div>
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">About Us </h2>
</div>
<div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src = "images/me.jpg" class= "img-fluid" aboutimg>
    </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4">Wanderlust Adventures</h2>
        
        <p class="py-5">Your portal to incredible travel experiences! Explore captivating destinations, curated itineraries, and personalized tours that cater to your wanderlust desires. Unleash the adventurer within and embark on unforgettable journeys around the globe. Let your wanderlust guide you to new horizons with Wanderlust Adventures.
        Welcome to Wanderlust Adventures, your gateway to extraordinary travel experiences! Our website is your passport to the world's most enchanting destinations and thrilling escapades. Whether you crave adrenaline-pumping adventures, cultural immersions, or serene getaways, Wanderlust Adventures has the perfect itinerary for you. Explore our carefully curated tours, expertly designed to fulfill your wanderlust dreams. With seamless planning, exceptional customer service, and a passion for exploration, we are committed to making your travel dreams a reality. Embark on a journey of a lifetime with Wanderlust Adventures and create memories that will last forever. Let the adventure begin!</p>
<a href = "about.php" class="btn btn-success"> Check More </a>


</div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Services </h2>
</div>
<div class="container-fluid">
  <div class="row">
    <div class = "col-lg-4 col-md-4 col-12>
    <div class="card" >
  <img class="card-img-top" src="images\world.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Visa</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

<div class = "col-lg-4 col-md-4 col-12>
    <div class="card" >
  <img class="card-img-top" src="images/book.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Visa</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

<div class = "col-lg-4 col-md-4 col-12>
    <div class="card" >
  <img class="card-img-top" src="images/visa.jpg" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">Visa</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
</div>
</div>
</section>

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Our Gallery </h2>
</div>



<div clas="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12">
      <img src = "images/img6.jpg" class= "img-fluid pb-4"> 
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src = "images/me.jpg" class= "img-fluid pb-4"> 
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src = "images/img3.jpg" class= "img-fluid pb-4"> 
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src = "images/img4.jpg" class= "img-fluid pb-4"> 
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src = "images/london.jpg" class= "img-fluid pb-4"> 
</div>

<div class="col-lg-4 col-md-4 col-12">
      <img src = "images/new.jpg" class= "img-fluid pb-4"> 
</div>

</div>
</div>
</section>


<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">Details</h2>
</div>

<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="user" autocomplete="off" class="form-control">
</div>


<div class="form-group">
      <label>Email Id</label>
      <input type="text" name="email" autocomplete="off" class="form-control">
</div>


<div class="form-group">
      <label>Mobile</label>
      <input type="text" name="mobile" autocomplete="off" class="form-control">
</div>

<div class="form-group">
      <label>Comments</label>
      <textarea class= "form-control" name="comments">
      </textarea>
</div>

<button type="submit" class="btn btn-success">Submit</button>

</form>
</div>
</section>

<footer>
  <p class="p-3 bg-dark text-white text-center">@Dikshita'sProductions</p>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>