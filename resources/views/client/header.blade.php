<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yemeni Bon</title>
  

    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css'>


    <link rel="stylesheet" href="{{asset('asset/css/main_style.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/css/content_style.css')}}" />
    <link rel="stylesheet" href="{{asset('asset/css/pages_style.css')}}" />

    <!-- Favicons -->
    <link href="{{asset('img/title.png')}} " rel="icon">
    <script>
        window.console = window.console || function(t) {};
    </script>



    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="50" translate="no">
    <!-- Navigation -->

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span>Menu.</span>
                </button>
                <a href="#page-top" class="navbar-brand page-scroll" target="_blank">
                    <span><img class="logo" src="{{asset('asset/img/logo.png')}}" alt="" srcset="" width="80" height="80"></span>
                </a>
            </div>
            <div class="navbar-collapse navbar-right navbar-main-collapse collapse menu" aria-expanded="false">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll active" href="/homepage">{{__('client.home')}}</a></li>
                    <li><a class="page-scroll" href="publication">{{__('client.pub')}}</a></li>
                    <!-- <li><a class="page-scroll" href="#work">World of Coffee</a></li> -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">{{__('client.w_o_c')}}</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">{{__('client.c_t')}}</a></li>
                            <li><a href="#">{{__('client.c_to')}}</a></li>
                            <li><a href="#">{{__('client.c_m')}}</a></li>
                        </ul>
                    </li>
                    <li><a class="page-scroll" href="/about">{{__('client.ab')}}</a></li>
                    <li><a class="page-scroll con" href="/contact">{{__('client.con')}}</a></li>
                 @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a style="font-size:14px; height:4.7vh; border:0; line-height:20px;" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
                </ul>

                <!-- <div class="searchbar">
                    <input type="text" placeholder="search">
                    <div class="icon">
                        <i class="fas fa-search page-scroll"></i>
                    </div>
                </div> -->

            </div>
            <div class="search-icon searchbar">
                <div class="icon">
                    <i class="fas fa-search page-scroll"></i>
                </div>
            </div>
        </div>
        <div class="search-box">
            <input type="text" placeholder="search">
            <div class="s-icon">
                <i class="fas fa-search page-scroll"></i>
            </div>
        </div>
    </nav>