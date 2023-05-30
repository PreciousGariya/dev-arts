@extends('frontend.layouts.app')
@push('after-styles')
<link href="{{asset('front_end/css/responsive_bootstrap_carousel.css')}}" rel="stylesheet" media="all">
@endpush

@section('title') {{app_name()}} @endsection

@section('content')

@if($slider)
@include('frontend.section.home.slider')
@endif

<!--=========Banner bottom Start============-->
<div class="banner-bottom-boxes index5-boxes">
   <ul>
      <li class="first-box">
         <span class="icons"><img src="/front_end/images/delivery-icon1.png" alt="delivery-icon"></span>
         <h4>Punctual Delivery Time</h4>
         <p>99% Delivered On Time</p>
      </li>
      <li class="second-box">
         <span class="icons"><img src="/front_end/images/technology-icon1.png" alt="technology-icon"></span>
         <h4>High Technology Factory</h4>
         <p>&amp; Environment Friednly</p>
      </li>
      <li class="third-box">
         <span class="icons"><img src="/front_end/images/standard-labor-icon.png" alt="labor-icon"></span>
         <h4>High Standard Labors</h4>
         <p>99% QC Passed</p>
      </li>
   </ul>
</div>
<!--=========Banner bottom end============-->
<!--=========Wordpress Bestthing Start============-->
<section class="home2 home4 home5 bestthing-section text-center">
   <div class="container">
      <div class="bestthing-text-column">
         <!--removed class= home4-bestthing-t -->
         <h2>Elevate Your Decor with Unique Metal Art from
            <span> Dev Arts </span>
         </h2>
         <p class="fnt-17">
            At Dev Arts, we are passionate about creating unique and captivating metal art that speaks volumes about your style and personality. 
            Our metalwork collection is a testament to our commitment to excellence, featuring a range of one-of-a-kind pieces that are sure to impress. 
            From sleek metal labels to intricate metal alphabets, we have it all. Discover the beauty of metal with Dev Arts, and take your decor to the next level like a pro.
         </p>
      </div>
      <div class="static-section home3-static home4-static-section home5-static-section home5-static-section_01">
         <ul>
            <li>
               <h2>300</h2>
               <p> Certified Engineers</p>
            </li>
            <li>
               <h2>1800</h2>
               <p> Worldwide Clients</p>
            </li>
            <li>
               <h2>69</h2>
               <p> Quality Award Winner</p>
            </li>
            <li>
               <h2>150</h2>
               <p> Total Project Running</p>
            </li>
         </ul>
      </div>
   </div>
