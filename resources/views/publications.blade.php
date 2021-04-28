@forelse ($projects as $project )
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
</div>
@empty
<h2 class="text-center">No Data Available</h2>
@endforelse