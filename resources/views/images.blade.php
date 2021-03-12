@extends('layout_main')
@section('title')
    Craftpitch  | images
@endsection
@section('content')

    <div class="container mt-5">
        <a href="{{route('gallery')}}"><< back to Gallery</a>
        <h2 class="titles mt-3" id="news">{{$data['cat_name']}} Images</h2>
        <div class="title-line-yellow"></div>
        <div class="row mt-3">
        <?php $duration = 500; ?>
            @foreach($data['data'] as $d)
                <div class="col-md-3 p-4" data-aos="zoom-out-left"
     data-aos-easing="ease-in-back"
     data-aos-delay="300" data-aos-duration="<?= $duration = $duration + 300; ?>">

                        <div class="row">
                            <a data-fancybox="gallery" title="{{$d->image}}" href="/gallery/{{$d->image}}">
                                <img src="/gallery/{{$d->image}}" alt="" class="img-fluid">
                            </a>
                        </div>


                </div>
            @endforeach

        </div>
    </div>


@endsection
