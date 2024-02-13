@extends('master')
@section('title')
Home
@endsection
@section('content')
<section class="slider-section">
    <div class="">
        <div class="card search-box py-4 rounded container" style="width: 18rem;">
            <h1 class="fs-3 my-2">
                Search the right bike
            </h1>
            <div class="mt-3 ">
                <ul class="nav nav-pills navpills1 mb-3 d-flex justify-content-between" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link navlink1 active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">New Bike</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link navlink1" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Used Bike</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="d-flex gap-1 py-1">
                            <input class="" checked type="radio">
                            <span class="me-3">By Brand</span>
                            <input type="radio">
                            <span>By Budget</span>
                        </div>
                        <div class="mt-3">
                            <input type="text" class="form-control" placeholder="Select Brand">
                            <input type="text" class="form-control"  placeholder="Select Model">
                        </div>
                        <button class="w-100 btn btn-dark mt-3">Search</button>
                        <p class="d-flex justify-content-end my-4">Advance Search</p>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="d-flex gap-1 py-1">
                                <input class="" checked type="radio">
                                <span class="me-3">By Budget</span>
                                <input type="radio">
                                <span>By Model</span>
                            </div>
                            <div class="mt-3">
                                <input type="text" class="form-control" placeholder="Select Budget">
                                <input type="text" class="form-control"  placeholder="Select City">
                            </div>
                            <button class="w-100 btn btn-dark mt-3">Search</button>
                            <p class="d-flex justify-content-end my-4">Advance Search</p>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/c1.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/c2.webp" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/c3.webp" class="d-block w-100" alt="...">
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
</section>
<section class="running news">
    <div class="row">
        <div class="col-12 bor-bt">
            <h1 class="mx-3 py-3 text-danger">Recent Update:</h1>
            <marquee class="mb-2" direction="right"> Lets Move this text.</marquee>
        </div>
    </div>
</section>
<section class="category">
 <div class="mt-5">
    <div class="container bg-white">
        <div class="container">
            <div class="row">
                <div class="col-12 mt-2">
                    <h1 class="my-4 fs-1"><strong>Bikes in Spotlight</strong></h1>
                    <div class="">
                       <ul class="nav nav-pills navpills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link navlink active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Most Popular</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link navlink" id="pills-sports-tab" data-bs-toggle="pill" data-bs-target="#pills-sports" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Sports Bikes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link navlink" id="pills-mileage-tab" data-bs-toggle="pill" data-bs-target="#pills-mileage" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Best Mileage Bikes</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link navlink" id="pills-cruiser-tab" data-bs-toggle="pill" data-bs-target="#pills-cruiser" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Cruiser Bikes</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link navlink" id="pills-commuter-tab" data-bs-toggle="pill" data-bs-target="#pills-commuter" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Commuter Bikes</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link navlink" id="pills-road-tab" data-bs-toggle="pill" data-bs-target="#pills-road" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Off Road Bikes</button>
                          </li>
                        </ul>
                     <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4" style="width: auto;">
                                            <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Yamaha MT 15 </h5>
                                              <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                              <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                            </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-sports" role="tabpanel" aria-labelledby="pills-sports-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4" style="width: auto;">
                                            <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Yamaha MT 15 </h5>
                                              <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                              <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                            </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-mileage" role="tabpanel" aria-labelledby="pills-mileage-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4" style="width: auto;">
                                            <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Yamaha MT 15 </h5>
                                              <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                              <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                            </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-cruiser" role="tabpanel" aria-labelledby="pills-cruiser-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4" style="width: auto;">
                                            <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Yamaha MT 15 </h5>
                                              <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                              <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                            </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-commuter" role="tabpanel" aria-labelledby="pills-commuter-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4" style="width: auto;">
                                            <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Yamaha MT 15 </h5>
                                              <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                              <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                            </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-road" role="tabpanel" aria-labelledby="pills-road-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4" style="width: auto;">
                                            <img src="img/bike2.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                              <h5 class="card-title">Yamaha MT 15 </h5>
                                              <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                              <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                            </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4" style="width: auto;">
                                        <img src="img/bike1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-dark red-button border-1 w-100 text-uppercase">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </div>
 </div>
