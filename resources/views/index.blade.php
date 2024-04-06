@extends('layouts.app')
@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>

<!-- Background image -->
<div
  class="bg-image d-flex justify-content-center align-items-center"
  style="
    background-image: url('https://mdbcdn.b-cdn.net/img/new/fluid/nature/015.webp');
    height: 90vh;
  "        
>
<div class="text-center fluid " >
              <h1 class="  text-center text-white fw-bold fst-italic">Welcome To My Blog</h1>
                <a href="/" class=" text-decoration-none fs-3  ">Start Reading</a>
          </div>

</div>

 <hr>

        <!-- Post -->
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="bg-image hover-overlay shadow-1-strong rounded " data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/190.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-4 mb-4">
            <h3 class="fw-bold">Why nature is the best?</h3>
            <p>
            It underpins our economy, our society, indeed our very existence. 
            Our forests, rivers, oceans and soils provide us with the food we eat, the air we breathe,
            the water we irrigate our crops with.
            We also rely on them for numerous other goods and services we depend on for our health,
            happiness and prosperity.
            </p>

            <button type="button" class="btn btn-primary" data-mdb-ripple-init>
              <a href="/" class=" text-decoration-none text-white ">
              Read more</a></button>
          </div>
        </div>

<hr>

<div class="row">
     
          <div class="col-md-4 mb-4 d-block ">
            <div class="bg-image hover-overlay shadow-1-strong rounded " data-mdb-ripple-init data-mdb-ripple-color="light">
              <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
         </div>
    

          <div class="col-md-4 mb-4">
            <h3 class="fw-bold">How can we protect nature?</h3>
            <p>
            9 things you can do to protect the natural world
            Be a green gardener by using peat-free compost and natural fertilisers and pesticides.
            Plant native species and be kind to all the insects and birds that feed on flower nectar and pollinate the fruits. 
            If you can, support local wildlife around your home by setting up bee hotels, bird boxes, ponds and green 
            </p>

            <button type="button" class="btn btn-primary" data-mdb-ripple-init>
            <a href="/" class=" text-decoration-none text-white ">
              Read more</a></button>
            </div>
</div>
    
<hr class="mb-2">

<div class="p-3 mb-2 text-warning bg-dark  " >
  <h2 class="text-center fs-1">Blog Categories</h2>
    <div class="container">
    <div class="row ">
     
        <span class=" col-md-1 mb-2  " >Ux Design</span>
        <span class=" col-md-1 mb-2 " >Programming</span>
        <span class=" col-md-1 mb-2 " >Graphic Design</span>
        <span class=" col-md-1 mb-2 ">Front-End</span>
        <span class=" col-md-1 mb-2 ">Nature</span>
        <span class=" col-md-1 mb-2 ">Sports</span>
        <span class=" col-md-1 mb-2">Fashion</span>
        <span class=" col-md-1 mb-2 ">Events</span>
        <span class=" col-md-1 mb-2 ">Lifestyle </span>
        <span class=" col-md-1 mb-2 ">News</span>
        <span class=" col-md-1 mb-2 ">Any thing you thought</span>
        
    </div>
    </div>

</div>


<hr class="mt-2">

<div>
  
  <div class="container">
  <h2 class="fs-1 fw-bold m-5">Recent Posts</h2>
    <div class="row mb-2">
    <p class="col-md-4 ">
     Natural environments can stimulate the senses, providing new and fresh scents,
     a beautiful array of colours to see, a range of textures to touch and a host of calming sounds. 
    We've got to say, there's something special about walking through woodlands after a light shower
    </p>
    <img class="col-md-4"
    src="https://picsum.photos/id/778/960/620"  alt="">
    </div>

    <div class="row">
    <p class="col-md-4 ">
     Studying is not just important for educational development, but also builds personal skills.
     Having good study skills can improve your confidence, competence, and self-esteem.
     As well as helps reduce stress and anxiety around deadlines and exams
    </p>
    <img class="col-md-4"
     src="https://picsum.photos/id/9/960/620"  alt="">
    </div>
  </div>
</div> 
<hr>
<div class="row">
<img class="col-md-4"
    src="https://picsum.photos/id/900/960/620"  alt="">
    
<img class="col-md-4"
    src="https://picsum.photos/id/600/960/620"  alt="">
    
<img class="col-md-4"
    src="https://picsum.photos/id/200/960/620"  alt="">
</div>
 <hr>
@endsection