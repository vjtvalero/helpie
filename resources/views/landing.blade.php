<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Helpie.org</title>
  <link rel="icon" href="{{ asset('images/helpie-logo.png') }}" type="image/png">

  {{-- CSS --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body style="background-color:white;">
  <div class="container">
    <header class="landing-header py-3">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
          <div class="ml-4">
            <img src="{{ asset('images/helpie-logo.png') }}" alt="Helpie Logo" class="landing-header-logo">
            <a class="text-dark landing-header-logo-text" href="#">Helpie</a>
          </div>
        </div>
        <div class="col-5 d-flex justify-content-end align-items-center">
          <a class="text-muted" href="#" aria-label="Search">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img"
              viewBox="0 0 24 24" focusable="false">
              <title>Search</title>
              <circle cx="10.5" cy="10.5" r="7.5"></circle>
              <path d="M21 21l-5.2-5.2"></path>
            </svg>
          </a>
          <a href="#" class="mr-3 text-muted"><i class="fa fa-user"></i> Hello, User</a>
          <a href="#" class="mr-3 text-muted">Track Order</a>
          <a href="#" class="mr-3 text-muted"><i class="fa fa-shopping-cart"></i> Cart (0)</a>
        </div>
      </div>
    </header>
    <main role="main">
      <div class="nav-scroller py-1 mb-2 navbar landing-navbar">
        <nav class="nav d-flex justify-content-start">
          <a class="p-2 text-light" href="#">Crafts</a>
          <a class="p-2 text-light" href="#">Services</a>
          <a class="p-2 text-light" href="#">Pre-loved</a>
        </nav>
      </div>
      <div>
        <div class="row">
          <div class="col-3 pr-1">
            <div class="panel">
              <div class="pl-2 pr-2 pt-2">
                <button class="btn btn-success btn-block">Shop by categories</button>
              </div>
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        Toys & Entertainment &nbsp;<i class="fa fa-angle-down"></i>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Arts & Collectibles &nbsp;<i class="fa fa-angle-down"></i>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Clothing & Shoes &nbsp;<i class="fa fa-angle-down"></i>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionExample">
                    <div class="card-body">

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Jewelry & Accessories &nbsp;<i class="fa fa-angle-down"></i>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Crafts & Tools &nbsp;<i class="fa fa-angle-down"></i>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">

                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Home & Living &nbsp;<i class="fa fa-angle-down"></i>
                      </button>
                    </h2>
                  </div>
                  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">

                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <div class="panel">
              <div class="pl-2 pr-2 pt-2">
                <button class="btn btn-success btn-block">What they say</button>
                <br>
                <div class="text-center">
                  <h1 class="display-4"><i class="fa fa-user-circle-o"></i></h1>
                  <h3>Juan Dela Cruz</h3>
                  <i class="fa fa-quote-left text-success"></i>
                  <p class="mb-1">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus porta dolor. Fusce non est in
                    magna elementum dignissim. Nam lobortis, velit at finibus scelerisque, ligula ligula vulputate
                    justo,
                    sit amet porta nibh nunc vitae risus. Donec lacus velit, volutpat ut dolor vel, sodales scelerisque
                    augue. Sed ac dolor justo. Sed ultricies molestie sagittis.
                  </p>
                  <i class="fa fa-quote-right text-success"></i>
                </div>
              </div>
            </div>
          </div>
          <div class="col-9 pl-1">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('images/landing-carousel/carousel-1.jpg') }}" class="d-block w-100 img-fluid"
                    alt="Carousel 1">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/landing-carousel/carousel-2.jpg') }}" class="d-block w-100 img-fluid"
                    alt="Carousel 2">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('images/landing-carousel/carousel-3.jpg') }}" class="d-block w-100 img-fluid"
                    alt="Carousel 3">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="pt-3 pl-3 pr-3">
              <h5>Shop to Give</h5>
              <div class="input-group mb-3">
                <input type="text" class="form-control fontawesome" placeholder="&#xf002;"
                  aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-success" type="button" id="button-addon2">Go</button>
                </div>
              </div>
            </div>
            <div class="panel">
              <div class="text-center">
                <strong>Feature Message</strong>
              </div>
            </div>
            {{-- Products --}}
            <div class="px-1">
              <div class="mt-3 mb-3 d-flex justify-content-between">
                <strong>16 items</strong>
                <div class="dropdown">
                  <a class="btn btn-outline-secondary btn-sm" href="dropdown-toggle" data-toggle="dropdown"
                    aria-expanded="false">Price: lowest to highest <i class="fa fa-angle-down"></i></a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Price: lowest</a>
                    <a class="dropdown-item" href="#">Price: highest</a>
                    <a class="dropdown-item" href="#">Discount</a>
                  </div>
                </div>
              </div>

              <div class="card-columns">
                @for ($i = 0; $i < 16; $i++) <div class="col mb-4 px-1">
                  <div class="card">
                    <img src="{{ asset('images/products/product-1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body px-2 pt-3 pb-2">
                      <h5 class="card-title mb-0">Product</h5>
                      <p class="card-text">
                        $0.00
                        <br>
                        <span class="product-rating text-success">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-half-full"></i>
                        </span>
                      </p>
                    </div>
                  </div>
              </div>
              @endfor

            </div>

          </div>
        </div>
      </div>
    </main>
    <hr>
    <footer class="container mb-3">
      <div class="row justify-content-between">
        <div class="col-4">
          <div class="ml-2">
            <a class="text-muted" href="#">2020 @ Helpie | All rights reserved</a>
            <h4 class="text-muted mt-1">
              <i class="fa fa-cc-visa"></i>
              <i class="fa fa-cc-stripe"></i>
              <i class="fa fa-cc-mastercard"></i>
              <i class="fa fa-cc-paypal"></i>
            </h4>
          </div>
        </div>
        <div class="col-4">
          <a href="#" class="text-muted">Category X</a> |
          <a href="#" class="text-muted">Category Y</a> |
          <a href="#" class="text-muted">Category Z</a>
        </div>
        <div class="col-4">
          <span class="text-muted">Stay in Touch! Join our Newsletter:</span>
          <div class="input-group">
            <input type="text" class="form-control form-control-sm" placeholder="Enter email" aria-label="Email"
              aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-secondary btn-sm" type="button" id="button-addon2">Subscribe</button>
            </div>
          </div>
        </div>
      </div>
    </footer>

  </div>
  </div>

  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>

</html>