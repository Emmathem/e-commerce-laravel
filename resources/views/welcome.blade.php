@extends('layouts.app')

@section('content')
    <section class = "landing">
        <div class = "overlay"></div>
        <div class="inner-landing">
            <div class="col-12">
                <div class="col-1">
                        <div class="content">
                            <h3>Highly Super Fast Laptop Increase your daily productivity </h3>
                            <div class = "advert">
                                <a href="" class="btn btn-get">See More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-2-1">
                        <div class="inner-col">
                            <img class="asset" src="{{ asset('images/macbook_pro.png') }}" alt="">
                        </div>
                    </div>
            </div>
            
        </div>
    </section>
@endsection

@section('feature')
    <section class = "feature">
        <div>
            Inner feature
        </div>
    </section>
@endsection
