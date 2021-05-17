<!DOCTYPE html>
<html style="font-size: 16px;" lang="en" >
<head>
    <meta charset="utf-8">
    <title>Details Courses</title>
    <link rel="stylesheet" href="../css/style.css" media="screen">
    <link rel="stylesheet" href="../css/View-Course.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/code.js" defer=""></script>
    <link rel="icon" href="../images/favicon1.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster:400|Roboto+Slab:100,200,300,400,500,600,700,800,900|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .fa-whatsapp {
            background: #25D366;
            color: white;
            border-radius:50%;
            text-align: center;
        }

        .faa {
            font-size: 38px;
            text-decoration: none;
            padding-top: 4px;
            margin:0px 5px;
        }
    </style>

    <script>
        function ar() {
            var str=window.location.href;
            location.replace(str+"?lan=Arabic");
        }
        function en() {
            var str=window.location.href;
            str= str.replace("?lan=Arabic", "");
            location.replace(str);
        }
        var str=window.location.href;
        var p = str.includes("\?");
        var p2 = str.includes("/?");
        var lan = str.includes("?lan=Arabic");
        if((p && !lan) || p2){
            var x = location.origin+"/?lan=Arabic";
            if(str!=x){
                location.replace("{{route("error")}}");
            }
        }
    </script>

</head>
<body class="u-body">



<section class="u-align-left u-clearfix u-image u-section-1" id="carousel_db5f" data-image-width="626" data-image-height="417" style='background-image: url("{{ Voyager::image( $Course[0]->image )}}")' >
    <div class="u-clearfix u-sheet u-sheet-1"><span class="u-icon u-icon-circle u-text-grey-80 u-icon-1" data-href="@if(isset($_GET['lan'])) {{route("center")}}?lan=Arabic @else {{route("center")}} @endif " data-page-id="260126291"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 55.753 55.753" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6f26"></use></svg><svg class="u-svg-content" viewBox="0 0 55.753 55.753" x="0px" y="0px" id="svg-6f26" style="enable-background:new 0 0 55.753 55.753;"><g><path d="M12.745,23.915c0.283-0.282,0.59-0.52,0.913-0.727L35.266,1.581c2.108-2.107,5.528-2.108,7.637,0.001   c2.109,2.108,2.109,5.527,0,7.637L24.294,27.828l18.705,18.706c2.109,2.108,2.109,5.526,0,7.637   c-1.055,1.056-2.438,1.582-3.818,1.582s-2.764-0.526-3.818-1.582L13.658,32.464c-0.323-0.207-0.632-0.445-0.913-0.727   c-1.078-1.078-1.598-2.498-1.572-3.911C11.147,26.413,11.667,24.994,12.745,23.915z"></path>
