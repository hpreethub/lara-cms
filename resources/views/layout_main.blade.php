<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('keywords')">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="/css/styles.css">
    <title>@yield('title')</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 logo">
            <a href="{{url('/')}}"><img src="/img/Craftpitch-Logo.png" class="img-fluid my-2 " alt="Craftpitch "></a>
        </div>

        <div class="col-md-6 pt-2 d-none d-md-block">
            <div class="row ">
                <div class="col">
                    <div class="header-phone">Phone:</div>
                    <div>(604) 835-1704</div>
                </div>
                <div class="col">
                    <div class="header-phone">Email:</div>
                    <div>info@Craftpitchbuildingproducts.com</div>
                </div>
            </div>
            <div class="row  mt-2">
                <div class="col-md-12 justify-content-end d-flex">
                    <form class="form-inline" method="get" action="{{route('search')}}">
                        <label class="sr-only" for="inlineFormInputName2">search</label>
                        <input type="text" name="search" class="form-control form-control-sm " id="header-search"
                               style="width: 250px;" value="<?=isset($_GET['search'])?$_GET['search']:""?>">
                        <button type="submit" class="btn bg-mustard btn-sm ml-2">SEARCH</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('about')}}">ABOUT US</a>
                </li>

                <li class="nav-item dropdown {{ (request()->is('products*')) ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        PRODUCTS & SERVICES
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/products')}}">High Performance Insulated Glass</a>
                        <a class="dropdown-item" href="{{url('/products#tempered')}}">Tempered Glass</a>
                        <a class="dropdown-item" href="{{url('/products#spandrel')}}">SPANDREL</a>
                        <a class="dropdown-item" href="{{url('/products#shower')}}">SHOWER ENCLOSURES & SPECIALTY GLASS</a>
                        <a class="dropdown-item" href="{{url('/products#architectural')}}">Architectural Laminated</a>
                        <a class="dropdown-item" href="{{url('/products#heavy')}}">HEAVY GLASS/ALL GLASS ENTRANCES</a>
                        <a class="dropdown-item" href="{{url('/products#edgework')}}">Edgework Polishing</a>
                        <a class="dropdown-item" href="{{url('/products#residential')}}">Residential</a>
                        <a class="dropdown-item" href="{{url('/products#delivery')}}">Delivery</a>

                    </div>
                </li>
                <li class="nav-item {{ (request()->is('news')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{url('/news')}}">NEWS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('showcase')) ? 'active' : '' }} {{ (request()->is('images/*')) ? 'active' : '' }}" href="{{route('gallery')}}" >GALLERY</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{url('contact')}}" >CONTACT</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('login')}}">LOGIN</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<div class="footer-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-4 my-3">
                <div>
                    Phone: 123-123-1234
                </div>
                <div>
                    Fax: 
                </div>
                <div>
                    Email: info@craftpitch.com
                </div>
            </div>

            <div class="col-md-3 my-3">
                Contact Information <br>
                #2 123 2A St<br>
                
            </div>

            <div class="col-md-2 my-3">
                Follow us <br>
                <a href="" class="black-color"><i class="fab fa-2x fa-facebook-square "></i></a>
                <a href="" class="black-color"><i class="fab fa-2x fa-instagram-square"></i></a>
                <a href="" class="black-color"><i class="fab fa-2x fa-youtube-square"></i></a>
            </div>

            <div class="col-md-3 my-3">
                <div>Subscribe to our Newsletter</div>
                <form  class="form-inline" id="subscribe" method="post">
                    @csrf
                    <label class="sr-only" for="inlineFormInputName2">search</label>
                    <input type="email" name="email" class="form-control form-control-sm "  style="width: 150px;" required>
                    <button type="search" class="btn bg-black btn-sm ml-2">SUBMIT</button>
                </form>
            </div>

        </div>
    </div>
</div>
<footer class="footer">

    <ul>
        <li><a href="{{url('/privacy')}}">Privacy Policy</a></li>
        |
        <li><a href="">Terms and Conditions</a></li>
        |
        <li>All rights reserved &copy; Craftpitch </li>
    </ul>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@yield('scripts')
<script>
    $(function(){
        $(document).on('submit','#subscribe',function(event){
            event.preventDefault();

            var form_data = $(this).serialize(); //Encode form elements for submission

            $.ajax({
                url : "{{url('/subscribe')}}",
                type: "post",
                data : form_data
            }).done(function(response){ //
                $("#subscribe").html(response);
            });
        });

        $(document).on('submit','#contact',function(e){
            e.preventDefault();

            var form_data = $(this).serialize(); //Encode form elements for submission
            $.ajax({
                url : "{{url('/contact')}}",
                type: "post",
                data : form_data
            }).done(function(response){ //
                $("#contact").html(response);
            });
        });
    });
</script>
<script>
  AOS.init();
</script>
</body>
</html>
