@extends('layout_main')
@section('title')
    Craftpitch  | Gallery
@endsection
@section('content')

    <div class="container mt-5">
        <h2 class="titles mt-5" id="news">Gallery</h2>
        <div class="title-line-yellow"></div>
        <div class="row mt-3">
            <?php $duration = 500; ?>
                @foreach($data as $d)
                    <div class="col-md-3 p-4" data-aos="zoom-out-left"
     data-aos-easing="ease-in-back"
     data-aos-delay="300" data-aos-duration="<?= $duration = $duration + 400; ?>" >
                        <a href="{{route('view.images',$d->id)}}">
                            <div class="row">
                                <img src="/gallery/{{$d->image}}" alt="" class="img-fluid">
                            </div>
                            <div class="row">
                                <div class="col bg-primary font-weight-bold text-center p-2" style="color: #fff">{{$d->name}}</div>
                            </div>
                        </a>
                    </div>
                @endforeach

        </div>
</div>


@endsection
