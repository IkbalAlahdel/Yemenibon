@include('client/header')


<div class="swiper-container">
    <div class="swiper-indicator">
        <div class="swiper-indicator__progress"></div>
    </div>
    <div class="swiper-wrapper">
        <!-- Slides -->
        <!-- <div class="overlay"></div> -->
        @foreach ($banners as $banner )

        <div class="swiper-slide">
            <div class="swiper-slide__inner" style="background-image:url('https://ayxgj9k9n.cloudimg.io/width/5/x/https://user-images.githubusercontent.com/10026019/70386467-792ce280-19d3-11ea-8524-3199138b4c7b.jpeg')">
                <img class="swiper-slide__image swiper-lazy" data-src="{{ asset('images/1617826490028459200.jpg') }}">
                <div class="swiper-slide__content">
                    <h1 class="slider-title">{{$banner->title}}</h1>
                    <p>{{$banner->desc}}</p>
                    <a href="#" class="hero-btn">
                        <div>show details</div>
                    </a>
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

        <div class="project-container">
            <div class="text-center">
                <!-- <h1 class="title">Flexbox Grid</h1> -->
                <div class="filter-wrapper">
                    <div class="flex">
                        @if(Config::get('app.locale')=='en')

                        <a onclick="cliced(0)" class=" tagA active-filter">All</a>
                        @else
                        <a onclick="cliced(0)" class="active-filter">الكل</a>
    
                        @endif
                        @foreach ($categories as $cat )
                        @if(Config::get('app.locale')=='en')
                    <a class="tagA test" onclick="cliced('{{ $cat->id}}')" id=""> {{$cat->name}}</a>
                    @else
                    <a class="tagA test" onclick="cliced('{{ $cat->id}}')" id=""> {{$cat->name_ar}}</a>

                    @endif
                        @endforeach

                      
                    </div>
                </div>
            </div>
            <div class="flex" id="post-data">
                @include('data')



              
            </div>
           
                    <button class="more" id="more">{{__('client.show_more')}}</button>
               
        </div>
    </section>
    
    <section id="quote-wrapper">
        <div class="quote">
            <blockquote id="quote-quote">
                <span id="q-start">“</span><span class="q-quote">Foundation believes that this inspiration is important for your
                    career as an entrepreneur in the field of specialied Yemeni coffee.</span><span id="q-end">”</span>
            </blockquote>
            <p><b>-Rowad Foundation</b></p>
        </div>
    </section>

    <section id="diagram-wrapper">
        <div class="diagram">
            <!-- style="max-width: 100vw;" -->
            <img src="{{asset('asset/img/btd2.png')}}" alt="" srcset="" class="image-zoom-available img-responsive">
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
   var id=0;

    function load(page,id){
        $.ajax({
            url:"?page="+page+"&id="+id,
            type:"get",
          
        }).done(function(data){
            if(data.html==" "){
                $(".ajax-load").html("No Data");
                return ;
            }
            $("#post-data").append(data.html);
        });
    }

    // var page=1;
    // $(window).scroll(function(){
    //     if($(window).scrollTop()+$(window).height()>=$(document).height())
    //     {
    //         page++;
    //         load(page);
    //     }
    // });

    var page=1;
    $("#more").click(function(){
            page++;
            load(page,id);
    });

   function cliced(ids){
    //    $('.tagA').removeClass('active-filter');
    //    $(this).addClass('active-filter');

        console.log("test");
        // console.log($(this).class());
//    var id=$(this).value();
$("#post-data").html(' ');
             page=1;
             id=ids;
        console.log(id);

            load(page,id);

    }
    </script>
@include('client/footer')