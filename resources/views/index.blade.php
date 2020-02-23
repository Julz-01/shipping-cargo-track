@extends('layouts.main')

@section('content')
<header>
  <div id="fixed-header-dark" class="header-output fixed-header">
    <div class="header-output">
      <div class="container header-in">

        <!-- Up Head -->
        <div class="up-head d-none d-lg-block">
          <div class="row">
            <div class="col-xl-10 col-lg-12">
              <div class="row">
                <div class="col-md-2"><i class="fa fa-phone margin-right-10px"></i> 7146902</div>
                <div class="col-md-3"><i class="fa fa-envelope-o margin-right-10px"></i> info@your-site.com</div>
                <div class="col-md-7"><i class="fa fa-map-marker margin-right-10px"></i> 3F TMI Centre Building, Arzobispo St, Intramuros, Manila, 1002 Metro Manila</div>
              </div>
            </div>
            <div class="col-xl-2 d-none d-xl-block">
              <div class="row">
                <div class="col-lg-8">
                  <div class="dropdown show">
                    <a class="dropdown-toggle text-white text-uppercase" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="flag-icon flag-icon-us margin-right-8px"></span> English
                    </a>

                    <div class="dropdown-menu text-small text-uppercase" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="{{url('/changelocale')}}"><span class="flag-icon flag-icon-es margin-right-8px"></span> Chinese</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <!--  Social -->
                  <ul class="social-media list-inline text-right margin-0px text-white">
                    <li class="list-inline-item"><a class="facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  </ul>
                  <!-- // Social -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- // Up Head -->

        <div class="position-relative">
          <div class="row">
            <div class="col-lg-3 col-md-12">
              <a id="logo" href="#" class="d-inline-block margin-tb-15px"><img src="{{ asset('img/mopi.png') }}" alt="" style="width: 80%;"></a>
              <a class="mobile-toggle padding-15px background-second-color border-radius-3" href="#"><i class="fa fa-bars"></i></a>
            </div>
            <div class="col-lg-7 col-md-12 position-inherit">
              <ul id="menu-main" class="nav-menu float-xl-left text-lg-center link-padding-tb-25px white-link dropdown-dark">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#about">About</a>
                </li>
                <li><a href="#service">Gallery</a>
                </li>
                <li><a href="#team">Downloads</a>
                </li>
                <li><a href="#contact">Contact Us</a>
                </li>

              </ul>

            </div>
            <div class="col-lg-2 col-md-12  d-none d-lg-block">
              <a data-toggle="modal" data-target=".bd-example-modal-lg" href="#" class="btn btn-sm border-radius-30 margin-tb-20px text-white  background-main-color  box-shadow float-right padding-lr-20px margin-left-30px d-block">
                <i class="fa fa-search margin-right-10px"></i>  Track your cargo
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- // Header  -->




<!-- Get A Quote  -->
<div class="modal contact-modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content margin-top-150px background-main-color-3">
      <div class="row no-gutters">
        <div class="col-lg-5">
          <img src="{{ asset('img/img-03.jpg') }}" alt="">
        </div>
        <div class="col-lg-7">
          <div class="padding-30px">
            <h3 class="padding-bottom-15px">Track your Cargo</h3>
            <form action = "{{url('/tracker')}}" method="POST" id="submit_form">
              @csrf
              <div class="form-group">
                <label>BL Number</label>
                <input type="text" name="bl_no" class="form-control" id="inputAddress" placeholder="Ex. 12345">
              </div>
              <button type="submit" onclick="form_submit()"class="btn-sm btn-lg btn-block background-dark text-white text-center text-uppercase rounded-0 padding-15px">Track It</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- // Get A Quote  -->