</g></svg></span>
        <h2 class="u-text u-text-palette-3-base u-text-1">
          <span style="font-size: 2.25rem;">@if(isset($_GET['lan'])) {{ $Course[0]->name_ar }} @else {{ $Course[0]->name }} @endif<br>
          </span>
            <br>
        </h2>


            @if(isset($_GET['lan']))

        <div class="u-align-left u-container-style u-group u-palette-3-light-3 u-similar-fill u-group-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="" >
            <div class="u-container-layout u-padding-12 u-container-layout-1">
                <p class="u-text u-text-2" style="margin: 15px 10px 0 195px;">{{ $Course[0]->address_ar }}</p><span style="margin: -29px auto 0 250px;" class="u-icon u-icon-circle u-text-palette-1-base u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9464"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-9464" style="enable-background:new 0 0 58 58;"><ellipse style="fill:#23A24D;" cx="29" cy="50" rx="29" ry="8"></ellipse><path style="fill:#EBBA16;" d="M41.676,5.324L41.676,5.324c-7.098-7.098-18.607-7.098-25.706,0h0
	C9.574,11.72,8.855,23.763,14.282,31l14.541,21l14.541-21C48.792,23.763,48.072,11.72,41.676,5.324z M29,24c-3.314,0-6-2.686-6-6
	s2.686-6,6-6s6,2.686,6,6S32.314,24,29,24z"></path></svg></span><span style="margin: 8px -25px 0 auto;" class="u-icon u-icon-circle u-text-palette-1-base u-icon-3 u-icon-2-ar"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0102"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-0102" style="enable-background:new 0 0 58 58;"><rect x="1" y="7" style="fill:#7383BF;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="56" height="44"></rect><polygon style="fill:#FFFFFF;" points="25,36 25,28.954 25,22 36,29 "></polygon><rect x="1" y="7" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="1" y="18" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="1" y="29" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="1" y="40" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="47" y="7" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="47" y="18" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="47" y="29" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="47" y="40" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect></svg></span>
                <p class="u-text u-text-3" style="margin:-29px 0px 0 190px; direction: rtl;">{{ $Course[0]->lectures }} درس </p>
                <p class="u-text u-text-4" style="margin: 18px 10px 0 190px; direction: rtl;" >{{ $Course[0]->hours }} ساعة</p><span style="margin: -31px -27px 0 auto;" class="u-icon u-icon-circle u-text-palette-1-base u-icon-4 u-icon-3-ar"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8b56"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-8b56" style="enable-background:new 0 0 58 58;"><circle style="fill:#48A0DC;" cx="29" cy="29" r="29"></circle><path style="fill:#EFCE4A;" d="M0,29c0,0.295,0.013,0.586,0.022,0.879H29V0C12.984,0,0,12.984,0,29z"></path><path style="fill:#4393BF;" d="M29,6.879c-0.552,0-1,0.447-1,1v23H13c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1v-24
	C30,7.326,29.552,6.879,29,6.879z"></path><path style="fill:#424A60;" d="M29,5c-0.552,0-1,0.447-1,1v23H13c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V6
	C30,5.447,29.552,5,29,5z"></path></svg></span><span style="margin: 7px auto 0 250px;" class="u-icon u-icon-circle u-text-palette-1-base u-icon-5"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9e2c"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-9e2c" style="enable-background:new 0 0 58 58;"><circle style="fill:#E7ECED;" cx="29" cy="29" r="29"></circle><path style="fill:#424A60;" d="M29,4c13.785,0,25,11.215,25,25S42.785,54,29,54S4,42.785,4,29S15.215,4,29,4 M29,0
	C12.984,0,0,12.984,0,29s12.984,29,29,29s29-12.984,29-29S45.016,0,29,0L29,0z"></path><g><path style="fill:#7383BF;" d="M29,5.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1
		C30,6.326,29.552,5.879,29,5.879z"></path><path style="fill:#7383BF;" d="M29,48.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1
		C30,49.326,29.552,48.879,29,48.879z"></path><path style="fill:#7383BF;" d="M51,27.879h-1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S51.552,27.879,51,27.879z"></path><path style="fill:#7383BF;" d="M8,27.879H7c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S8.552,27.879,8,27.879z"></path><path style="fill:#7383BF;" d="M43.849,12.615l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S44.24,12.224,43.849,12.615z"></path><path style="fill:#7383BF;" d="M13.444,43.021l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S13.834,42.631,13.444,43.021z"></path><path style="fill:#7383BF;" d="M44.556,43.021c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L44.556,43.021z"></path><path style="fill:#7383BF;" d="M14.151,12.615c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L14.151,12.615z"></path>
