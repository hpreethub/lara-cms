@extends('layout_main')
@section('title')
    Craftpitch  | Contact Us
@endsection
@section('content')

    <div class="container mt-4">
        <div class="row mt-5 mb-5">
            <div class="col-12"><h1>Contact</h1></div>

        </div>


        <div class="container animated fadeIn" data-aos="fade-left" data-aos-duration="1200">

            <div class="row mt-2 mb-5">
                <div class="col-md-4">

                    <p> Address:<br>
                    
                        </p>
                    <p>
                        Phone:
                        
                    </p>






                </div>
                <div class="col-md-8">
                    <div class="spacer-80"></div>
                    <form action="" class="contact-form" id="contact" method="post" data-aos="fade-up" data-aos-duration="1200">
@csrf
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="" autofocus="">
                        </div>


                        <div class="form-group form_left">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required="">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control textarea-contact" rows="5" id="comment" name="message" placeholder="Type Your Message here..." required=""></textarea>
                            <br><br>

                            <br>
                            <button class="btn bg-mustard btn-send"> <span class="glyphicon glyphicon-send"></span> Submit </button>
                        </div>
                    </form>
                </div>
            </div>



        </div>


    </div>

@endsection

@section('scripts')

@endsection