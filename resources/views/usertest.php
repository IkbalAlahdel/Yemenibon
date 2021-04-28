@include('client/header')
<script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @livewireStyles


    <div class="swiper-container">
        <div class="swiper-indicator">
            <div class="swiper-indicator__progress"></div>
        </div>
        <div class="swiper-wrapper">
                        @livewire('home')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    <script type="text/javascript">
        window.onscroll = function(ev) {
            if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
                window.livewire.emit('load-more');
            }
        };
   </script>
@include('client/footer')

</body>
</html>