</section>
<!--=========Wordpress Bestthing end============-->
<!--=========Recent Project Start============-->
<section class="home2 recent-project-section projectsec2">
   <div class="container">
      <h3 class="white-color">Our Projects</h3>
      <ul class="nav nav-tabs" role="tablist">
         <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">All Projects</a></li>
         <li role="presentation"><a href="#eco" aria-controls="eco" role="tab" data-toggle="tab">Eco</a></li>
         <li role="presentation"><a href="#manufacturing" aria-controls="manufacturing" role="tab" data-toggle="tab">Manufacturing</a></li>
         <li role="presentation"><a href="#industry" aria-controls="industry" role="tab" data-toggle="tab">Industry</a></li>
         <li role="presentation"><a href="#oil" aria-controls="oil" role="tab" data-toggle="tab">Oil</a></li>
         <li role="presentation"><a href="#gas" aria-controls="gas" role="tab" data-toggle="tab">Gas</a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
         <div role="tabpanel" class="tab-pane active" id="all">
            <div class="full_wrapper carousel slide three_shows_one_move home2-project" id="our_project" data-ride="carousel">
               <div class="controls"> <a class="left fa fa-angle-left next_prve_control" href="#our_project" data-slide="prev"></a><a class="right fa fa-angle-right next_prve_control" href="#our_project" data-slide="next"></a> </div>
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <div class="item active">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="petro-chemicals.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-petrochemical-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>PETRO CHEMICALS</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="electronical.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-electronic-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>ELECTRONIC PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="factory-farm.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-farm-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>FACTORY FARM</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="gas-pipeline.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-gaspipeline-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>GAS & PIPELINE</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="oil-plant.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-oilplant-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>OIL PLANT PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="petro-chemicals.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-petrochemical-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>PETRO CHEMICALS</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div role="tabpanel" class="tab-pane" id="eco">
            <div class="full_wrapper carousel slide three_shows_one_move home2-project" id="our_project1" data-ride="carousel">
               <div class="controls"> <a class="left fa fa-angle-left next_prve_control" href="#our_project1" data-slide="prev"></a><a class="right fa fa-angle-right next_prve_control" href="#our_project1" data-slide="next"></a> </div>
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <div class="item active">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="agriculture.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/eco-project-image1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>AGRICULTURE</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="factory-farm.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/eco-project-image2.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>FACTORY FARM</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="oil-plant.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/eco-project-image3.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>OIL PLANT PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="oil-plant.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/eco-project-image4.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>OIL PLANT PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div role="tabpanel" class="tab-pane" id="manufacturing">
            <div class="full_wrapper carousel slide three_shows_one_move home2-project" id="our_project2" data-ride="carousel">
               <div class="controls"> <a class="left fa fa-angle-left next_prve_control" href="#our_project2" data-slide="prev"></a><a class="right fa fa-angle-right next_prve_control" href="#our_project2" data-slide="next"></a> </div>
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <div class="item active">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="agriculture.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/manufacturing-project-image1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>AGRICULTURE</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="electronical.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/manufacturing-project-image2.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>ELECTRONIC PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="factory-farm.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/manufacturing-project-image3.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>FACTORY FARM</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="gas-pipeline.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/manufacturing-project-image4.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>GAS & PIPELINE</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div role="tabpanel" class="tab-pane" id="industry">
            <div class="full_wrapper carousel slide three_shows_one_move home2-project" id="our_project3" data-ride="carousel">
               <div class="controls"> <a class="left fa fa-angle-left next_prve_control" href="#our_project3" data-slide="prev"></a><a class="right fa fa-angle-right next_prve_control" href="#our_project3" data-slide="next"></a> </div>
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <div class="item active">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="agriculture.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-agriculture-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>AGRICULTURE</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="electronical.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-electronic-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>ELECTRONIC PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="factory-farm.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-farm-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>FACTORY FARM</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero ">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="gas-pipeline.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-gaspipeline-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>GAS & PIPELINE</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="oil-plant.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-oilplant-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>OIL PLANT PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="petro-chemicals.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-petrochemical-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>PETRO CHEMICALS</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div role="tabpanel" class="tab-pane" id="oil">
            <div class="full_wrapper carousel slide three_shows_one_move home2-project" id="our_project4" data-ride="carousel">
               <div class="controls"> <a class="left fa fa-angle-left next_prve_control" href="#our_project4" data-slide="prev"></a><a class="right fa fa-angle-right next_prve_control" href="#our_project4" data-slide="next"></a> </div>
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <div class="item active">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="agriculture.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/oil-project-image1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>AGRICULTURE</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="electronical.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/oil-project-image2.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>ELECTRONIC PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="factory-farm.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/oil-project-image3.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>FACTORY FARM</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="gas-pipeline.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/oil-project-image4.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>FACTORY FARM</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div role="tabpanel" class="tab-pane" id="gas">
            <div class="full_wrapper carousel slide three_shows_one_move home2-project" id="our_project5" data-ride="carousel">
               <div class="controls"> <a class="left fa fa-angle-left next_prve_control" href="#our_project5" data-slide="prev"></a><a class="right fa fa-angle-right next_prve_control" href="#our_project5" data-slide="next"></a> </div>
               <!-- Wrapper for slides -->
               <div class="carousel-inner">
                  <div class="item active">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="electronical.html">
                                    <img class="img-full img-responsive" src="front_end/images/home1-images/home1-electronic-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>ELECTRONIC PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="factory-farm.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-farm-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>FACTORY FARM</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="oil-plant.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-oilplant-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>OIL PLANT PROJECT</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 img pad_zero">
                        <div class="grid">
                           <div class="image-zoom-on-hover">
                              <div class="gal-item">
                                 <a class="black-hover" href="petro-chemicals.html">
                                    <img class="img-full img-responsive" src="/front_end/images/home1-images/home1-petrochemical-project1.jpg" alt="Project1">
                                    <div class="tour-layer delay-1"></div>
                                    <div class="vertical-align">
                                       <div class="border">
                                          <h5>PETRO CHEMICALS</h5>
                                       </div>
                                       <div class="view-all hvr-bounce-to-right slide_learn_btn view_project_btn"><span>View Project</span></div>
                                    </div>
                                 </a>
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
<!--=========Recent Project end============-->
<!--=========Who Section Start============-->
<section class="pad100-95-top-bottom who_we_01">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
            <span class="image_hover img">
               <img src="/front_end/images/whoweare-img.jpg" class="img-responsive zoom_img_effect" alt="about-image">
            </span>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 martop30">
            <h3>who are we?</h3>
            <p class="fnt-17"> 
            At Dev Arts, we are passionate about metal works and its endless possibilities. 
            From intricate designs to industrial strength pieces, we offer a wide range of metal options to suit your every need. 
            Our team will work closely with you to bring your vision to life, 
            whether it's through a custom-made metal label or a statement wall art piece.
            </p>
            <a data-animation="animated fadeInUp" class="header-requestbtn more-infobtn hvr-bounce-to-right" href="#">more info</a>
         </div>
      </div>
   </div>
