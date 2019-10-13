@extends('layouts/main')
@section('content')
<head> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<style>
  .cont{
    font-size:20px;
font-family: 'Open Sans', sans-serif;
}

.carousel-item img {
     /* opacity: 1; */
   }

   .carousel-item.active,
.carousel-item-next,
.carousel-item-prev{
    display:block;
}
.carousel-caption {
    top: 30px;;
    bottom: auto;
}

.carousel-item{
    height:500px;
}
</style>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="opacity:0.8 ;" src="c3.jpg" alt="none.png" width="1100" height="500">
      <div class="carousel-caption">
        <h1 style="font-family:cursive; color:#121254;">Knowledge is the key to success.</h1>
        <p style="font-size:20px; color:darkslateblue;">Join us today at SGT.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img style="opacity:0.2" class="d-block w-100" src="c44.jpg" alt="none.png" width="1100" height="500">
      <div class="carousel-caption">
        <h1 style="color:#121254;">Conducting Interactive Sessions for children</h1>
      </div>   
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="logo.png" alt="none.png" width="1100" height="500">
      <div class="carousel-caption">
        <h3 style="background-color:black;">Shiksha Group Tuitions!</h3>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>  <br><br>
  
  
  
  <div class="container">
  
    <div class="card-deck">
    <div class="card bg-light">
      <div class="card-header bg-secondary text-white">
          <div style="font-size:20px; text-align:center;" class="">
              <div>
                  Engineering Maths and Programming!
              </div>
          </div>
      </div>
      <div class="card-body text-center cont">
        <p class="card-text">These subjects are taken by Prof. Nitesh Karsi Sir.</p>
        <p class="card-text">He is the founder of SGT.</p>
        <p class="card-text">We cover unit test portions of <span style="color:red;">every college</span> on time</p>
        <p class="card-text">Being a friend is more satisfactory than being a teacher with student!</p>
      </div>
    </div>

      <div class="card bg-light">
          <div class="card-header bg-secondary text-white">
              <div style="font-size:20px; text-align:center;" class="">
                  <div>
                      All subjects for SSC and CBSE VIII, IX & X
                  </div>
              </div>
          </div>
          <div class="card-body text-center cont">
            <p class="card-text">Prof. Nitesh Karsi being the professor of engineering batch observed that the base of students is not that strong.</p>
            <p class="card-text">Thus he thought of starting the school section.</p>
            <p class="card-text">We aim at <span style="color:red;">building base</span> of each and every student.</p>
            <p class="card-text">Also to inculcate good values in students from the start is our motive.</p>
          </div>
        </div>

          <div class="card bg-light">
              <div class="card-header bg-secondary text-white">
                  <div style="font-size:20px; text-align:center;" class="">
                      <div>
                          French Language and Training for all ages!
                      </div>
                  </div>
              </div>
              <div class="card-body text-center cont">
                <p class="card-text">Prof. XYZ Karsi, the co-ordinator of Podar School takes French training..</p>
                <p class="card-text">French is one of the most important foreign languages.</p>
                <p class="card-text">We aim at <span style="color:red;">all the skills</span> of French for the complete training course.</p>
              </div>
            </div>
          </div>
  </div>
@endsection