</g><line style="fill:none;stroke:#424A60;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="26" y1="28.879" x2="18" y2="28.879"></line><line style="fill:none;stroke:#424A60;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="29" y1="25.879" x2="29" y2="14.879"></line><circle style="fill:none;stroke:#424A60;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" cx="29" cy="28.879" r="3"></circle></svg></span>
                <p class="u-text u-text-5 u-time-ar" style="margin: -31px 0px 0 120px;">{{ $Course[0]->times_ar }}</p><span style="margin: 14px auto 0 250px;" class="u-icon u-icon-circle u-text-palette-1-base u-icon-6"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7905"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-7905" style="enable-background:new 0 0 58 58;"><polygon style="fill:#FC3952;" points="48,4 48,8 41,8 41,4 17,4 17,8 10,8 10,4 2,4 2,15 56,15 56,4 "></polygon><polygon style="fill:#EDEADA;" points="10,15 2,15 2,58 56,58 56,15 48,15 41,15 17,15 "></polygon><path style="fill:#CEC9AE;" d="M39,22h-2h-7h-2h-7h-2h-9v9v2v7v2v9h9h2h7h2h7h2h9v-9v-2v-7v-2v-9H39z M30,24h7v7h-7V24z M37,40h-7
	v-7h7V40z M21,33h7v7h-7V33z M21,24h7v7h-7V24z M12,24h7v7h-7V24z M12,33h7v7h-7V33z M19,49h-7v-7h7V49z M28,49h-7v-7h7V49z M37,49
	h-7v-7h7V49z M46,49h-7v-7h7V49z M46,40h-7v-7h7V40z M39,31v-7h7v7H39z"></path><rect x="10" style="fill:#28384C;" width="7" height="8"></rect><rect x="41" style="fill:#28384C;" width="7" height="8"></rect><rect x="30" y="33" style="fill:#26B99A;" width="7" height="7"></rect></svg></span>
                <p class="u-text u-text-6" style="margin: -31px 0px 0 155px;">{{ $Course[0]->days_ar }}</p>
                <p class="u-text u-text-7" style="margin: 22px 10px 0 115px;">تبدأ في {{ $Course[0]->start_at }}</p><span style="margin: -31px auto 0 250px;" class="u-icon u-icon-circle u-text-palette-1-base u-icon-7"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d236"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-d236" style="enable-background:new 0 0 58 58;"><circle style="fill:currentColor;" cx="29" cy="29" r="29"></circle><g><polygon style="fill:#FFFFFF;" points="44,29 22,44 22,29.273 22,14 	"></polygon><path style="fill:#FFFFFF;" d="M22,45c-0.16,0-0.321-0.038-0.467-0.116C21.205,44.711,21,44.371,21,44V14
		c0-0.371,0.205-0.711,0.533-0.884c0.328-0.174,0.724-0.15,1.031,0.058l22,15C44.836,28.36,45,28.669,45,29s-0.164,0.64-0.437,0.826
		l-22,15C22.394,44.941,22.197,45,22,45z M23,15.893v26.215L42.225,29L23,15.893z"></path>
</g></svg></span>
                <p class="u-text u-text-8" style="margin: 14px 0px 0 107px;">ينتهي في {{ $Course[0]->end_at }}</p><span style="margin: -29px -27px 0 auto;" class="u-icon u-icon-circle u-text-palette-1-base u-icon-8 u-icon-7-ar"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="-64 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3096"></use></svg><svg class="u-svg-content" viewBox="-64 0 512 512" id="svg-3096"><path d="m300.734375 308.332031c25.816406 23.230469 40.597656 56.445313 40.597656 91.175781v85.824219c0 8.832031-7.167969 16-16 16h-266.664062c-8.832031 0-16-7.167969-16-16v-85.824219c0-34.730468 14.78125-67.964843 40.597656-91.175781l36.117187-32.492187c5.695313-5.140625 8.832032-12.179688 8.832032-19.839844s-3.136719-14.699219-8.832032-19.820312l-36.117187-32.511719c-25.816406-23.230469-40.597656-56.445313-40.597656-91.175781v-85.824219c0-8.832031 7.167969-16 16-16h266.664062c8.832031 0 16 7.167969 16 16v85.824219c0 34.730468-14.78125 67.964843-40.597656 91.175781l-36.117187 32.492187c-5.695313 5.140625-8.832032 12.179688-8.832032 19.839844s3.136719 14.699219 8.832032 19.820312zm0 0" fill="#eceff1"></path><path d="m106.667969 496v-94.316406c0-15.679688 6.101562-30.398438 17.195312-41.492188l56.828125-56.832031c3.117188-3.136719 7.210938-4.691406 11.308594-4.691406s8.191406 1.554687 11.308594 4.691406l56.828125 56.832031c11.09375 11.09375 17.195312 25.8125 17.195312 41.492188v94.316406zm0 0" fill="#ffc107"></path><g fill="#607d8b"><path d="m362.667969 469.332031h-341.335938c-11.796875 0-21.332031 9.558594-21.332031 21.335938 0 11.773437 9.535156 21.332031 21.332031 21.332031h341.335938c11.796875 0 21.332031-9.558594 21.332031-21.332031 0-11.777344-9.535156-21.335938-21.332031-21.335938zm0 0"></path><path d="m362.667969 0h-341.335938c-11.796875 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.535156 21.335938 21.332031 21.335938h341.335938c11.796875 0 21.332031-9.558594 21.332031-21.335938 0-11.773437-9.535156-21.332031-21.332031-21.332031zm0 0"></path>