</section>
<!--=========Who Section end============-->
<!--=========Our Services Start============-->
<section>
   <h3 class="text-center">our services</h3>
   <div class="row row_mar_zero">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home5-service1">
         <a href="manufacturing.html">
            <h4>MANUFACTURING</h4>
            <p class="fnt-17">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
            <span class="read-more-link">Read More</span>
         </a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home5-service1 home5-service2">
         <a href="cnc-industry.html">
            <h4>CNC INDUSTRY</h4>
            <p class="fnt-17">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
            <span class="read-more-link">Read More</span>
         </a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home5-service1 home5-service3">
         <a href="chemical-industry.html">
            <h4>CHEMICAL INDUSTRY</h4>
            <p class="fnt-17">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
            <span class="read-more-link">Read More</span>
         </a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home5-service1 home5-service4">
         <a href="energy-engineering.html">
            <h4>ENERGY ENGINEERING</h4>
            <p class="fnt-17">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
            <span class="read-more-link">Read More</span>
         </a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home5-service1 home5-service5">
         <a href="oil-industry.html">
            <h4>OIL INDUSTRY</h4>
            <p class="fnt-17">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
            <span class="read-more-link">Read More</span>
         </a>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 home5-service1 home5-service6">
         <a href="material-engineering.html">
            <h4>MATERIAL ENGINEERING</h4>
            <p class="fnt-17">Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. </p>
            <span class="read-more-link">Read More</span>
         </a>
      </div>
   </div>
</section>
<!--=========Our Services end============-->
<!--=========High Quality Start============-->
<section class="hight-level-section">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-center">
            <h2>In <span>quality assurance a constant effort </span> is made to enhance the quality practices in the organization.</h2>
         </div>
         <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12">
            <p class="fnt-17">At Dev Arts, we understand the impact of a well-crafted metal alphabet. Our custom designs allow you to showcase your brand in a unique and elegant way. Trust us to bring your vision to life with precision and quality that exceeds expectations.</p>
         </div>
         <div class="col-lg-6 col-md-6 col-xs-12 col-xs-12 text-center">
            <ul class="icon_size">
               <li class="vision-icon"><i class="fa fa-eye"></i>Vision</li>
               <li class="value-icon"><i class="fa fa-line-chart"></i>Values</li>
               <li class="mission-icon"><i class="fa fa-rocket"></i> Mission</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!--=========High Quality end============-->
<section class="pad95-100-top-bottom faq_04 faq_05">
   <div class="container">
      <div class="row">
         <!--=========Faq Left Column Start============-->
         <!--=========Faq Left Column end============-->
         <!--=========Faq Right Column Start============-->
         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3 class="marbtm30">About us</h3>
            <p class="fnt-17">We're Dev Arts, experts in creating stunning metal labels, art, and Alphabets that make a bold statement. Our passion for craftsmanship and attention to detail is what sets us apart. Whether you're a business looking to showcase your brand or an individual looking to elevate your decor, we've got you covered.</p>
            <p class="fnt-17 extraspace">As innovators in the metal industry, we at Dev Arts take pride in our unparalleled craftsmanship and attention to detail. We bring your metal art visions to life through our expertise in metalworking, from custom metal labels to functional and stunning metal alphabets. With Dev Arts, you can expect a high-quality end product that exceeds your expectations.</p>
            <div class="row">
               <div class="col-md-6">
                  <ul>
                     <li><i class="fa fa-angle-double-right"></i> Our Work Growth</li>
                     <li><i class="fa fa-angle-double-right"></i> 1500 Employed</li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <ul>
                     <li><i class="fa fa-angle-double-right"></i> Our Employee Growth</li>
                     <li><i class="fa fa-angle-double-right"></i> Service Management</li>
                  </ul>
               </div>
            </div>
            <a data-animation="animated fadeInUp" class="header-requestbtn more-infobtn hvr-bounce-to-right" href="about.html">more info</a>
         </div>
         <!--=========Faq Right Column end============-->
         <div class="col-md-6 col-sm-12 col-xs-12 faq-mobile-margin">
            <h3 class="marbtm30">Frequently Asked Questions?</h3>
            <div class="accordion-first accordion-second clearfix acord_mar_non">
               <div class="accordion" id="accordion2">
                  <div class="accordion-group">
                     <div class="accordion-heading"> <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> <em class="icon-fixed-width fa fa-plus"></em>What is metal art?</a> </div>
                     <div id="collapseOne" class="accordion-body collapse in">
                        <div class="accordion-inner">
                           <p>Metal art is a form of art that involves shaping and manipulating metal into different forms and shapes for decorative purposes. </p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-group">
                     <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> <em class="icon-fixed-width fa fa-plus"></em>What are metal labels used for?</a> </div>
                     <div id="collapseTwo" class="accordion-body collapse">
                        <div class="accordion-inner">
                           <p>Metal labels are used for branding and identification purposes. They can be used on products, machinery, or equipment.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-group">
                     <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"> <em class="icon-fixed-width fa fa-plus"></em>What are metal alphabets?</a> </div>
                     <div id="collapseThree" class="accordion-body collapse">
                        <div class="accordion-inner">
                           <p> Metal alphabets are letters made of metal that can be used as decorative pieces or for signage purposes.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-group">
                     <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour"> <em class="icon-fixed-width fa fa-plus"></em>How is metal art created? </a> </div>
                     <div id="collapseFour" class="accordion-body collapse">
                        <div class="accordion-inner">
                           <p> Metal art can be created through various techniques such as welding, casting, forging, and cutting.</p>
                        </div>
                     </div>
                  </div>
                  <div class="accordion-group">
                     <div class="accordion-heading"> <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapseSix"> <em class="icon-fixed-width fa fa-plus"></em>What type of metals are used in metal works and art forms? </a> </div>
                     <div id="collapseSix" class="accordion-body collapse">
                        <div class="accordion-inner">
                           <p> Various types of metals can be used in metal works and art forms including steel, aluminum, copper, brass, and bronze.</p>
                        </div>
                     </div>
                  </div>

               </div>
               <!-- end accordion -->
            </div>
         </div>
      </div>
   </div>
