<footer class="footer">
    <div class="container">
        <div class="footer-container">
            <!-- <div class="footer-logo">
                <a href="https://rowad.org/en"><img src="" alt="rowad-logo"></a>
            </div> -->

            <div class="footer-icons">
                <div class="footer-icon">
                    <img src="{{asset('asset/img/eu.png')}}" alt="logo1">
                </div>

                <div class="footer-icon">
                    <img src="{{asset('asset/img/rowad.png')}}" alt="logo1">
                </div>

                <div class="footer-icon">
                    <img src="{{asset('asset/img/steps.png')}}" alt="logo1">
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="copyright-desc"> © 2014 - 2021 ROWAD Foundation - Yemen - All Rights Reserved</div>
            <div class="terms"> <a href="">Terms</a></div>
            <div class="privacy"> <a href="">Privacy Policy</a></div>
            <div class="coding">
                <span>Developed With <i class="fa fa-heart" aria-hidden="true"></i> in : </span>
                <a href="">
                    <!-- <img src="https://rowad.org/imgs/venus.svg" alt=""> -->
                    Coding Academy
                </a>
            </div>
        </div>
    </div>

</footer>
<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.1/js/swiper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cloudinary-core/2.3.0/cloudinary-core-shrinkwrap.min.js"></script>
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

    $('.dropdown-toggle').click(function(e) {
        if ($(document).width() > 768) {
            e.preventDefault();

            var url = $(this).attr('href');


            if (url !== '#') {

                window.location.href = url;
            }

        }
    });
</script>
</body>

</html>