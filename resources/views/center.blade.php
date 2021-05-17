@extends('master')

@section('title', 'PHD Center')

@section('style', 'PHD-Center.css')

@section('content')


    <section class="u-align-left u-clearfix u-image u-section-1" id="carousel_db5f">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h2 class="u-text u-text-palette-3-base u-text-1">phd center<br>
                <br>
            </h2>
        </div>
    </section>
    <section class="u-align-center u-clearfix u-white u-section-2" id="carousel_9635">
        <div class="u-clearfix u-sheet u-sheet-1">
            <h4 class="u-text u-text-1">@if(isset($_GET['lan']))  نقوم بتدريب في مجالات الهندسة والبرمجة بشكل عام ، كما نساعد الطلاب على تطوير مشاريعهم في جميع عمليات التطوير ، ونوفر مساحة عمل مناسبة للطلاب لتطوير مشاريعهم مع منحهم جميع الموارد اللازمة ، كما نقوم أيضًا بتدريب الروبوتات للأطفال تتراوح اعمارهم بين 8 و 15 سنة.  @else  We do a training on Engineering and Programming fields in general, we also help students developing their projects in all developing processes, we provide a suitable workspace for students to develop their projects while giving them all needed resources, we also a robotics training for kids aged between 8 and 15 years old. @endif</h4>
            <div class="u-expanded-width u-list u-repeater u-list-1" >


                @foreach($Course as $key => $value)


                <div class="u-container-style u-grey-10 u-list-item u-repeater-item u-video-cover u-list-item-1" >
                    <div class="u-container-layout u-similar-container u-container-layout-1">
                        <img alt="" class="u-expanded-width u-image u-image-default u-image-1" src="{{ Voyager::image( $value->image )}}">

                            @php
                               $today=date_create(date("Y-m-d"));
                              $dateEndCourse=date_create($value->end_at);
                              $dateStartCourse=date_create($value->start_at);

                              if ($today>$dateEndCourse) {
                                  $s=0;
                                  $diff1=date_diff($today,$dateEndCourse);
                                  $s=intval($diff1->format("%a"));
                                  if ($s<8) {
                                      if(isset($_GET['lan'])){
                                          echo '<div class="overlay-course overlay-course-end"> منتهي </div>';
                                      }else{
                                      echo '<div class="overlay-course overlay-course-end"> Ended </div>';
                                      }
                                  }
                              }else if ($today<$dateStartCourse) {
                                  $a=0;
                                  $diff2=date_diff($today,$dateStartCourse);
                                  $a=intval($diff2->format("%a"));
                                  if ($a<8) {
                                      if(isset($_GET['lan'])){
                                          echo '<div class="overlay-course overlay-course-soon">قريبا</div>';
                                      }else{
                                      echo '<div class="overlay-course overlay-course-soon">Soon</div>';
                                      }
                                  }
                              }else if ($today>=$dateStartCourse && $today<=$dateEndCourse) {
                                    if(isset($_GET['lan'])){
                                        echo '<div class="overlay-course overlay-course-activated">مفعل الان </div>';
                                    }else{
                                      echo '<div class="overlay-course overlay-course-activated">Activated Now</div>';
                                      }

                              }
                            @endphp

                        <div class="u-align-center u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-group u-video-cover u-group-1">
                            <div class="u-container-layout u-valign-top u-container-layout-2">
                                <h4 class="u-custom-font u-font-roboto-condensed u-text u-text-2">@if(isset($_GET['lan'])) {{ $value->name_ar }} @else {{ $value->name }} @endif</h4>
                                @if(isset($_GET['lan']))
                                <a href="{{route("Details",$value->id)}}?lan=Arabic" class="u-btn u-btn-round u-button-style u-hover-palette-3-light-1 u-palette-3-base u-radius-50 u-btn-1" data-animation-name="pulse" data-animation-duration="1000" data-animation-delay="0" data-animation-direction=""> الدخول للدورة </a>
                                @else
                                <a href="{{route("Details",$value->id)}}" class="u-btn u-btn-round u-button-style u-hover-palette-3-light-1 u-palette-3-base u-radius-50 u-btn-1" data-animation-name="pulse" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="">Enter Course </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>
        </div>
    </section>



@endsection