</section>
<!--=========Testimonial Start============-->
<section class="testimonial-section">
   <div class="testimonial-rght-head">
      <h2>Testimonial</h2>
   </div>
   <div class="container">
      <div class="col-lg-6 col-md-6 testimonial-left-sidebar">
         <div id="minimal-bootstrap-carousel1" class="home1 carousel slide carousel-horizontal shop-slider full_width testimonial-slider" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <div class="item active slide-1">
                  <div class="testimonial-head">
                     <span class="testi-img"><img src="/front_end/images/testi-client-img1.png" class="img-responsive img-circle" alt="testimonial-image"></span>
                     <div class="testi-text">
                        <h5>Edward Brown</h5>
                        <span class="testi-designation">Designation</span>
                     </div>
                  </div>
                  <p>" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                     Consect petur adipiscing elit. "
                  </p>
               </div>
               <div class="item slide-2">
                  <div class="testimonial-head">
                     <span class="testi-img"><img src="/front_end/images/testi-client-img2.jpg" class="img-responsive img-circle" alt="testimonial-image"></span>
                     <div class="testi-text">
                        <h5>Adam Carl</h5>
                        <span class="testi-designation">Designation</span>
                     </div>
                  </div>
                  <p>" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                     Consect petur adipiscing elit. "
                  </p>
               </div>
               <div class="item slide-3">
                  <div class="testimonial-head">
                     <span class="testi-img"><img src="/front_end/images/testi-client-img3.jpg" class="img-responsive img-circle" alt="testimonial-image"></span>
                     <div class="testi-text">
                        <h5>Nathan Gibson</h5>
                        <span class="testi-designation">Designation</span>
                     </div>
                  </div>
                  <p>" Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                     Consect petur adipiscing elit. "
                  </p>
               </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#minimal-bootstrap-carousel1" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i> <span class="sr-only">Previous</span> </a> <a class="right carousel-control" href="#minimal-bootstrap-carousel1" role="button" data-slide="next"> <i class="fa fa-angle-right"></i> <span class="sr-only">Next</span> </a>
         </div>
      </div>
   </div>
</section>
<!--=========Testimonial end============-->
<!--=========Our Client Start============-->
<div class="pad100-70-top-bottom client_hover_1">
   <div class="container">
      <div class="row">
         <div class="client_hover">
            <div class="col-md-2 col-sm-4 col-xs-6">
               <span class="client_img image_hover"> <img src="/front_end/images/client-logo1.jpg" class="img-responsive zoom_img_effect" alt=""> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
               <span class="client_img image_hover"> <img src="/front_end/images/client-logo2.jpg" class="img-responsive zoom_img_effect" alt=""> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
               <span class="client_img image_hover"> <img src="/front_end/images/client-logo3.jpg" class="img-responsive zoom_img_effect" alt=""> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
               <span class="client_img image_hover"> <img src="/front_end/images/client-logo4.jpg" class="img-responsive zoom_img_effect" alt=""> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
               <span class="client_img image_hover"> <img src="/front_end/images/client-logo5.jpg" class="img-responsive zoom_img_effect" alt=""> </span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6">
               <span class="client_img image_hover"> <img src="/front_end/images/client-logo6.jpg" class="img-responsive zoom_img_effect" alt=""> </span>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection


@push('after-scripts')
<script src="{{asset('front_end/js/responsive_bootstrap_carousel.js')}}"></script>
<script src="{{asset('front_end/js/slick.js')}}"></script>
@endpush