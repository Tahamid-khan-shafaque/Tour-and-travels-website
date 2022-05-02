<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Hello, world!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">TOUR & TRAVELS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 " style="font-size:20px; padding:11px;">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="weblog.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#gallery">Gallery</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link active" href="#contact">Contact Us</a>
          </li>



        </ul>

       <!--  <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->
        <a class="btn btn-danger btn-lg" href="index.php" role="button">Log out</a>


      </div>
    </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/travel-2.jpg" class="d-block w-100 h-45" alt="width=500" height="630">
      </div>
      <div class="carousel-item">
        <img src="img/travel-4.jpg" class="d-block w-100 h-45" alt="width=500" height="630">
      </div>
      <div class="carousel-item">
        <img src="img/travel-3.jpg" class="d-block w-100 h-45" alt="width=500" height="630">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true">slide</span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true">slide</span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- <section class="my-5" >
  <div>
    <h3 class="text-center">This is about us page</h3>
  </div>


<div class="container-fluid">
  <div class="row py-5">

    <div class="col-lg-6 col-md-6 col=12">
      <img src="img/banner1.jpg" class="img-fluid">
    </div>
  </div>

  <div class="col-lg-6 col-md-6 col=12">
    <h1>I am tahmid khan</h1>
  </div>


</div>
</div>
</section> -->

  <!-- <div class="row py-5">
  <div class="col-lg-6 col-md-6 col=12">
    <img src="img/banner1.jpg" class="img-fluid" alt="width=900" height="500">
  </div>
</div> -->
  <div>
    <h2 class="text-center my-5" id="about">ABOUT US</h2>
  </div>
  <section>
    <div class="container" >
      <div class="row my-5">
        <div class="col-md-6 col-xm-12 janu ">
          <img src="img/demoooo.jpg" class="container-fluid aboutimg">
        </div>

        <div class="col-md-6 col-xm-12 baby">
          <h1 class="text-center">I AM TAHMID KHAN</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, consequuntur dolor! Ducimus,
            perferendis? Reprehenderit quae in eos minima inventore quis! Lorem, ipsum dolor sit amet consectetur
            adipisicing elit. Sequi enim deserunt vitae quos magnam maiores itaque? Minus porro error odio ducimus atque
            obcaecati quasi voluptatum harum hic voluptatibus reprehenderit illum asperiores aliquam, adipisci nulla
            recusandae impedit quo suscipit Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint enim,
            aspernatur aut asperiores repudiandae ex itaque, ad molestiae ipsa accusamus tenetur expedita dolore
            temporibus autem. Expedita ab at cupiditate labore. Maxime, id voluptate quidem obcaecati rerum rem
            reprehenderit voluptates consectetur. </p>
        </div>

<!-- here starts our tour package section -->
        <section>
          <div class="py-5">
            <h3 class="text-center">Tour package</h3>
          </div>


          <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card" style="width: 18rem; margin-bottom: 16px; margin-top: 20px;">
                        <img src="./img/chi.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                </div>



                <div class="col-12 col-md-6 col-lg-4">
                  <div class="card" style="width: 18rem;margin-bottom: 16px; margin-top: 5px;">
                      <img src="./img/chi.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                    </div>
              </div>

              <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;margin-bottom: 16px; margin-top: 5px;">
                    <img src="./img/chi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;margin-bottom: 16px; margin-top: 5px;">
                  <img src="./img/chi.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
          </div>

            <div class="col-12 col-md-6 col-lg-4">
              <div class="card" style="width: 18rem;margin-bottom: 16px; margin-top: 5px;">
                  <img src="./img/chi.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
          </div>


              <div class="col-12 col-md-6 col-lg-4">
                <div class="card" style="width: 18rem;margin-bottom: 16px; margin-top: 5px;">
                    <img src="./img/bhut.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                  </div>
            </div>

<!-- here starts our tour package section -->
          <div>
            <h2 class="text-center my-5" id="gallery">Gallery</h2>
          </div>

          <section>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-3  janu ">
                  <h4 class="text-center">India</h4>
                  <img src="img/kas.jpg" class="container-fluid pb-3 ">
                </div>

                <div class="col-md-3  janu ">
                  <h5 class="text-center">Sri-lanka</h5>
                  <img src="img/sri.jpg" class="container-fluid pb-3">
                </div>
                <div class="col-md-3  janu ">
                  <h5 class="text-center">Chaina</h5>
                  <img src="img/chi.jpg" class="container-fluid pb-3">
                </div>
                <div class="col-md-3  janu ">
                  <h5 class="text-center">Japan</h5>
                  <img src="img/jap.jpg" class="container-fluid pb-3">
                </div>
                <div class="col-md-3  janu ">
                  <h5 class="text-center">Miyanmar</h5>
                  <img src="img/jap.jpg" class="container-fluid pb-3">
                </div>
                <div class="col-md-3  janu ">
                  <h5 class="text-center">Maldives</h5>
                  <img src="img/banner1.jpg" class="container-fluid pb-3">
                </div>
                <div class="col-md-3  janu ">
                  <h5 class="text-center">Bhutan</h5>
                  <img src="img/bhut.jpg" class="container-fluid pb-3">
                </div>
                <div class="col-md-3  janu ">
                  <h5 class="text-center">Nepal</h5>
                  <img src="img/nepppp.jpg" class="container-fluid pb-3">
                </div>

              </div>
            </div>
            <section>

              <section class="my-5">
                <div class="py-5">
                  <h2 class="text-center" id="contact">Feedback</h2>
                </div>
                <div class="w-50 m-auto">
                  <form action="userinfo.php" method="post">

                    <div class="form-group">
                      <label for="">Username</label>
                      <input type="text" name="user" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">Emaili Id</label>
                      <input type="text" name="email" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">Mobile</label>
                      <input type="text" name="mobile" autocomplete="off" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="">Comment</label>
                      <textarea class="form-control" name="comment" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div>
                      <button type="submit" class="btn btn-danger my-2">Submit</button>
                    </div>
                  </form>
                </div>
              </section>


              <footer>
                <p class=" p-3 bg-dark text-white text-center">@khantahmid003@gmail.com</p>
              </footer>






              <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>


</body>

</html>


<!-- (fw-bold) for bold letters -->