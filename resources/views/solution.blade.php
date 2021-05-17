@extends('master')

@section('title', 'PHD Solution')

@section('style', 'PHD-Solution.css')

@section('content')



    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" data-image-width="1280" data-image-height="853" id="sec-a659">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-palette-3-base u-title u-text-1">PHD SOLUTION</h1>
    </div>
</section>
<section class="u-clearfix u-color-scheme-u10 u-color-style-multicolor-1 u-section-2" id="sec-d849" style="">


    @foreach($Solution as $key => $value)
    <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1" @if(isset($_GET['lan'])) style="direction: rtl" @endif>
        <div class="u-clearfix u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-gutter-0 u-layout-wrap u-layout-wrap-1">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-size-30 u-size-60-md">
                        <div class="u-layout-col">
                            <div class="u-align-center-md u-align-center-sm u-align-center-xs u-align-left-lg u-align-left-xl u-container-style u-grey-5 u-layout-cell u-left-cell u-size-40 u-layout-cell-1">
                                <div class="u-container-layout u-valign-top u-container-layout-1">
                                    @if(isset($_GET['lan']))
                                    <h2 class="u-text u-text-1" style="text-align: right"> {{ $value->title_ar }} </h2>
                                    @else
                                    <h2 class="u-text u-text-1" >{{ $value->title }}</h2>
                                    @endif
                                </div>
                            </div>
                            <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1" src="" style="background-image: url({{ Voyager::image( $value->image )}});" data-image-width="150" data-image-height="100" >
                                <div class="u-container-layout u-container-layout-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="u-size-30 u-size-60-md">
                        <div class="u-layout-col">
                            <div class="u-align-left u-container-style u-layout-cell u-palette-3-light-3 u-right-cell u-size-20 u-layout-cell-3">
                                <div class="u-container-layout u-valign-top u-container-layout-3">
                                    @if(isset($_GET['lan']))
                                        <h4 class="u-text u-text-2" style="text-align: right"> الحل </h4>
                                        <p class="u-text u-text-3" > {{ $value->solution_ar }} </p>
                                    @else
                                        <h4 class="u-text u-text-2" >solution&nbsp;</h4>
                                        <p class="u-text u-text-3">{{ $value->solution }} </p>
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach



</section>

@endsection