</section>
<section class="news">
    <div class="mt-5">
       <div class="container bg-white">
           <div class="container">
               <div class="row">
                   <div class="col-12 mt-2">
                       <h1 class="my-4 fs-1"><strong>Latest Updates</strong></h1>
                       <div class="">
                          <ul class="nav nav-pills navpills mb-3" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                             <button class="nav-link navlink active" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Latest</button>
                           </li>
                           <li class="nav-item" role="presentation">
                             <button class="nav-link navlink" id="pills-offer-tab" data-bs-toggle="pill" data-bs-target="#pills-offer" type="button" role="tab" aria-controls="pills-offer" aria-selected="false">Offer</button>
                           </li>
                           <li class="nav-item" role="presentation">
                             <button class="nav-link navlink" id="pills-mileage-tab" data-bs-toggle="pill" data-bs-target="#pills-review" type="button" role="tab" aria-controls="pills-review" aria-selected="false">User Review</button>
                           </li>
                           <li class="nav-item" role="presentation">
                               <button class="nav-link navlink" id="pills-cruiser-tab" data-bs-toggle="pill" data-bs-target="#pills-test_ride" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Test Ride Review</button>
                             </li>
                             <li class="nav-item" role="presentation">
                               <button class="nav-link navlink" id="pills-commuter-tab" data-bs-toggle="pill" data-bs-target="#pills-tips" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Tips & Ticks</button>
                             </li>
                           </ul>
                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title"><a href="" class="text-decoration-none text-black">অপেক্ষা অবসান ঘটিয়ে বাংলাদেশে লঞ্চ হল Hero Karizma XMR 210</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবিশ্বাস্য দামে বাংলাদেশে লঞ্চ হল Hero Thriller 160R 4V</a></h5>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4 border-0" style="width: auto;">
                                            <img src="img/news3.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                             <h5 class="card-title"><a href="" class="text-decoration-none text-black">বিএইচএল লঞ্চ করেছে নতুন Honda XBlade 160 2024</a></h5>
                                           </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news4.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবশেষে বাংলাদেশে লঞ্চ হতে যাচ্ছে Hero Karizma XMR 210</a></h5>
                                       </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                           <div class="tab-pane fade" id="pills-offer" role="tabpanel" aria-labelledby="pills-sports-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title"><a href="" class="text-decoration-none text-black">অপেক্ষা অবসান ঘটিয়ে বাংলাদেশে লঞ্চ হল Hero Karizma XMR 210</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবিশ্বাস্য দামে বাংলাদেশে লঞ্চ হল Hero Thriller 160R 4V</a></h5>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4 border-0" style="width: auto;">
                                            <img src="img/news3.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                             <h5 class="card-title"><a href="" class="text-decoration-none text-black">বিএইচএল লঞ্চ করেছে নতুন Honda XBlade 160 2024</a></h5>
                                           </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news4.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবশেষে বাংলাদেশে লঞ্চ হতে যাচ্ছে Hero Karizma XMR 210</a></h5>
                                       </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                           <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title"><a href="" class="text-decoration-none text-black">অপেক্ষা অবসান ঘটিয়ে বাংলাদেশে লঞ্চ হল Hero Karizma XMR 210</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবিশ্বাস্য দামে বাংলাদেশে লঞ্চ হল Hero Thriller 160R 4V</a></h5>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4 border-0" style="width: auto;">
                                            <img src="img/news3.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                             <h5 class="card-title"><a href="" class="text-decoration-none text-black">বিএইচএল লঞ্চ করেছে নতুন Honda XBlade 160 2024</a></h5>
                                           </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news4.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবশেষে বাংলাদেশে লঞ্চ হতে যাচ্ছে Hero Karizma XMR 210</a></h5>
                                       </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                           <div class="tab-pane fade" id="pills-test_ride" role="tabpanel" aria-labelledby="pills-cruiser-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title"><a href="" class="text-decoration-none text-black">অপেক্ষা অবসান ঘটিয়ে বাংলাদেশে লঞ্চ হল Hero Karizma XMR 210</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবিশ্বাস্য দামে বাংলাদেশে লঞ্চ হল Hero Thriller 160R 4V</a></h5>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4 border-0" style="width: auto;">
                                            <img src="img/news3.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                             <h5 class="card-title"><a href="" class="text-decoration-none text-black">বিএইচএল লঞ্চ করেছে নতুন Honda XBlade 160 2024</a></h5>
                                           </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news4.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবশেষে বাংলাদেশে লঞ্চ হতে যাচ্ছে Hero Karizma XMR 210</a></h5>
                                       </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                           <div class="tab-pane fade" id="pills-tips" role="tabpanel" aria-labelledby="pills-test_ride-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title"><a href="" class="text-decoration-none text-black">অপেক্ষা অবসান ঘটিয়ে বাংলাদেশে লঞ্চ হল Hero Karizma XMR 210</a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবিশ্বাস্য দামে বাংলাদেশে লঞ্চ হল Hero Thriller 160R 4V</a></h5>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4 border-0" style="width: auto;">
                                            <img src="img/news3.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                             <h5 class="card-title"><a href="" class="text-decoration-none text-black">বিএইচএল লঞ্চ করেছে নতুন Honda XBlade 160 2024</a></h5>
                                           </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/news4.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black">অবশেষে বাংলাদেশে লঞ্চ হতে যাচ্ছে Hero Karizma XMR 210</a></h5>
                                       </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                       </div>
                    </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</section>
