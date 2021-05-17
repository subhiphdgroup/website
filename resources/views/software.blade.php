
@extends('master')

@section('title', 'PHD Software')

@section('style', 'PHD-Softwaer.css')

@section('content')


    @foreach($Software as $key => $value)
<section class="u-clearfix u-image u-section-1" id="carousel_cb56" style="background-image: url({{ Voyager::image( $value->image )}});">
    <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-align-center u-text u-text-body-alt-color u-text-1" data-animation-name="rubberBand" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">@if(isset($_GET['lan'])) {{ $value->title_ar }} @else {{ $value->title }} @endif</p>
        <div class="u-align-left u-container-style u-custom-color-1 u-group u-radius-10 u-shape-round u-group-1">
            <div class="u-container-layout u-container-layout-1">
                <p class="u-large-text u-text u-text-variant u-text-2" data-animation-name="slideIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="Down">@if(isset($_GET['lan']))  {{ $value->description_ar }} @else {{ $value->description }} @endif</p>
            </div>
        </div>
    </div>
</section>
    @endforeach



@endsection
