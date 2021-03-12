@extends('layout_main')
@section('title')
    Craftpitch 
@endsection
@section('content')

    <header class="">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('img/slides/slide1.jpg')">
                    <div class="caption animate__animated animate__fadeInUp">
                        Insulating Glass with Quality and Performance
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/slides/slide3.jpg')">
                    <div class="caption animate__animated animate__fadeInUp">
                        Insulating Glass with Quality and Performance
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('img/slides/slide2.jpg')">
                    <div class="caption animate__animated animate__fadeInUp">
                        Insulating Glass with Quality and Performance
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
    </header>


    <div class="container">
        <div class="text-center">
            <h2 class="h2-center mt-5">Products & Services </h2>
            <span class="h2-center-yellow"></span>
        </div>

        <div class="row ">
            <div class="col-md-3 mt-4">
                <div class="service-grid" data-aos="zoom-in-down">
                    <a href="{{url('/products#high')}}">
                    <img src="img/service1.jpg" alt="" class="img-fluid">
                    <div class="service-grid-text" >HIGH PERFORMANCE
                        INSULATING GLASS</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="service-grid" data-aos="zoom-in-down">
                    <a href="{{url('/products#tempered')}}">
                    <img src="img/temperedglass.jpg" alt="" class="img-fluid">
                    <div class="service-grid-text">TEMPERED GLASS</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="service-grid" data-aos="zoom-in-down">
                    <a href="{{url('/products#spandrel')}}">
                    <img src="img/spandrel.jpg" alt="" class="img-fluid">
                    <div class="service-grid-text">SPANDREL</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="service-grid" data-aos="zoom-in-down">
                    <a href="{{url('/products#shower')}}">
                    <img src="img/showerglass.jpg" alt="" class="img-fluid">
                    <div class="service-grid-text">SHOWER ENCLOSURES &
                        SPECIALTY GLASS</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="service-grid" data-aos="zoom-in-down">
                    <a href="{{url('/products#architectural')}}">
                    <img src="img/architectural.jpg" alt="" class="img-fluid">
                    <div class="service-grid-text">ARCHITECTURAL
                        LAMINATED</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="service-grid" data-aos="zoom-in-down">
                    <a href="{{url('/products#heavy')}}">
                    <img src="img/heavy.jpg" alt="" class="img-fluid">
                    <div class="service-grid-text">HEAVY GLASS / ALL GLASS
                        ENTRANCES</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="service-grid" data-aos="zoom-in-down">
                    <a href="{{url('/products#residential')}}">
                    <img src="img/residential.jpg" alt="" class="img-fluid">
                    <div class="service-grid-text">RESIDENTIAL</div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="service-grid" data-aos="zoom-in-down">
                    <a href="{{url('/products#delivery')}}">
                    <img src="img/delivery.jpg" alt="" class="img-fluid">
                    <div class="service-grid-text">DELIVERY SERVICES</div>
                    </a>
                </div>
            </div>

        </div>
    </div>
<!--
    <h2 class="certifications"> Certifications</h2>
    <div class="cetifiations-logo mb-3">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <img src="img/lam.png" alt="" class="img-fluid mt-3">
                </div>
                <div class="col-md-6">
                    <img src="img/fab.png" alt="" class="img-fluid mt-3">
                </div>
                <div class="col-md-6">
                    <img src="img/cer3.png" alt="" class="img-fluid mt-5">
                </div>
                <div class="col-md-6">
                    <img src="img/cer4.png" alt="" class="img-fluid mt-5">
                </div>
                <div class="col-md-12 mb-3">
                    <img src="img/cer2.png" alt="" class="img-fluid mt-5">
                </div>
            </div>
        </div>
    </div>
-->

    <div class="container mt-5" >

        <h2 class="titles mt-5" id="news">News</h2>
        <div class="title-line-yellow"></div>
        @if(isset($data)&&!empty($data))
        @foreach($data as $b)
            <div class="mt-5 mb-2" data-aos="fade-left"><strong>{{$b->name}}</strong></div>
            <div data-aos="fade-left">{{$b->meta_description}}</div>
            <a href="{{route('story',$b->id)}}" class="btn btn-secondary btn-sm float-right" data-aos="flip-left">Read More</a>
        @endforeach
        @else
            <h6>No latest News at this time. Please check back later.</h6>
        @endif


        <h2 class="titles mt-5">Resources</h2>
        <div class="title-line-yellow"></div>
        <div class="row ">
            <div class="col-md-4 col-6 mt-4">
                <div class="resources" data-aos="fade-up" data-aos-duration="1200">
                    <a href="{{url('/resources')}}" class="text-white">
                    <img src="img/icons/handshake-regular.svg" alt="" class="img-resources mustard">
                    <div class="mt-4">INDUSTRY PARTNERS</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-6 mt-4">
                <div class="resources" data-aos="fade-up" data-aos-duration="1200">
                    <a href="{{url('/resources#technical')}}" class="text-white">
                    <img src="img/icons/newspaper-regular.svg" alt="" class="img-resources mustard">
                    <div class="mt-4">TECHNICAL BULLETINS</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-6 mt-4">
                <div class="resources" data-aos="fade-up" data-aos-duration="1200">
                    <a href="{{url('/resources#quality')}}" class="text-white">
                    <img src="img/icons/top.svg" alt="" class="img-resources mustard">
                    <div class="mt-4">QUALITY ASSURANCE / CAPABILITIES</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-6 mt-4">
                <div class="resources" data-aos="fade-up" data-aos-duration="1200">
                    <a href="{{url('/resources#industry')}}" class="text-white">
                    <img src="img/icons/globe-americas-solid.svg" alt="" class="img-resources mustard">
                    <div class="mt-4">INDUSTRY NEWS AND INSIGHTS</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-6 mt-4">
                <div class="resources" data-aos="fade-up" data-aos-duration="1200">
                    <a href="{{url('/resources#green')}}" class="text-white">
                    <img src="img/icons/leaf-solid.svg" alt="" class="img-resources mustard">
                    <div class="mt-4">GREEN BUILDING AND LEED</div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-6 mt-4">
                <div class="resources" data-aos="fade-up" data-aos-duration="1200">
                    <a href="{{url('/resources#shapes')}}" class="text-white">
                    <img src="img/icons/shapes-solid.svg" alt="" class="img-resources mustard">
                    <div class="mt-4">SHAPES CATALOG</div>
                    </a>
                </div>
            </div>


        </div>
    </div>

@endsection
@section('scripts')
<script>
$('.carousel').carousel({
  interval: 7000
})
</script>

@endsection
