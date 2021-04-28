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
            <img class="swiper-slide__image swiper-lazy" data-src="{{ asset('images/'.$banner->image) }}">
                <div class="swiper-slide__content">
                @if(Config::get('app.locale')=='en')
                    <h1 class="slider-title">{{$banner->title}}</h1>
                    <p>{{$banner->desc}}</p>
                 
                @elseif(Config::get('app.locale')=='ar')
                    <h1 class="slider-title">{{$banner->title_ar}}</h1>
                    <p>{{$banner->desc_ar}}</p>
                  
                
                @endif
                <a href="{{$banner->link}}" class="hero-btn">
                        <div>show details</div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach

        <!-- <div class="swiper-slide">
            <div class="swiper-slide__inner" style="background-image:url('https://ayxgj9k9n.cloudimg.io/width/5/x/https://user-images.githubusercontent.com/10026019/70386489-ecceef80-19d3-11ea-934d-375227e4c319.png')">
                <img class="swiper-slide__image swiper-lazy" data-src="https://images.unsplash.com/photo-1475296204602-08d15839e95f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
                <div class="swiper-slide__content">
                    <h1 class="slider-title">Coffee cafe event 2</h1>
                    <p>This is a description for coffee event.</p>
                    <a href="#" class="hero-btn">
                        <div>show details</div>
                    </a>
                </div>
            </div>
        </div> -->
        <!-- <div class="swiper-slide">
            <div class="swiper-slide__inner" style="background-image:url('https://ayxgj9k9n.cloudimg.io/width/5/x/https://user-images.githubusercontent.com/10026019/70386482-cc9f3080-19d3-11ea-803b-451bc9e3373b.png')">
                <img class="swiper-slide__image swiper-lazy" data-src="https://images.unsplash.com/photo-1511537190424-bbbab87ac5eb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80">
                <div class="swiper-slide__content">
                    <h1 class="slider-title">Coffee making event 3</h1>
                    <p>This is a description for coffee event333.</p>
                   
                    <a href="#" class="hero-btn">
                        <div>show details</div>
                    </a>
                </div>
            </div>
        </div> -->
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
                <!-- <div>&larr; Resize window to see it in action &rarr;</div>
                <h2 class="subheading" data-breakpoint></h2> -->
                <div class="filter-wrapper">
                <div class="flex">
                @if(Config::get('app.locale')=='en')
                <a href="/client/UserHome"> All</a>
                @elseif(Config::get('app.locale')=='ar')
                <a href="/client/UserHome"> الكل</a>

                @endif

                @foreach ($categories as $cat )
                @if(Config::get('app.locale')=='en')
                <!-- <button class="btn delete-confirm" data-id="{{$cat->id}}" onclick="myfunction()"> {{$cat->name}}</button> -->
                <a href="/client/UserHome/{{$cat->id}}"> {{$cat->name}}</a>

                 
                @elseif(Config::get('app.locale')=='ar')
                    <a href="/client/UserHome/{{$cat->id}}"> {{$cat->name_ar}}</a>
                  
                
                @endif
                        <!-- <a href="#">Section Two</a>
                        <a href="#">Section Three</a>
                        <a href="#">Section Four</a>
                        <a href="#">Section Five</a>
                        <a href="#">Section Six</a>
                        <a href="#">Section Seven</a>
                        <a href="#">Section Eight</a>
                        <a href="#">Section Nine</a> -->
                    @endforeach
                    </div>

                </div>
            </div>
            <div class="flex">


            @foreach ($projects as $project )
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="panel">
                    <div class="card-in">
                            <img class="card-img" src="{{ asset('images/'.$project->image) }}" alt="" srcset="">
                            @if(Config::get('app.locale')=='en')
                                <h1>{{$project->title}}</h1>
                            <p>{{$project->desc}}
                 
                @elseif(Config::get('app.locale')=='ar')
                    <h1>{{$project->title_ar}}</h1>
                            <p>{{$project->desc_ar}}                  
                
                @endif
                          
                            </p>
                            <a href="{{$project->link}}" class="show-pro-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="panel"><span></span>
                    <div class="card-in">
                            <img class="card-img" src="{{asset('asset/img/pro1.jpg')}}" alt="" srcset="">
                            <h1>Project 1</h1>
                            <p>jkdhflakjhdslkfjahlskdjhfakjshdfjha aksjdfhlaksjhdfkajshdfkjahskdfhafj
                                ashdfaljksgdlfakjgflkajslksjksglkfga sjkdfhlakjdfhalkfhajhfkajfhkajhfkj.
                            </p>
                            <a href="#" class="show-pro-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="panel"><span></span>
                    <div class="card-in">
                            <img class="card-img" src="{{asset('asset/img/pro1.jpg')}}" alt="" srcset="">
                            <h1>Project 1</h1>
                            <p>jkdhflakjhdslkfjahlskdjhfakjshdfjha aksjdfhlaksjhdfkajshdfkjahskdfhafj
                                ashdfaljksgdlfakjgflkajslksjksglkfga sjkdfhlakjdfhalkfhajhfkajfhkajhfkj.
                            </p>
                            <a href="#" class="show-pro-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="panel"><span></span></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="panel"><span></span></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="panel"><span></span></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="panel"><span></span></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="panel"><span></span></div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                    <div class="panel"><span></span></div>
                </div>
  -->
            </div>
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
            <img src="{{asset('asset/img/btd1.png')}}" alt="" srcset="" class="image-zoom-available img-responsive">
        </div>
    </section>
</main>

<!-- <script>
        //suad: here my function it will take id from clicked button and will give me its data ^ ^
         function myfunction({{$cat->id}}){
            alert({{$cat->id}});

         $.ajax({

                            type:'get',
                            url:'/client/UserHome/'+{{$cat->id}},
                            data:{id:{{$cat->id}}},
                            success:function(data){
                                alert({{$cat->id}});

                                document.getElementById("grid").innerHTML = "@foreach ($projects as $project )<div class='col-xs-12 col-sm-6 col-md-4 col-lg-4'> <div class='panel'><span></span><div class='card-in'><img class='card-img' src='{{ asset("images/".$project->image) }}' alt='' srcset=''> <h1>{{$project->title}}</h1><p>{{$project->desc}}</div></div></div>@endforeach";

                            },
                            error:function(error){console.log(error);
                            alert("data dont saved");
                            }
                        });
                        
               
                } );
         }
         $( document ).ready(function() {

$('.delete-confirm').click(function(event) {
    event.preventDefault();
    $.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
    var id = $(this).attr('data-id');

                // alert("datahhhhhhh saved");
                    $.ajax({

                            type:'get',
                            url:'/client/UserHome/'+id,
                            data:{id:id},
                            success:function(data){
                                alert(id);

                                document.getElementById("grid").innerHTML = "@foreach ($projects as $project )<div class='card item filterDiv maker grid-item'><img src=' {{ asset("images/".$project->image) }}' /> <h3>{{$project->title}}</h3><p>{{$project->desc}} </p></div>@endforeach";

                            },
                            error:function(error){console.log(error);
                            alert("data dont saved");
                            }
                        });
                        
               
                } );
    
            </script> -->

@include('client/footer')