</g></svg></span>
            </div>
        </div>

            @else

                <div class="u-align-left u-container-style u-group u-palette-3-light-3 u-similar-fill u-group-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-delay="0" data-animation-direction="" >
                    <div class="u-container-layout u-padding-12 u-container-layout-1">
                        <p class="u-text u-text-2">{{ $Course[0]->address }}</p><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-2 u-icon-1-en"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9464"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-9464" style="enable-background:new 0 0 58 58;"><ellipse style="fill:#23A24D;" cx="29" cy="50" rx="29" ry="8"></ellipse><path style="fill:#EBBA16;" d="M41.676,5.324L41.676,5.324c-7.098-7.098-18.607-7.098-25.706,0h0
	C9.574,11.72,8.855,23.763,14.282,31l14.541,21l14.541-21C48.792,23.763,48.072,11.72,41.676,5.324z M29,24c-3.314,0-6-2.686-6-6
	s2.686-6,6-6s6,2.686,6,6S32.314,24,29,24z"></path></svg></span><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-0102"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-0102" style="enable-background:new 0 0 58 58;"><rect x="1" y="7" style="fill:#7383BF;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="56" height="44"></rect><polygon style="fill:#FFFFFF;" points="25,36 25,28.954 25,22 36,29 "></polygon><rect x="1" y="7" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="1" y="18" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="1" y="29" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="1" y="40" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="47" y="7" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="47" y="18" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="47" y="29" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect><rect x="47" y="40" style="fill:#556080;stroke:#424A60;stroke-width:2;stroke-miterlimit:10;" width="10" height="11"></rect></svg></span>
                        <p class="u-text u-text-3">{{ $Course[0]->lectures }} Lectures</p>
                        <p class="u-text u-text-4">{{ $Course[0]->hours }} Hours</p><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8b56"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-8b56" style="enable-background:new 0 0 58 58;"><circle style="fill:#48A0DC;" cx="29" cy="29" r="29"></circle><path style="fill:#EFCE4A;" d="M0,29c0,0.295,0.013,0.586,0.022,0.879H29V0C12.984,0,0,12.984,0,29z"></path><path style="fill:#4393BF;" d="M29,6.879c-0.552,0-1,0.447-1,1v23H13c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1v-24
	C30,7.326,29.552,6.879,29,6.879z"></path><path style="fill:#424A60;" d="M29,5c-0.552,0-1,0.447-1,1v23H13c-0.552,0-1,0.447-1,1s0.448,1,1,1h16c0.552,0,1-0.447,1-1V6
	C30,5.447,29.552,5,29,5z"></path></svg></span><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-5 u-icon-4-en"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9e2c"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-9e2c" style="enable-background:new 0 0 58 58;"><circle style="fill:#E7ECED;" cx="29" cy="29" r="29"></circle><path style="fill:#424A60;" d="M29,4c13.785,0,25,11.215,25,25S42.785,54,29,54S4,42.785,4,29S15.215,4,29,4 M29,0
	C12.984,0,0,12.984,0,29s12.984,29,29,29s29-12.984,29-29S45.016,0,29,0L29,0z"></path><g><path style="fill:#7383BF;" d="M29,5.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1
		C30,6.326,29.552,5.879,29,5.879z"></path><path style="fill:#7383BF;" d="M29,48.879c-0.552,0-1,0.447-1,1v1c0,0.553,0.448,1,1,1s1-0.447,1-1v-1
		C30,49.326,29.552,48.879,29,48.879z"></path><path style="fill:#7383BF;" d="M51,27.879h-1c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S51.552,27.879,51,27.879z"></path><path style="fill:#7383BF;" d="M8,27.879H7c-0.552,0-1,0.447-1,1s0.448,1,1,1h1c0.552,0,1-0.447,1-1S8.552,27.879,8,27.879z"></path><path style="fill:#7383BF;" d="M43.849,12.615l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S44.24,12.224,43.849,12.615z"></path><path style="fill:#7383BF;" d="M13.444,43.021l-0.707,0.707c-0.391,0.391-0.391,1.023,0,1.414c0.195,0.195,0.451,0.293,0.707,0.293
		s0.512-0.098,0.707-0.293l0.707-0.707c0.391-0.391,0.391-1.023,0-1.414S13.834,42.631,13.444,43.021z"></path><path style="fill:#7383BF;" d="M44.556,43.021c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L44.556,43.021z"></path><path style="fill:#7383BF;" d="M14.151,12.615c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414l0.707,0.707
		c0.195,0.195,0.451,0.293,0.707,0.293s0.512-0.098,0.707-0.293c0.391-0.391,0.391-1.023,0-1.414L14.151,12.615z"></path>