<section class="Latest">
    <div class="mt-5">
       <div class="container bg-white">
           <div class="container">
               <div class="row">
                   <div class="col-12 mt-2">
                       <h1 class="my-4 fs-1"><strong>Latest Motor Cycles</strong></h1>
                       <div class="">
                          <ul class="nav nav-pills navpills mb-3" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                             <button class="nav-link navlink active" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-bike" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Bike</button>
                           </li>
                           <li class="nav-item" role="presentation">
                             <button class="nav-link navlink" id="pills-offer-tab" data-bs-toggle="pill" data-bs-target="#pills-scooter" type="button" role="tab" aria-controls="pills-offer" aria-selected="false">Scooter</button>
                           </li>
                           <li class="nav-item" role="presentation">
                             <button class="nav-link navlink" id="pills-mileage-tab" data-bs-toggle="pill" data-bs-target="#pills-electric" type="button" role="tab" aria-controls="pills-review" aria-selected="false">Electric Bike</button>
                           </li>
                           </ul>
                             <div class="tab-content" id="pills-tabContent">
                             <div class="tab-pane fade show active" id="pills-bike" role="tabpanel" aria-labelledby="pills-latest-tab">
                                <div class="row">
                                 <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/latest1.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                          <h5 class="card-title"><a href="" class="text-decoration-none text-black "><strong class="fs-4 text-red">Price - Tk . 190000</strong></a></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/latest2.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black"><strong class="fs-4 text-red">Price - Tk . 200000</strong></a></h5>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                   <div class="row">
                                    <div class="">
                                        <div class="card mt-4 border-0" style="width: auto;">
                                            <img src="img/latest3.webp" class="card-img-top img-fluid" alt="...">
                                            <div class="card-body">
                                             <h5 class="card-title"><a href="" class="text-decoration-none text-black"><strong class="fs-4 text-red">Price - Tk . 210000</strong></a></h5>
                                           </div>
                                         </div>
                                    </div>
                                   </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="card mt-4 border-0" style="width: auto;">
                                        <img src="img/latest4.webp" class="card-img-top img-fluid" alt="...">
                                        <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black"><strong class="fs-4 text-red">Price - Tk . 220000</strong></a></h5>
                                       </div>
                                    </div>
                                </div>
                               </div>
                           </div>
                           <div class="tab-pane fade" id="pills-scooter" role="tabpanel" aria-labelledby="pills-sports-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                   <div class="card mt-4 border-0" style="width: auto;">
                                       <img src="img/latest1.webp" class="card-img-top img-fluid" alt="...">
                                       <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black "><strong class="fs-4 text-red">Price - Tk . 190000</strong></a></h5>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-3 col-6">
                                   <div class="card mt-4 border-0" style="width: auto;">
                                       <img src="img/latest2.webp" class="card-img-top img-fluid" alt="...">
                                       <div class="card-body">
                                        <h5 class="card-title"><a href="" class="text-decoration-none text-black"><strong class="fs-4 text-red">Price - Tk . 200000</strong></a></h5>
                                      </div>
                                   </div>
                               </div>
                               <div class="col-md-3 col-6">
                                  <div class="row">
                                   <div class="">
                                       <div class="card mt-4 border-0" style="width: auto;">
                                           <img src="img/latest3.webp" class="card-img-top img-fluid" alt="...">
                                           <div class="card-body">
                                            <h5 class="card-title"><a href="" class="text-decoration-none text-black"><strong class="fs-4 text-red">Price - Tk . 210000</strong></a></h5>
                                          </div>
                                        </div>
                                   </div>
                                  </div>
                               </div>
                               <div class="col-md-3 col-6">
                                   <div class="card mt-4 border-0" style="width: auto;">
                                       <img src="img/latest4.webp" class="card-img-top img-fluid" alt="...">
                                       <div class="card-body">
                                        <h5 class="card-title"><a href="" class="text-decoration-none text-black"><strong class="fs-4 text-red">Price - Tk . 220000</strong></a></h5>
                                      </div>
                                   </div>
                               </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-electric" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                <div class="col-md-3 col-6">
                                   <div class="card mt-4 border-0" style="width: auto;">
                                       <img src="img/latest1.webp" class="card-img-top img-fluid" alt="...">
                                       <div class="card-body">
                                         <h5 class="card-title"><a href="" class="text-decoration-none text-black "><strong class="fs-4 text-red">Price - Tk . 190000</strong></a></h5>
                                       </div>
                                   </div>
                               </div>
                               <div class="col-md-3 col-6">
                                   <div class="card mt-4 border-0" style="width: auto;">
                                       <img src="img/latest2.webp" class="card-img-top img-fluid" alt="...">
                                       <div class="card-body">
                                        <h5 class="card-title"><a href="" class="text-decoration-none text-black"><strong class="fs-4 text-red">Price - Tk . 200000</strong></a></h5>
                                      </div>
                                   </div>
                               </div>
                               <div class="col-md-3 col-6">
                                  <div class="row">
                                   <div class="">
                                       <div class="card mt-4 border-0" style="width: auto;">
                                           <img src="img/latest3.webp" class="card-img-top img-fluid" alt="...">
                                           <div class="card-body">
                                            <h5 class="card-title"><a href="" class="text-decoration-none text-black"><strong class="fs-4 text-red">Price - Tk . 210000</strong></a></h5>
                                          </div>
                                        </div>
                                   </div>
                                  </div>
                               </div>
                               <div class="col-md-3 col-6">
                                   <div class="card mt-4 border-0" style="width: auto;">
                                       <img src="img/latest4.webp" class="card-img-top img-fluid" alt="...">
                                       <div class="card-body">
                                        <h5 class="card-title"><a href="" class="text-decoration-none text-black"><strong class="fs-4 text-red">Price - Tk . 220000</strong></a></h5>
                                      </div>
                                   </div>
                               </div>
                              </div>
                           </div>
                       </div>
                    </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</section>
