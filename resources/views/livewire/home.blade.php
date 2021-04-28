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
                    <a href="/homepage" class="active-filter">All</a>
                    @foreach ($categories as $cat )
                    <a  onclick="display_data('{{$cat->id}}')" > {{$cat->name}}</a>
                    @endforeach

                  
                </div>
            </div>
        </div>
        <div class="flex" id="flex">
               @foreach($users as $user)                        
               <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                   <div class="panel">
                       <div class="card-in">
                           <img class="card-img-border" src="{{ asset('asset/img/c1.png') }}" alt="" srcset="">
                           <h1>{{$user->title}}</h1>
                           <p>{{$user->desc}}
                           </p>
                           <a href="project-details" class="show-pro-btn">
                               <div>show details</div>
                           </a>
                       </div>
                   </div>
                   <div class="back-panel"></div>
               </div>
                   
               @endforeach
             
    </div>
    <div class="load-more">
            <button wire:click="loadMore()" class="btn btn-info">load more ...</button>
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
    <img src="{{asset('asset/img/btd2.png')}}" alt="" srcset="" class="image-zoom-available img-responsive">
</div>
</section>
    