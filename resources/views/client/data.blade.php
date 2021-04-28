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