<section class="vedios">
    <div class="mt-5">
       <div class="container bg-white">
           <div class="container">
               <div class="row">
                   <div class="col-12 mt-2">
                       <h1 class="my-4 fs-1"><strong>Vedios</strong></h1>
                       <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="border-0 card mt-4" style="width: 100%;">
                                <div class="embed-responsive over-hidden embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                  <h5 class=" card-title my-3">Yamaha MT 15 </h5>
                                  <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                  <a href="#" class="btn btn-light white-button border-1 w-100 text-uppercase">Play</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border-0 card mt-4" style="width: 100%;">
                                <div class="embed-responsive over-hidden embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                  <h5 class=" card-title my-3">Yamaha MT 15 </h5>
                                  <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                  <a href="#" class="btn btn-light white-button border-1 w-100 text-uppercase">Play</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="row">
                                <div class="">
                                    <div class="border-0 card mt-4" style="width: 100%;">
                                        <div class="embed-responsive over-hidden embed-responsive-16by9">
                                            <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                        <div class="card-body">
                                          <h5 class=" card-title my-3">Yamaha MT 15 </h5>
                                          <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                          <a href="#" class="btn btn-light white-button border-1 w-100 text-uppercase">Play</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="border-0 card mt-4" style="width: 100%;">
                                <div class="embed-responsive over-hidden embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="card-body">
                                  <h5 class=" card-title my-3">Yamaha MT 15 </h5>
                                  <p class="card-text mb-3">Tk. 4.5 - 4.7 Lakh*</p>
                                  <a href="#" class="btn btn-light white-button border-1 w-100 text-uppercase">Play</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</section>
