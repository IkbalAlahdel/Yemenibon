@forelse ($projects as $project )
<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
    <div class="panel">
        <div class="card-in" >
            <img class="card-img-border" src="{{ asset('asset/img/c1.png') }}" alt="" srcset="">
            <img class="card-img" src="{{ asset('images/'.$project->image) }}" alt="" srcset="">
           @if(Config::get('app.locale')=='en')
            <h1>{{$project->title}}</h1>
            <p>{{$project->desc}} </p>
                @else
                <h1>{{$project->title_ar}}</h1>
                <p>{{$project->desc_ar}} </p>
                @endif
           
            <a href="/details/{{$project->id}}" class="show-pro-btn">
                <div>{{__('client.show_detail')}}</div>
            </a>
            {{-- <a href="project-details" class="show-pro-btn">
                <div>show details</div>
            </a> --}}
           
        </div>
    </div>
    <div class="back-panel"></div>
</div>
@empty
<h2 class="text-center">No Data Available</h2>
@endforelse