</g><line style="fill:none;stroke:#424A60;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="26" y1="28.879" x2="18" y2="28.879"></line><line style="fill:none;stroke:#424A60;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" x1="29" y1="25.879" x2="29" y2="14.879"></line><circle style="fill:none;stroke:#424A60;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;" cx="29" cy="28.879" r="3"></circle></svg></span>
                        <p class="u-text u-text-5">{{ $Course[0]->times }}</p><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-6 u-icon-5-en"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7905"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-7905" style="enable-background:new 0 0 58 58;"><polygon style="fill:#FC3952;" points="48,4 48,8 41,8 41,4 17,4 17,8 10,8 10,4 2,4 2,15 56,15 56,4 "></polygon><polygon style="fill:#EDEADA;" points="10,15 2,15 2,58 56,58 56,15 48,15 41,15 17,15 "></polygon><path style="fill:#CEC9AE;" d="M39,22h-2h-7h-2h-7h-2h-9v9v2v7v2v9h9h2h7h2h7h2h9v-9v-2v-7v-2v-9H39z M30,24h7v7h-7V24z M37,40h-7
	v-7h7V40z M21,33h7v7h-7V33z M21,24h7v7h-7V24z M12,24h7v7h-7V24z M12,33h7v7h-7V33z M19,49h-7v-7h7V49z M28,49h-7v-7h7V49z M37,49
	h-7v-7h7V49z M46,49h-7v-7h7V49z M46,40h-7v-7h7V40z M39,31v-7h7v7H39z"></path><rect x="10" style="fill:#28384C;" width="7" height="8"></rect><rect x="41" style="fill:#28384C;" width="7" height="8"></rect><rect x="30" y="33" style="fill:#26B99A;" width="7" height="7"></rect></svg></span>
                        <p class="u-text u-text-6">{{ $Course[0]->days }}</p>
                        <p class="u-text u-text-7">Start at {{ $Course[0]->start_at }}</p><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-7 u-icon-6-en"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 58 58" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-d236"></use></svg><svg class="u-svg-content" viewBox="0 0 58 58" x="0px" y="0px" id="svg-d236" style="enable-background:new 0 0 58 58;"><circle style="fill:currentColor;" cx="29" cy="29" r="29"></circle><g><polygon style="fill:#FFFFFF;" points="44,29 22,44 22,29.273 22,14 	"></polygon><path style="fill:#FFFFFF;" d="M22,45c-0.16,0-0.321-0.038-0.467-0.116C21.205,44.711,21,44.371,21,44V14
		c0-0.371,0.205-0.711,0.533-0.884c0.328-0.174,0.724-0.15,1.031,0.058l22,15C44.836,28.36,45,28.669,45,29s-0.164,0.64-0.437,0.826
		l-22,15C22.394,44.941,22.197,45,22,45z M23,15.893v26.215L42.225,29L23,15.893z"></path>
</g></svg></span>
                        <p class="u-text u-text-8">End at {{ $Course[0]->end_at }}</p><span class="u-icon u-icon-circle u-text-palette-1-base u-icon-8 u-icon-7-en"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="-64 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-3096"></use></svg><svg class="u-svg-content" viewBox="-64 0 512 512" id="svg-3096"><path d="m300.734375 308.332031c25.816406 23.230469 40.597656 56.445313 40.597656 91.175781v85.824219c0 8.832031-7.167969 16-16 16h-266.664062c-8.832031 0-16-7.167969-16-16v-85.824219c0-34.730468 14.78125-67.964843 40.597656-91.175781l36.117187-32.492187c5.695313-5.140625 8.832032-12.179688 8.832032-19.839844s-3.136719-14.699219-8.832032-19.820312l-36.117187-32.511719c-25.816406-23.230469-40.597656-56.445313-40.597656-91.175781v-85.824219c0-8.832031 7.167969-16 16-16h266.664062c8.832031 0 16 7.167969 16 16v85.824219c0 34.730468-14.78125 67.964843-40.597656 91.175781l-36.117187 32.492187c-5.695313 5.140625-8.832032 12.179688-8.832032 19.839844s3.136719 14.699219 8.832032 19.820312zm0 0" fill="#eceff1"></path><path d="m106.667969 496v-94.316406c0-15.679688 6.101562-30.398438 17.195312-41.492188l56.828125-56.832031c3.117188-3.136719 7.210938-4.691406 11.308594-4.691406s8.191406 1.554687 11.308594 4.691406l56.828125 56.832031c11.09375 11.09375 17.195312 25.8125 17.195312 41.492188v94.316406zm0 0" fill="#ffc107"></path><g fill="#607d8b"><path d="m362.667969 469.332031h-341.335938c-11.796875 0-21.332031 9.558594-21.332031 21.335938 0 11.773437 9.535156 21.332031 21.332031 21.332031h341.335938c11.796875 0 21.332031-9.558594 21.332031-21.332031 0-11.777344-9.535156-21.335938-21.332031-21.335938zm0 0"></path><path d="m362.667969 0h-341.335938c-11.796875 0-21.332031 9.558594-21.332031 21.332031 0 11.777344 9.535156 21.335938 21.332031 21.335938h341.335938c11.796875 0 21.332031-9.558594 21.332031-21.335938 0-11.773437-9.535156-21.332031-21.332031-21.332031zm0 0"></path>