<section class="reels">
    <div class="mt-5">
       <div class="container bg-white">
           <div class="container">
               <div class="row">
                   <div class="col-12 mt-2">
                       <h1 class="mt-4 mb-1 fs-1"><strong>Reels</strong></h1>
                       <div class="row">
                        <div class="col-md-3 col-6">
                            <div class="mt-4" style="width: 95%;">
                              <div class="mb-4 video">
                                <video src="vedios/vedio5.mp4" class="vdo" loop="1" preload="auto" muted=""  style="width: 100%; height: 100%;">
                                </video>
                                <div class="headline">
                                    <p>Bike kinon sera rate a.</p>
                                </div>
                                <div class="play-button text-center">
                                    <a class="my-video-links text-black" data-autoplay="true" data-vbtype="video" data-ratio="2x1" data-maxheight="200px" data-maxwidth="100px" href="vedios/vedio5.mp4"><i class="fas fa-play mt-2"></i></a>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="mt-4" style="width: 95%;">
                              <div class="mb-4 video">
                                <video src="vedios/vedio1.mp4" class="vdo" loop="1" preload="auto" muted=""  style="width: 100%; height: 100%;">
                                </video>
                                <div class="headline">
                                    <p>Bike kinon sera rate a.</p>
                                </div>
                                <div class="play-button text-center">
                                    <a class="my-video-links text-black" data-autoplay="true" data-vbtype="video" data-ratio="2x1" data-maxheight="200px" data-maxwidth="100px" href="vedios/vedio1.mp4"><i class="fas fa-play mt-2"></i></a>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="mt-4" style="width: 95%;">
                              <div class="mb-4 video">
                                <video src="vedios/vedio2.mp4" class="vdo" loop="1" preload="auto" muted=""  style="width: 100%; height: 100%;">
                                </video>
                                <div class="headline">
                                    <p>Bike kinon sera rate a.</p>
                                </div>
                                <div class="play-button text-center">
                                    <a class="my-video-links text-black" data-autoplay="true" data-vbtype="video" data-ratio="2x1" data-maxheight="200px" data-maxwidth="100px" href="vedios/vedio2.mp4"><i class="fas fa-play mt-2"></i></a>
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="mt-4" style="width: 95%;">
                              <div class="mb-4 video">
                                <video src="vedios/vedio4.mp4" class="vdo" loop="1" preload="auto" muted=""  style="width: 100%; height: 100%;">
                                </video>
                                <div class="headline">
                                    <p>Bike kinon sera rate a.</p>
                                </div>
                                <div class="play-button text-center">
                                    <a class="my-video-links text-black" data-autoplay="true" data-vbtype="video" data-ratio="2x1" data-maxheight="200px" data-maxwidth="100px" href="vedios/vedio4.mp4"><i class="fas fa-play mt-2"></i></a>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</section>
@endsection