<div id="rev_slider_3_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nile-logistics-1" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
  <!-- START REVOLUTION SLIDER 5.4.8 fullwidth mode -->
  <div id="rev_slider_3_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.8">
    <ul>
      <!-- SLIDE  -->
      <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
        <!-- MAIN IMAGE -->
        <img src="{{ asset('img/02.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
        <!-- LAYERS -->

        <!-- LAYER NR. 1 -->
        <div class="tp-caption   tp-resizeme" id="slide-3-layer-1" data-x="['left','left','left','center']" data-hoffset="['0','41','45','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-111','-143','-186','-36']" data-width="461" data-height="173" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px; max-width: 173px; white-space: nowrap; font-size: 50px; line-height: 59px; font-weight: 400; color: #ffffff; letter-spacing: -4px;font-family:Poppins;">Delivering<br> Goods
          <br> Around the World </div>

          <!-- LAYER NR. 2 -->
          <div class="tp-caption rev-btn " id="slide-3-layer-2" data-x="['left','left','left','center']" data-hoffset="['0','41','45','0']" data-y="['top','top','top','top']" data-voffset="['453','372','435','471']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":640,"speed":1120,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:transparent;bc:rgb(255,255,255);"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 6; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Poppins;background-color:rgb(229,57,53);border-color:rgb(229,57,53);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="#contact" class="text-white">Contact Us</a> </div>
        </li>
        <!-- SLIDE  -->
        <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="{{ asset('img/08.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->

          <!-- LAYER NR. 3 -->
          <div class="tp-caption   tp-resizeme" id="slide-4-layer-1" data-x="['left','left','left','center']" data-hoffset="['0','41','45','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-111','-143','-186','-36']" data-width="461" data-height="173" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"delay":10,"speed":1140,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' data-textAlign="['inherit','inherit','inherit','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5; min-width: 461px; max-width: 461px; max-width: 173px; max-width: 173px; white-space: nowrap; font-size: 50px; line-height: 59px; font-weight: 400; color: #ffffff; letter-spacing: -4px;font-family:Poppins;">View<br> Vessel
            <br> Schedule </div>

            <!-- LAYER NR. 4 -->
            <div class="tp-caption rev-btn " id="slide-4-layer-2" data-x="['left','left','left','center']" data-hoffset="['0','41','45','0']" data-y="['top','top','top','top']" data-voffset="['453','372','435','471']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off" data-frames='[{"delay":640,"speed":1120,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:transparent;bc:rgb(255,255,255);"}]' data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[12,12,12,12]" data-paddingright="[35,35,35,35]" data-paddingbottom="[12,12,12,12]" data-paddingleft="[35,35,35,35]" style="z-index: 6; white-space: nowrap; font-size: 14px; line-height: 17px; font-weight: 500; color: rgba(255,255,255,1); letter-spacing: 0px;font-family:Poppins;background-color:rgb(229,57,53);border-color:rgb(229,57,53);border-style:solid;border-width:2px 2px 2px 2px;border-radius:30px 30px 30px 30px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;"><a href="{{ url('/vessel') }}" class="text-white">View</a></div>
          </li>
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
      </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <div class="service-section-1 container">
      <div class="row">
        <div class="col-md-4">
          <div class="service layout-1">
            <div class="clearfix">
              <div class="icon"><img src="{{ asset('img/icons/service-light-1.png') }}" alt=""></div>
              <a href="#" class="title">Road Freight</a>
            </div>
            <div class="dis clearfix">
              Chances are unless you are very lucky you will.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service layout-1">
            <div class="clearfix">
              <div class="icon"><img src="{{ asset('img/icons/service-light-2.png') }}" alt=""></div>
              <a href="#" class="title">Air Freight</a>
            </div>
            <div class="dis clearfix">
              Chances are unless you are very lucky you will.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service layout-1">
            <div class="clearfix">
              <div class="icon"><img src="{{ asset('img/icons/service-light-3.png') }}" alt=""></div>
              <a href="#" class="title">Ocean Freight</a>
            </div>
            <div class="dis clearfix">
              Chances are unless you are very lucky you will.
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--============= About Us =============-->
    <div class="nile-about-section" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">

            <div class="section-title-right text-main-color clearfix">
              <div class="icon"><img src="{{ asset('img/icons/title-icon-1.png') }}" alt=""></div>
              <h2 class="title-text">Who We Are</h2>
            </div>
            <div class="about-text margin-tb-25px text-justify">
              <p>MACRO OCEAN PHIL., INC helps deliver goods to people around the world, enriching their lives. We do this by safely managing a world class fleet
                of ships, providing the highest levels of service to our principals and clients.</p>
                <p>We offer a unique mix of experience and fresh energy - and combine these two elements to form a streamlined operation in which both our people and hardware are highly tuned to client needs.
                  Through our technical, operational and commercial excellence, we can always be relied upon to deliver. Quite simply, we are always there when people need us.</p>
                </div>
              </div>
              <div class="col-lg-6">

                <div class="row">
                  <div class="col-sm-6">
                    <a href="#"><img src="{{ asset('img/img-04.jpg') }}" alt="" class="img-fluid"></a>
                  </div>
                  <div class="col-sm-6">
                    <div class="cart-service background-main-color">
                      <i class="fa fa-paper-plane"></i>
                      <h2>Our Mission</h2>
                      <hr>
                      <div class="text">Delivering goods around the world.</div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="cart-service background-main-color">
                      <i class="fa fa-star"></i>
                      <h2>Our Vision</h2>
                      <hr>
                      <div class="text">We want to establish the very highest standards for products and service, and strive for perfection in both.</div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <a href="#"><img src="{{ asset('img/img-05.jpg') }}" alt=""></a>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!--============= //About Us =============-->



        <div class="call-action ba-1" id="clients">
          <div class="container">
            <div class="row">
              <div class="col-lg-7 padding-tb-15px">
                <h2>Unbeatable Shipping Services</h2>
                <div class="text">We promise to manage our principal's ships with maximum regard for safety, technical and operational efficiency, in order to bring commercial success.</div>
              </div>
              <div class="col-lg-5">
                <div class="row">
                  <div class="col-lg-4 col-md-4 sm-mb-45px">
                    <img src="{{ asset('img/mcl-logo.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="section padding-tb-100px section-ba-1" id="service">
          <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
              <div class="row justify-content-center">
                <div class="col-lg-7">
                  <div class="icon text-main-color"><i class="fa fa-image"></i></div>
                  <div class="h2 mt-2">Gallery</div>
                  <!-- <div class="des">In quis luctus dolor. Sed ac libero arcu. Phasellus vulputate ultrices augue, eget feugiat lectus efficitur in. Nulla non pharetra justo. Nunc viverra consectetur bibendum. </div> -->
                </div>
              </div>
            </div>
            <!-- // End Title -->

            <div class="row">

              <div class="col-lg-4 col-md-6 sm-mb-35px">
                <div class="blog-item">
                  <div class="img">
                    <a href="#"><img src="img/blog-grid-1.jpg" alt=""></a>
                    <a href="#" class="date">
                      <span class="day">15</span>
                      <span class="month">April</span>
                    </a>
                  </div>
                  <a href="#" class="title">Long Don’t Spend Time Beating On A Wall, Hoping To Trans ...</a>
                </div>
              </div>


              <div class="col-lg-4 col-md-6 sm-mb-35px">
                <div class="blog-item">
                  <div class="img">
                    <a href="#"><img src="img/blog-grid-2.jpg" alt=""></a>
                    <a href="#" class="date">
                      <span class="day">15</span>
                      <span class="month">April</span>
                    </a>
                  </div>
                  <a href="#" class="title">Long Don’t Spend Time Beating On A Wall, Hoping To Trans ...</a>
                </div>
              </div>


              <div class="col-lg-4 col-md-6 sm-mb-35px">
                <div class="blog-item">
                  <div class="img">
                    <a href="#"><img src="img/blog-grid-3.jpg" alt=""></a>
                    <a href="#" class="date">
                      <span class="day">15</span>
                      <span class="month">April</span>
                    </a>
                  </div>
                  <a href="#" class="title">Long Don’t Spend Time Beating On A Wall, Hoping To Trans ...</a>
                </div>
              </div>

            </div>

          </div>
        </div>

        <!--  page output -->
        <div class="nile-about-section" id="team">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
              <div class="row justify-content-center">
                <div class="col-lg-7">
                  <div class="icon text-main-color"><i class="fa fa-ship"></i></div>
                  <div class="h2 mt-2">Vessel Updates</div>
                </div>
              </div>
            </div>
            <!-- // End Title -->



            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">
                  <table class="table table-bordered">
                    <thead>
                      <th>BL Number</th>
                      <th>Container</th>
                      <th>Consignee</th>
                      <th>Port</th>
                      <th>Discharge</th>
                    </thead>

                    <tbody>
                      @foreach($update as $up)
                      <tr>
                        <td>{{ $up->blnumber }}</td>
                        <td>{{ $up->container }}</td>
                        <td>{{ $up->consignee }}</td>
                        <td>{{ $up->port }}</td>
                        <td>{{ $up->discharge }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

            </div>

            <div class="text-center">
              <a href="{{ url('/vesselupdates') }}" class="nile-bottom md">Show all <i class="fa fa-arrow-right"></i> </a>
            </div>

          </div>
        </div>
      </div>
      </div>

      <!--  page output -->
      <div class="section padding-tb-100px section-ba-1" id="team">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
          <!-- Title -->
          <div class="section-title margin-bottom-40px">
            <div class="row justify-content-center">
              <div class="col-lg-7">
                <div class="icon text-main-color"><i class="fa fa-ship"></i></div>
                <div class="h2 mt-2">Vessel Shedule</div>
              </div>
            </div>
          </div>
          <!-- // End Title -->

          <div class="row">
            <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <th>Vessel</th>
                    <th>Voy</th>
                    <th>Shihu</th>
                    <th>Weitou</th>
                    <th>Xiamen</th>
                    <th>North</th>
                    <th>South</th>
                  </thead>

                  <tbody>
                    @foreach($sched as $sc)
                    <tr>
                      <td>{{ $sc->vessel }}</td>
                      <td>{{ $sc->voy }}</td>
                      <td>{{ $sc->shihu }}</td>
                      <td>{{ $sc->weitou }}</td>
                      <td>{{ $sc->xiamen }}</td>
                      <td>{{ $sc->north }}</td>
                      <td>{{ $sc->south }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>

          </div>

          <div class="text-center">
            <a href="{{ url('/vessel') }}" class="nile-bottom md">Show all <i class="fa fa-arrow-right"></i> </a>
          </div>
        </div>
      </div>
    </div>
    </div>

  <script type="text/javascript">
  function form_submit() {
    document.getElementById("submit_form").submit();
   }
  </script>

@include('layouts.footer')

@endsection
