<html lang="en">

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
            <div class="navbar-collapse navbar-right navbar-main-collapse collapse" aria-expanded="false">
                <ul class="nav navbar-nav">
                    <li><a class="page-scroll" href="#home">Home</a></li>
                    <li><a class="page-scroll" href="#skills">Publication</a></li>
                    <li><a class="page-scroll" href="#work">World of Coffee</a></li>
                    <li><a class="page-scroll" href="#about">About</a></li>
                    <li><a class="page-scroll" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="swiper-container">
        <div class="swiper-indicator">
            <div class="swiper-indicator__progress"></div>
        </div>
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach ($banners as $banner )

            <div class="swiper-slide">
                <div class="swiper-slide__inner" style="background-image:url('https://ayxgj9k9n.cloudimg.io/width/5/x/https://user-images.githubusercontent.com/10026019/70386467-792ce280-19d3-11ea-8524-3199138b4c7b.jpeg')">
                    <img class="swiper-slide__image swiper-lazy" data-src="="{{ asset('images/'.$banner->image1) }}">
                    <div class="swiper-slide__content">
                        <h1 class="slider-title">Coffee Event 1</h1>
                        <p>This is a description for coffee event.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide__inner" style="background-image:url('https://ayxgj9k9n.cloudimg.io/width/5/x/https://user-images.githubusercontent.com/10026019/70386489-ecceef80-19d3-11ea-934d-375227e4c319.png')">
                    <img class="swiper-slide__image swiper-lazy" data-src="https://images.unsplash.com/photo-1475296204602-08d15839e95f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
                    <div class="swiper-slide__content">
                        <h1 class="slider-title">Coffee event 2</h1>
                        <p>This is a description for coffee event.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="swiper-slide__inner" style="background-image:url('https://ayxgj9k9n.cloudimg.io/width/5/x/https://user-images.githubusercontent.com/10026019/70386482-cc9f3080-19d3-11ea-803b-451bc9e3373b.png')">
                    <img class="swiper-slide__image swiper-lazy" data-src="https://images.unsplash.com/photo-1511537190424-bbbab87ac5eb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
                    <div class="swiper-slide__content">
                        <h1 class="slider-title">Coffee event 3</h1>
                        <p>This is a description for coffee event.</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- pagination -->
        <div class="swiper-pagination"></div>

        <!--navigation arrows -->
        <div class="swiper-button-prev prev"></div>
        <div class="swiper-button-next next"></div>
    </div>
    <main id="content" class="main">
        <section id="projects-wrrapper" class="content">

            <!-- Control buttons -->
            <div id="myBtnContainer" style="align-items: center; align-content:center; align-self:center; margin-top:50px; margin-left:30px;">
                <button class="btn active" onclick="filterSelection('all')">All</button>
                <button class="btn" onclick="filterSelection('shop')"> Coffee shop</button>
                <button class="btn" onclick="filterSelection('maker')"> Coffee makers</button>
            </div>

            <div class="project-container grid">
                <div class="card item filterDiv maker">
                    <img src="https://images.unsplash.com/photo-1533658925625-2f94d23fc425?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=894c97adfd68510170db9ae89704c92e&auto=format&fit=crop&w=800&q=60" />
                    <h3>Card title</h3>
                    <p>Card description</p>
                </div>

                <div class="card item filterDiv maker">
                    <img src="https://images.unsplash.com/photo-1494122353634-c310f45a6d3c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ecd4e63ddbfbc55465d3d0abc16ec5c5&auto=format&fit=crop&w=2850&q=80" />
                    <h3>Card title</h3>
                    <p>Card description</p>
                </div>

                <div class="card item filterDiv maker">
                    <img src="https://images.unsplash.com/photo-1503867913710-3f1656e94ac9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=4ec81722964d9d4b89884c82bcb11642&auto=format&fit=crop&w=1027&q=80" />
                    <h3>Card title</h3>
                    <p>Card description</p>
                </div>
                <div class="card item filterDiv shop">
                    <img src="https://images.unsplash.com/photo-1533756972958-d6f38a9761e3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=d710493bc1818842db8ce47f887708f2&auto=format&fit=crop&w=2089&q=80" />
                    <h3>Card title</h3>
                    <p>Card description</p>
                </div>
                <div class="card item filterDiv shop">
                    <img src="https://images.unsplash.com/photo-1502957291543-d85480254bf8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=220d7cdb8357ec667ed2c4d4a3de3eb0&auto=format&fit=crop&w=1567&q=80" />
                    <h3>Card title</h3>
                    <p>Card description</p>
                </div>
                <div class="card item filterDiv shop">
                    <img src="https://images.unsplash.com/photo-1533770699395-5761e5d08106?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=363f39b71ee57e936da6f04a7830895f&auto=format&fit=crop&w=1949&q=80" />
                    <h3>Card title</h3>
                    <p>Card description</p>
                </div>
                <div class="card filterDiv maker">
                    <img src="https://images.unsplash.com/photo-1533806481099-93f1242aea1e?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0f2ba53e0ed1f9ecd16acb04ad0f70f7&auto=format&fit=crop&w=1950&q=80" />
                    <h3>Card title</h3>
                    <p>Card description</p>
                </div>
                <div class="card item filterDiv maker">
                    <img src="https://images.unsplash.com/photo-1533738630286-f1f4a61705f8?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=5e2bc6bb33302df3a49d62983fe535ef&auto=format&fit=crop&w=800&q=60" />
                    <h3>Card title</h3>
                    <p>Card description</p>
                </div>
                <div class="card item filterDiv maker">
                    <img src="https://images.unsplash.com/photo-1533762385849-5aa14c83dbaf?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=040eec84d37ae33312c1bda4d0dfb0f6&auto=format&fit=crop&w=800&q=60" />
                    <h3>Card title</h3>
                    <p>Card description</p>
                </div>
            </div>
        </section>
        <section id="quote-wrapper">
            <div class="quote">
                <cite>
                    <q>I was taken by the power that savoring a simple cup of coffee can have to connect people and create community.</q>
                </cite>
                <span id="replay">Replay</span>
                <a id="dex-sign" class="play" href="http://drygiel.com" target="_blank"></a>
            </div>
        </section>

        <section id="diagram-wrapper">
            <div class="diagram">
                <img src="{{asset('asset/img/bt.png')}}" alt="" srcset="" style="width: 100vw;">
            </div>
        </section>
    </main>
    <footer class="footer">
        <div class="footer-content">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-left col-xl-4 col-lg-4 col-md-4 col-sm-6 " style="display: inline-block;">
                        <p>
                            All Rights Reserved &copy; Copyrights <strong>YemeniBon</strong>.
                        </p>


                    </div>
                    <div class="text-center col-xl-4 col-lg-4 col-md-3 col-sm-4  " style="display: inline-block;">
                        <span><img class="logo" src="{{asset('asset/img/facebook-01.png')}}" alt="" srcset="" width="60" height="60"></span>&nbsp;&nbsp;
                        <span><img class="logo" src="{{asset('asset/img/twitter-01.png')}}" alt="" srcset="" width="60" height="60"></span>&nbsp;&nbsp;
                        <span><img class="logo" src="{{asset('asset/img/instagram-01.png')}}" alt="" srcset="" width="60" height="60"></span>&nbsp;&nbsp;
                        <span><img class="logo" src="{{asset('asset/img/youtube.png')}}" alt="" srcset="" width="60" height="60"></span>&nbsp;&nbsp;

                    </div>


                    <div class="text-right col-xl-4 col-lg-4 col-md-3 col-sm-4 " style="display: inline-block;">
                        <a href="#" class="footer-content">
                            Privacy policy </a>
                        <a href="#" class="footer-content">
                            &nbsp;&nbsp;&nbsp;
                            Terms of use </a>
                    </div>
                </div>
            </div>
    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.3/dist/muuri.min.js"></script>
    <script src="{{asset('asset/js/rendered.js')}}"></script>
    <script id="slider-js">
        const slider = document.querySelectorAll('.swiper-container');

        slider.forEach((el, i) => {
            const indicator = document.querySelector('.swiper-indicator__progress'),
                arrows = document.querySelectorAll('.swiper-arrow'),
                slides = document.querySelectorAll('.swiper-slide'),
                slidesContent = document.querySelectorAll('.swiper-slide__content'),
                timer = 5000,
                swiper = new Swiper(el, {
                    loop: true,
                    effect: 'fade',
                    speed: 1000,
                    autoplay: {
                        delay: timer,
                        disableOnInteraction: false
                    },

                    on: {
                        slideChangeTransitionEnd: function() {
                            indicator.style.animationDuration = timer / 1000 + "s";
                            indicator.classList.add('is--playing');
                        },
                        slideChangeTransitionStart: function() {
                            indicator.classList.remove('is--playing');
                        },
                        init: function() {
                            setParallax(slides, this.width);
                        },
                        resize: function() {
                            setParallax(slides, this.width);
                        }
                    },

                    lazy: {
                        loadPrevNext: true
                    },


                    // If we need pagination
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true
                        /*
                        renderBullet: function (index, className) {
                          return '<div class="' + className + '">' + (index + 1) + '</div>';
                        },*/
                    },


                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev'
                    }
                });



            arrows.forEach(el => {
                el.addEventListener('mouseenter', () => {
                    swiper.autoplay.stop();
                    indicator.classList.add('is--paused');
                });
                el.addEventListener('mouseleave', () => {
                    swiper.autoplay.start();
                    indicator.classList.remove('is--paused');
                });
            });
        });

        function setParallax(slides, width) {
            slides.forEach(slide => {
                slide.querySelector('.swiper-slide__inner').setAttribute('data-swiper-parallax-x', width);
            });
        }
    </script>
</body>

</html>