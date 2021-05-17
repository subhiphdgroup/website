@extends('master')

@section('title', 'PHD Marketing')

@section('style', 'PHD-Markiting.css')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        body {
            font-family: Verdana, sans-serif;
            margin: 0;
        }

        * {
            box-sizing: border-box;
        }

        .row > .column {
            padding: 0 8px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        .column {
            float: left;
            width: 25%;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            position: fixed;
            z-index: 100;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: black;
        }

        /* Modal Content */
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            width: 90%;
            max-width: 1200px;
        }

        /* The Close Button */
        .close {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #999;
            text-decoration: none;
            cursor: pointer;
        }

        .mySlides {
            display: none;
        }

        .cursor {
            cursor: pointer;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -50px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
            -webkit-user-select: none;
        }
.prev{
    margin-left: -50%;
}
        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        img {
            margin-bottom: -4px;
        }

        .caption-container {
            text-align: center;
            background-color: black;
            padding: 2px 16px;
            color: white;
        }

        .demo {
            opacity: 0.6;
        }

        .active,
        .demo:hover {
            opacity: 1;
        }

        img.hover-shadow {
            transition: 0.3s;
        }

        .hover-shadow:hover {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }



    </style>

    <section class="u-align-center u-clearfix u-valign-middle-lg u-valign-middle-xl u-section-1" id="carousel_37b1">
        <div id="carousel-8627" data-interval="5000" data-u-ride="carousel" class="u-carousel u-expanded-width u-slider u-slider-1">
            <ol class="u-absolute-hcenter u-carousel-indicators u-carousel-indicators-1">
                <li data-u-target="#carousel-8627" class="u-active u-grey-30 u-shape-circle" data-u-slide-to="0" style="height: 10px; width: 10px;"></li>
                <li data-u-target="#carousel-8627" class="u-grey-30 u-shape-circle" data-u-slide-to="1" style="height: 10px; width: 10px;"></li>
            </ol>
            <div class="u-carousel-inner" role="listbox">
                <div class="u-active u-align-center u-carousel-item u-container-style u-slide">
                    <div class="u-container-layout u-container-layout-1">
                        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
                            <div class="u-gallery-inner u-gallery-inner-1">
                                <div class="u-effect-fade u-gallery-item">
                                    <div class="u-back-slide" data-image-width="720" data-image-height="1080">
                                        <img class="u-back-image u-expanded" src="{{ Voyager::image( $Slide[0]->image)}}">
                                    </div>
                                    <div class="u-over-slide u-shading u-over-slide-1">
                                        <h3 class="u-gallery-heading"></h3>
                                        <p class="u-gallery-text"></p>
                                    </div>
                                </div>
                                <div class="u-effect-fade u-gallery-item">
                                    <div class="u-back-slide" data-image-width="720" data-image-height="1080">
                                        <img class="u-back-image u-expanded" src="{{ Voyager::image( $Slide[1]->image)}}">
                                    </div>
                                    <div class="u-over-slide u-shading u-over-slide-2">
                                        <h3 class="u-gallery-heading"></h3>
                                        <p class="u-gallery-text"></p>
                                    </div>
                                </div>
                                <div class="u-effect-fade u-gallery-item">
                                    <div class="u-back-slide" data-image-width="716" data-image-height="1080">
                                        <img class="u-back-image u-expanded" src="{{ Voyager::image( $Slide[2]->image)}}">
                                    </div>
                                    <div class="u-over-slide u-shading u-over-slide-3">
                                        <h3 class="u-gallery-heading"></h3>
                                        <p class="u-gallery-text"></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="u-align-center u-carousel-item u-container-style u-expanded-width-xl u-slide">
                    <div class="u-container-layout u-valign-middle-xs u-container-layout-2">
                        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-2">
                            <div class="u-gallery-inner u-gallery-inner-2">
                                <div class="u-effect-fade u-gallery-item">
                                    <div class="u-back-slide" data-image-width="2250" data-image-height="1500">
                                        <img class="u-back-image u-expanded" src="{{ Voyager::image( $Slide[3]->image)}}">
                                    </div>
                                    <div class="u-over-slide u-shading u-over-slide-6">
                                        <h3 class="u-gallery-heading"></h3>
                                        <p class="u-gallery-text"></p>
                                    </div>
                                </div>
                                <div class="u-effect-fade u-gallery-item">
                                    <div class="u-back-slide" data-image-width="1280" data-image-height="1920">
                                        <img class="u-back-image u-expanded" src="{{ Voyager::image( $Slide[4]->image)}}">
                                    </div>
                                    <div class="u-over-slide u-shading u-over-slide-4">
                                        <h3 class="u-gallery-heading"></h3>
                                        <p class="u-gallery-text"></p>
                                    </div>
                                </div>
                                <div class="u-effect-fade u-gallery-item">
                                    <div class="u-back-slide" data-image-width="1920" data-image-height="2560">
                                        <img class="u-back-image u-expanded" src="{{ Voyager::image( $Slide[5]->image)}}">
                                    </div>
                                    <div class="u-over-slide u-shading u-over-slide-5">
                                        <h3 class="u-gallery-heading"></h3>
                                        <p class="u-gallery-text"></p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <a class="u-absolute-vcenter-lg u-absolute-vcenter-sm u-absolute-vcenter-xl u-absolute-vcenter-xs u-black u-carousel-control u-carousel-control-prev u-icon-circle u-spacing-10 u-text-body-alt-color u-carousel-control-1" href="#carousel-8627" role="button" data-u-slide="prev">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225
                    c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"></path></svg>
          </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="u-absolute-vcenter-lg u-absolute-vcenter-sm u-absolute-vcenter-xl u-absolute-vcenter-xs u-black u-carousel-control u-carousel-control-next u-icon-circle u-spacing-10 u-text-body-alt-color u-carousel-control-2" href="#carousel-8627" role="button" data-u-slide="next">
          <span aria-hidden="true">
            <svg viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5
                    c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"></path></svg>
          </span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>





    <section class="u-align-center u-clearfix u-section-2" id="carousel_7f50">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-palette-3-base u-text-1">@if(isset($_GET['lan'])) شرح @else Explanation  @endif</h2>
            <p class="u-text u-text-2">@if(isset($_GET['lan']))نقوم بالتسويق للمنتجات التي نطورها والمشاريع التي نبنيها.
                @else We do marketing for products that we develop and projects that we build. @endif</p>
        </div>
    </section>


    <section class="u-align-center u-clearfix u-section-3" id="carousel_c563">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-expanded-width u-list u-repeater u-list-1">



                @foreach($Product as $key => $value)

                    <div class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-2">
                        <div class="u-container-layout u-similar-container u-valign-top u-container-layout-4">
                            <div class="u-align-center u-border-2 u-border-black u-container-style u-expanded-width u-group u-palette-3-base u-video-cover u-group-3">
                                <div class="u-container-layout u-valign-top u-container-layout-5">
                                    <h3 class="u-custom-font u-font-raleway u-text u-text-body-alt-color u-text-5">@if(isset($_GET['lan'])) {{ $value->name_ar }} @else {{ $value->name }} @endif</h3>
                                </div>
                            </div>
                            <img id="opcl{{ $value->id }}" class="u-border-2 u-border-grey-75 u-expanded-width u-image u-image-default u-image-2 " src="{{ Voyager::image( $value->image)}}" style="width:100%; " onclick="openModal({{ $value->id }});currentSlide(1)" class="hover-shadow cursor">
                        <!--<img alt="" class="u-border-2 u-border-grey-75 u-expanded-width u-image u-image-default u-image-2" src="{{ Voyager::image( $value->image)}}">-->
                            <div class="u-border-2 u-border-grey-75 u-container-style u-expanded-width u-group u-palette-3-light-3 u-video-cover u-group-4"  >
                                <div class="u-container-layout u-container-layout-6" >

                                    <ul class="u-align-left u-custom-list u-text u-text-7" >
                                        <li>
                                            <div class="class u-list-icon" >
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                                            </div>@if(isset($_GET['lan'])) {{ $value->description_point_1_ar }} @else {{ $value->description_point_1 }} @endif
                                        </li>
                                        <li>
                                            <div class="class u-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                                            </div>@if(isset($_GET['lan'])) {{ $value->description_point_2_ar }} @else {{ $value->description_point_2 }} @endif
                                        </li>
                                        <li>
                                            <div class="class u-list-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.019 512.019" x="0px" y="0px" id="svg-0d13"><path fill="currentColor" d="M362.676,0H149.343C119.888,0,96.01,23.878,96.01,53.333v448 c-0.011,5.891,4.757,10.675,10.648,10.686c2.84,0.005,5.565-1.123,7.571-3.134L256.01,367.083l141.781,141.781 c4.16,4.171,10.914,4.179,15.085,0.019c2.006-2.001,3.133-4.717,3.134-7.55v-448C416.01,23.878,392.131,0,362.676,0z"></path></svg>
                                            </div>@if(isset($_GET['lan'])) {{ $value->description_point_3_ar }} @else {{ $value->description_point_3 }} @endif
                                        </li>

                                    </ul>
                                    @if(isset($_GET['lan']))
                                        <p class="u-align-left u-text u-text-8" style="text-align: right">{{ $value->description_text_ar }}</p>
                                    @else
                                        <p class="u-align-left u-text u-text-8" > {{ $value->description_text }} </p>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>





                    <div id="myModal" class="modal">
                        <span class="close cursor" onclick="closeModal()">&times;</span>
                        <div class="modal-content">

                            <div class="mySlides">
                                <div class="numbertext">1 / 4</div>
                                <img src="{{ Voyager::image( $Slide[0]->image)}}" style="width:100%; height:500px; ">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">2 / 4</div>
                                <img src="{{ Voyager::image( $Slide[1]->image)}}" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">3 / 4</div>
                                <img src="{{ Voyager::image( $Slide[2]->image)}}" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <div class="numbertext">4 / 4</div>
                                <img src="{{ Voyager::image( $Slide[3]->image)}}" style="width:100%">
                            </div>

                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>

                            <div class="caption-container">
                                <p id="caption"></p>
                            </div>


                            <div class="column">
                                <img class="demo cursor" src="{{ Voyager::image( $Slide[0]->image)}}" style="width:100%" onclick="currentSlide(1)" alt="Nature and sunrise">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="{{ Voyager::image( $Slide[1]->image)}}" style="width:100%" onclick="currentSlide(2)" alt="arduino">
                            </div>
                            <div class="column">
                                <img class="demo cursor" src="{{ Voyager::image( $Slide[2]->image)}}" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
                            </div>
                            <div class="column">
                                <img id="test1" class="demo cursor" src="{{ Voyager::image( $Slide[2]->image)}}" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
                            </div>
                        </div>
                    </div>





                @endforeach










            </div>
        </div>
    </section>





    <script>



        $(document).ready(function(){
            $("#opcl1").click(function(){
                $.ajax({
                    url: "http://127.0.0.1:8000/tt/5",
                    type: 'GET',
                    dataType: 'json', // added data type
                    success: function(res) {
                        console.log(res[0]['image']);

                        //var d=res[0]['image'];

                        document.getElementById("test1").src= "http://127.0.0.1:8000/storage/"+res[0]["image"];

                    }
                });




            });
        });


        function openModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex += n);
            console.log(slideIndex);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            var captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " active";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }

    </script>



@endsection