</g></svg></span>
                    </div>
                </div>


            @endif


    </div>
</section>
<section class="u-align-center u-clearfix u-palette-3-light-3 u-section-2" id="sec-8ae2">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-palette-3-base u-text-1">@if(isset($_GET['lan'])) وصف الدورة التدريبية @else Course Description @endif</h2>
        <p class="u-text u-text-black u-text-2"> @if(isset($_GET['lan'])) {{ $Course[0]->description_ar }} @else {{ $Course[0]->description }}. @endif</p>
    </div>
</section>
<section class="u-align-center u-clearfix u-section-3" id="sec-1b21">
    <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-palette-3-base u-text-1">@if(isset($_GET['lan'])) محتوي الدورة التدريبية @else Course Content @endif
        </h1>
        <div class="u-expanded-width-lg u-expanded-width-md u-expanded-width-xl u-table u-table-responsive u-table-1">
            <table class="u-table-entity u-table-entity-1" @if(isset($_GET['lan'])) style="text-align: right; direction: rtl;" @endif>
                <colgroup>
                    <col width="33.3%">
                    <col width="33.3%">
                    <col width="33.400000000000006%">
                </colgroup>
                <thead class="u-black u-table-header u-table-header-1">
                <tr style="height: 47px;">
                    <th class="u-border-1 u-border-black u-palette-3-base u-table-cell u-table-cell-1">@if(isset($_GET['lan'])) عنوان @else title @endif</th>
                    <th class="u-border-1 u-border-black u-palette-3-base u-table-cell u-table-cell-2">@if(isset($_GET['lan'])) وصف @else Description @endif</th>
                    <th class="u-border-1 u-border-black u-palette-3-base u-table-cell u-table-cell-3">@if(isset($_GET['lan'])) المدة @else Period @endif</th>
                </tr>
                </thead>
                <tbody class="u-table-body">
                @foreach($CourseContent as $keyc => $valuecon)
                    <tr style="height: 75px;">
                        <td class="u-border-1 u-border-grey-30 u-table-cell">@if(isset($_GET['lan'])) {{ $valuecon->name_ar }} @else {{ $valuecon->name }} @endif</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">@if(isset($_GET['lan'])) {{ $valuecon->description_ar }} @else {{ $valuecon->description }} @endif</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">@if(isset($_GET['lan'])) {{ $valuecon->duration }} @else {{ $valuecon->duration }} @endif</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</section>





<footer class="u-clearfix u-footer u-white" id="sec-7284"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1" >
        <div class="u-align-center u-social-icons u-spacing-5 u-social-icons-1" >
            <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/PHD-CENTER-101791205206265/"><span class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-30c8"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-30c8"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
            </a>

            <a style="color: white!important;" class="faa fa fa-whatsapp" title="whatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=+972595352829&text=Hello%20PHD%20Group">   </a>

            <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/phd_center2021/"><span class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5d41"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-5d41"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
            </a>
            <a class="u-social-url" title="linkedin" target="_blank" href=""><span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-4a4f"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-4a4f"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
            </a>
        </div>
        <center><span style="color: grey">&copy;Copyright {{Date('Y')}}: PHD Group</span></center>
    </div>
</footer>

<span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; background-image: none; right: 20px; bottom: 20px" class="u-back-to-top u-border-3 u-border-palette-3-base u-icon u-icon-circle u-opacity u-opacity-85 u-spacing-10 u-text-palette-3-base circle-mobile" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="#" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="" id="svg-1d98" data-color="rgb(71, 138, 201)"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>

</body>
</html>
