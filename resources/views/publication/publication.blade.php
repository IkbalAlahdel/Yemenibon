@include('client/header')
<div class='blurImg'>
    <!-- style="background-image: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=656&q=80')" -->
    <div class="page-bg"></div>
    <div class='blur' style="background-image: url('https://d262ilb51hltx0.cloudfront.net/fit/c/1600/1280/gradv/29/81/40/darken/50/blur/50/1*4ncz3hLxmL8E_bUh-0z62w.jpeg')"></div>
</div>
<!-- style="background-color: #e3c47a;" -->
<header class="pages-header">
    <div>
        <!-- <img class="project-img" src="{{asset('asset/img/pro1.jpg')}}" alt="" srcset=""> -->
        <h1>
            Publication
        </h1>
        <p>
            The coffee is not just a drink, its a story!
        </p>
    </div>
</header>

<main id="content" class="main">
    <section id="publication-wrrapper" class="content">

        <div class="publication-container">
        <!-- <div class="layer-pg" style="background-image: url('../img/bg.png');
    background-repeat: no-repeat;
    background-size: contain;">                     
        </div> -->
             <div class="text-center">
                <!-- <h1 class="title">Flexbox Grid</h1> -->
                <div class="filter-wrapper">
                    <div class="flex">
                        <a href="/publication" class="active-filter" data-rel="all">All</a>
                        <a href="#" data-rel="pdf">PDF</a>
                        <a href="#" data-rel="articals">Articals</a>
                        <a href="#" data-rel="interviews">Interviews</a>
                        
                    </div>
                </div>
                <!-- <h2 class="subheading" data-breakpoint></h2> -->
            </div>
            <br>
    
            <div class="flex"  id="publication">
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 scale-anm all pdf">
                    <div class="pubpanel">
                        <div class="cardpub-in">
                            <div class="layer-type">
                                <p>pdf</p>
                            </div>
                            <img class="cardpub-img" src="{{asset('asset/img/t13.JPG')}}" alt="" srcset="">
                            <h4>Title</h4>
                            <p>20/02/2020</p>
                            
                            <a href="pdfs" class="show-pub-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>
               

                
               
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 scale-anm all pdf">
                <div class="pubpanel">
                        <div class="cardpub-in">
                        <div class="layer-type">
                                <p>pdf</p>
                            </div>
                            <img class="cardpub-img" src="{{asset('asset/img/t2.JPG')}}" alt="" srcset="">
                            <h4>Title</h4>
                            <p>02/02/2020</p>
                            
                            <a href="pdfs" class="show-pub-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 scale-anm all articals">
                    <div class="pubpanel">
                        <div class="cardpub-in">
                        <div class="layer-type">
                                <p>Articles</p>
                            </div>
                            <img class="cardpub-img" src="{{asset('asset/img/t2.JPG')}}" alt="" srcset="">
                            <h4>Title</h4>
                            <p>20/02/2020</p>
                           
                            <a href="articles" class="show-pub-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 scale-anm all articals">
                    <div class="pubpanel">
                        <div class="cardpub-in">
                        <div class="layer-type">
                                <p>Articles</p>
                            </div>
                            <img class="cardpub-img" src="{{asset('asset/img/t9.JPG')}}" alt="" srcset="">
                            <h4>Title</h4>
                            <p>02/02/2020</p>
                            
                            <a href="articles" class="show-pub-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 scale-anm all interviews">
                    <div class="pubpanel">
                        <div class="cardpub-in">
                        <div class="layer-type">
                                <p>Interviews</p>
                            </div>
                            <img class="cardpub-img" src="{{asset('asset/img/t13.JPG')}}" alt="" srcset="">
                            <h4>Title</h4>
                            <p>20/02/2020</p>
                            
                            <a href="interview" class="show-pub-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>
         
                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 scale-anm all interviews">
                    <div class="pubpanel">
                        <div class="cardpub-in">
                        <div class="layer-type">
                                <p>Interviews</p>
                            </div>
                            <img class="cardpub-img" src="{{asset('asset/img/t6.JPG')}}" alt="" srcset="">
                            <h4>Title</h4>
                            <p>02/02/2020</p>
                            
                            <a href="interview" class="show-pub-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 scale-anm all interviews">
                    <div class="pubpanel">
                        <div class="cardpub-in">
                        <div class="layer-type">
                                <p>Interviews</p>
                            </div>
                            <img class="cardpub-img" src="{{asset('asset/img/t9.JPG')}}" alt="" srcset="">
                            <h4>Title</h4>
                            <p>10/02/2020</p>
                            
                            <a href="interview" class="show-pub-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 scale-anm all pdf">
                    <div class="pubpanel">
                        <div class="cardpub-in">
                        <div class="layer-type">
                                <p>pdf</p>
                            </div>
                            <img class="cardpub-img" src="{{asset('asset/img/t13.JPG')}}" alt="" srcset="">
                            <h4>Title</h4>
                            <p>30/02/2020</p>
                            
                            <a href="pdfs" class="show-pub-btn">
                                <div>show details</div>
                            </a>
                        </div>
                    </div>
                </div>
    </section>

   

    
</main>




@include('client/footer')