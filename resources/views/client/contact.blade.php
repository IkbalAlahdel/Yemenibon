@include('client/header')
<style>
    .alert {
  
  background-color:#785445;
  color: #e3c47a;
  text-align: center;
  border-radius: 2px;
  padding: 16px;


}

#snackbar.show {
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {
    bottom: 0;
    opacity: 0;
  }
  to {
    bottom: 30px;
    opacity: 1;
  }
}

@keyframes fadein {
  from {
    bottom: 0;
    opacity: 0;
  }
  to {
    bottom: 30px;
    opacity: 1;
  }
}

@-webkit-keyframes fadeout {
  from {
    bottom: 30px;
    opacity: 1;
  }
  to {
    bottom: 0;
    opacity: 0;
  }
}

@keyframes fadeout {
  from {
    bottom: 30px;
    opacity: 1;
  }
  to {
    bottom: 0;
    opacity: 0;
  }
}
    </style>
<div class='blurImg'>
    <!-- style="background-image: url('https://images.unsplash.com/photo-1447933601403-0c6688de566e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=656&q=80')" -->
    <div class="page-bg"></div>
    <div class='blur' style="background-image: url('https://d262ilb51hltx0.cloudfront.net/fit/c/1600/1280/gradv/29/81/40/darken/50/blur/50/1*4ncz3hLxmL8E_bUh-0z62w.jpeg')"></div>
</div>
<!-- style="background-color: #e3c47a;" -->
<header class="pages-header">
    <div>
        <h1>
        {{__('client.header')}}        </h1>
        <p>
        {{__('client.header_p')}}        </p>
    </div>
</header>
<!-- id="contactform" -->
<div class="contact-wrapper">
    <div class="row f-con" id="contactform">
        <div class="form_container">
            <div class="contact-info">
                <h3 class="title">{{__('client.con_info')}}</h3>
                <p class="text"></p>
                <div class="info">
                    <div class="information">
                        <!-- <img src="{{asset('asset/img/logo.png')}}" alt="" class="con-icon"> -->
                        <svg class="con-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="456.449px" height="456.449px" viewBox="0 0 456.449 456.449" style="enable-background:new 0 0 456.449 456.449;" xml:space="preserve">
                            <g>
                                <g>
                                    <path d="M231.014,0c-6.553,0-13.385,0.218-19.994,0.635h-8.062c-2.184,0-4.326,0.467-6.378,1.404
			c-50.528,1.008-93.724,28.579-112.916,72.158c-18.829,42.747-9.796,91.305-1.366,124.111
			c19.377,75.426,63.452,156.46,122.164,225.632c-7.582-0.193-15.148-0.391-22.635-0.594c-12.37-0.33-24.74-0.655-37.115-0.95
			h-0.574c-11.101,0-17.004,7.607-17.09,15.122c-0.094,7.79,5.86,15.813,17.417,16.077c12.362,0.29,24.717,0.62,37.077,0.95
			c35.289,0.934,71.779,1.904,107.717,1.904c10.328,0,20.657-0.071,30.995-0.254c11.548-0.203,17.524-8.187,17.448-15.955
			c-0.065-7.576-5.992-15.244-17.626-15.244c0,0-0.005,0-0.01,0c-10.268,0.183-20.545,0.254-30.813,0.254
			c-8.333,0-16.696-0.062-25.074-0.152c62.672-66.75,107.449-162.638,118.139-254.605c4.007-34.408,2.26-83.776-28.776-123.549
			C329.247,15.797,288.02,0,231.014,0z M349.016,180.507c-12.415,82.999-56.146,170.411-114.563,229.418
			c-46.261-53.116-84.277-116.937-110.093-184.89c-17.237-45.377-23.135-83.22-18.024-115.709c7-44.448,45.499-75.497,93.63-75.497
			c0.952,0,1.901,0.01,3.295,0.043c2.257,0,4.4-0.454,6.38-1.353h5.408c1.023,0,2.069-0.114,3.171-0.348
			c4.281-0.183,8.586-0.281,12.89-0.281c45.768,0,78.201,12.037,99.168,36.81C350.271,92.322,356.577,129.938,349.016,180.507z" />
                                    <path d="M228.554,50.307c-0.988,0-1.973,0.01-2.623,0.043c-47.131-1.889-81.471,28.119-84.548,73.265
			c-3.532,51.691,43.158,90.035,88.981,93.409c2.021,0.152,4.062,0.224,6.094,0.224c0,0,0,0,0.005,0
			c45.209,0,88.215-35.03,93.917-76.5c2.858-20.804-2.777-40.001-16.306-55.518C295.58,64.015,262.01,50.307,228.554,50.307z
			 M296.388,137.801c-3.818,27.767-36.886,44.958-65.612,44.958c-33.405-0.145-53.301-28.262-53.243-55.363
			c0.041-20.69,11.949-42.8,45.237-42.8c0.629,0,1.259,0.005,2.003,0.025c0.175,0.01,0.353,0.015,0.521,0.01
			c0.929-0.025,1.871-0.041,2.818-0.041c18.533,0,45.238,5.802,59.501,22.161C295.088,115.32,298.033,125.773,296.388,137.801z" />
                                </g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                        @foreach ($configrations as $configration )

                        @if(Config::get('app.locale')=='en')
                            <p> {{$configration->address}}</p>

                 
                @elseif(Config::get('app.locale')=='ar')
                    <p> {{$configration->address_ar}}</p>
                  
                
                @endif
                @endforeach


                    </div>
                    <div class="information">
                        <svg class="con-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="187.383px" height="187.383px" viewBox="0 0 187.383 187.383" style="enable-background:new 0 0 187.383 187.383;" xml:space="preserve">
                            <g>
                                <path d="M185.439,57.992c-0.774-8.584,1.847-21.749-0.915-29.566c-0.238-0.673-0.819-1.223-1.514-1.316
		c-0.004-0.006-0.005-0.013-0.009-0.019c-4.027-5.607-15.182-3.842-20.966-3.96c-18.658-0.381-37.328-0.28-55.989-0.28
		c-33.891,0.002-68.694-1.656-102.487,1.42c-1.313,0.12-1.902,1.296-1.6,2.271c-0.946,0.565-1.572,1.644-1.233,3.143
		c4.997,22.128,5.212,45.077,4.736,67.658c-0.23,10.868-1.057,21.718-2.172,32.528c-0.885,8.579-4.695,18.537-2.739,27.061
		c0.464,2.023,3.465,3.104,4.998,1.57c12.18,8.393,38.403,5.012,51.832,5.479c16.529,0.575,32.902,1.101,49.439,0.979
		c17.874-0.133,35.762-0.398,53.613-1.353c5.741-0.307,19.281,0.98,22.239-5.886c0.514-1.189,0.283-2.519-0.359-3.503
		c1.52-4.409,0.918-9.561,0.849-14.196c-0.238-15.952,3.609-31.554,4.147-47.52C187.698,80.964,186.476,69.478,185.439,57.992z
		 M36.423,31.137c19.548,0.955,39.132,0.828,58.698,0.896c18.92,0.066,37.842,0.01,56.761,0.193
		c3.59,0.035,9.599-0.424,15.188-0.602c-7.161,6.984-13.86,17.846-17.642,22.165c-12.88,14.713-40.091,50.246-61.972,39.522
		C69.563,84.544,56.149,63.06,42.737,48.919c-5.342-5.632-13.147-14.26-21.671-18.277C26.326,30.906,31.589,30.9,36.423,31.137z
		 M22.178,40.666c8.307,6.547,15.188,15.044,22.118,22.965c7.578,8.664,15.782,19.925,25.355,28.519
		c-2.619,1.894-4.99,4.302-7.275,6.334c-8.156,7.258-15.834,15.076-23.644,22.699c-8.243,8.044-17.722,14.282-26.599,21.367
		c3.061-14.862,1.958-33.655,2.33-45.208C15.131,76.61,14.75,53.88,8.277,33.763C11.657,36.66,18.782,37.99,22.178,40.666z
		 M147.146,154.956c-15.618,0.577-31.256,0.72-46.884,0.818c-14.334,0.093-28.553-0.502-42.881-1.01
		c-10.314-0.365-20.628-0.685-30.94-1.108c-4.425-0.183-9.124-0.924-13.641-0.784c7.848-3.747,18.076-13.317,22.007-16.369
		c8.408-6.527,15.79-14.716,23.454-22.077c5.636-5.412,13.359-10.435,18.894-16.366c2.88,1.928,5.88,3.55,9.022,4.735
		c10.816,4.079,21.13,0.715,30.408-5.274c10.231,9.97,19.917,20.312,29.112,31.295c6.329,7.562,13.283,19.632,21.663,26.437
		C159.979,155.471,151.277,154.803,147.146,154.956z M174.915,123.819c-0.814,5.608-0.941,10.605-0.812,16.201
		c0.052,2.246,0.064,4.492,0.04,6.737c-0.002,0.803,0.002,1.43,0.011,1.982c-5.448-9.511-15.941-18.476-22.626-25.755
		c-9.396-10.232-19.456-20.033-30.425-28.611c6.467-4.884,12.34-10.739,17.396-15.77c7.745-7.705,15.206-15.668,22.341-23.938
		c3.392-3.931,10.645-15.718,15.921-20.449c-3.476,11.759,0.822,34.112,1.267,40.825C179.118,91.52,177.289,107.492,174.915,123.819
		z" />
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                        @foreach ($configrations as $configration )

                        <p> {{$configration->email}}</p>
                        @endforeach
                    </div>
                    <div class="information">
                        <svg style="margin-top: 10px; margin-right:-5px;" class="con-icon" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="189.655px" height="189.654px" viewBox="0 0 189.655 189.654" style="enable-background:new 0 0 189.655 189.654;" xml:space="preserve">
                            <g>
                                <path d="M181.017,135.642c-0.456-1.398-1.853-2.176-3.184-2.18c-9.084-11.336-26.941-31.829-43.641-29.404
		c-17.2,2.498-19.03,21.641-16.938,35.499c0.541,3.584,1.323,7.096,1.577,10.72c0.65,9.285-18.72,2.325-22.662,0.641
		c-14.161-6.049-26.037-17.867-34.953-30.139c-9.043-12.449-14.216-29.216-7.141-43.832c3.385-6.994,26.519-1.517,32.716-1.768
		c2.72-0.11,5.12-2.724,4.211-5.528c-8.073-24.925-31.087-37.67-43.435-59.488c-1.493-2.637-5.481-1.045-5.126,1.744
		C7.984,18.17,2.803,59.558,8.742,87.584c6.534,30.832,25.476,58.929,51.56,76.362c23.821,15.921,55.439,28.263,84.479,25.254
		C170.429,186.542,189.401,161.335,181.017,135.642z M37.914,19.821c1.816-1.533,3.666-3.067,5.529-4.641
		c7.054,19.678,27.882,31.89,36.895,51.174c-3.192-0.157-6.392-0.435-9.505-0.634c-6.78-7.24-13.413-13.821-19.169-22.26
		c-1.448-2.122-13.463-23.376-14.282-23.072C37.653,20.287,37.824,20.065,37.914,19.821z M173.27,149.021
		c-0.122-0.098-0.213-0.214-0.366-0.293c-15.048-7.751-28.879-13.744-39.383-27.79c-1.651-2.208-5.364-0.211-3.791,2.217
		c9.295,14.343,24.975,25.109,41.266,30.101c0.629,0.193,1.199,0.099,1.683-0.148c-0.94,5.674-2.538,11.143-6.444,16.164
		c-6.881,8.846-18.693,11.092-29.224,11.35c-24.354,0.597-49.481-10.452-69.811-22.923c-23.061-14.148-38.19-36.647-46.931-61.959
		c-5.084-14.725-7.026-30.668-3.651-45.962c2.631-11.927,9.508-19.616,17.648-26.811c0.253,4.307,4.119,9.905,5.836,12.968
		c4.236,7.558,9.173,14.671,14.47,21.517c1.81,2.34,4.049,5.457,6.607,8.183c-9.097,0.689-16.202,4.502-18.038,18.361
		c-3.924,29.618,18.253,54.982,41.631,70.109c10.881,7.041,41.849,18.25,42.568-3.829c0.357-10.942-5.236-20.704-0.026-31.476
		c9.58-19.809,37.008,12.9,44.558,20.643c0.764,0.783,1.586,1.178,2.389,1.292C173.884,143.517,173.606,146.285,173.27,149.021z" />
                                <path d="M153.932,85.528c-4.195-17.858-20.096-34.172-32.973-46.312c-5.921-5.582-13.099-11.917-20.825-14.833
		c-6.003-2.266-7.385-1.624-12.067,1.037c-0.663,0.377-0.2,1.327,0.499,1.183c2.13-0.439,8.58,4.214,10.448,5.369
		c6.612,4.084,12.325,9.827,17.742,15.34c11.145,11.343,23.108,25.317,27.786,40.805C146.36,94.132,155.37,91.641,153.932,85.528z" />
                                <path d="M151.961,41.038C136.067,22.715,112.812,8.994,90.497,0.143c-2.133-0.846-3.05,2.291-1.453,3.447
		c16.938,12.257,34.144,23.441,49.398,37.89c7.346,6.959,13.301,15.013,18.152,23.853c4.825,8.791,4.812,18.183,8.059,27.34
		c1.259,3.549,6.514,3.956,7.599,0C177.283,74.329,163.367,54.184,151.961,41.038z" />
                                <path d="M130.69,1.147c-2.712-0.955-4.379,3.218-1.931,4.578c10.264,5.704,19.39,12.75,26.556,22.121
		c6.225,8.141,9.022,17.33,13.93,26.094c2.12,3.786,9.229,2.391,8.654-2.344C174.998,27.742,151.979,8.645,130.69,1.147z" />
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                            <g>
                            </g>
                        </svg>
                        <span class="column">
                        @foreach ($configrations as $configration )

<p>+967 {{$configration->phone}}</p>
@endforeach
                            <!-- <p style="margin-top: -14px;">+967 777833433</p> -->
                        </span>
                    </div>
                </div>

                <div class="social-media">
                    <p>{{__('client.social')}}</p>
                    <div class="social-icon">
                    @foreach ($configrations as $configration )
                        <a href="{{$configration->facebook}}">
                            <img src="{{asset('asset/img/facebook-01.png')}}">
                        </a>
                        <a href="{{$configration->twitter}}">
                            <img src="{{asset('asset/img/twitter-01.png')}}">
                        </a>
                        <a href="{{$configration->instagram}}">
                            <img src="{{asset('asset/img/instagram-01.png')}}">
                        </a>
                        <a href="{{$configration->youtub}}">
                            <img src="{{asset('asset/img/youtube.png')}}">
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="contact-form">
                @if(session()->has('message_send'))
                <div class=" alert snackbar">
        {{ session()->get('message_send') }}
    </div>
@endif
                <form method="get" action="/send" name="contactform" autocomplete="on" onsubmit="return validateForm()">
                    <div class="col-md-12 input-container">
                        <label for="">
                        {{__('client.name')}}                            <!-- <span class="required">*</span> -->
                        </label>
                        <input type="text" name="name" class="input" placeholder="" />
                    </div>
                    <div class="col-md-12 input-container">
                        <label for="">
                        {{__('client.email')}}                            <!-- <span class="required">*</span> -->
                        </label>
                        <input type="email" name="email" class="input" placeholder="" />
                    </div>
                    <div class="col-md-12 input-container">
                        <label for="">
                        {{__('client.sub')}}                            <!-- <span class="required">*</span> -->
                        </label>
                        <input type="text" name="subject" class="input" placeholder="" />
                    </div>
                    <div class="col-md-12 input-container textarea">
                        <label for="">
                        {{__('client.msg')}}                            <!-- <span class="required">*</span> -->
                        </label>
                        <textarea name="message" class="input"></textarea>
                    </div>

                    <input type="submit" value="Submit" id="submit" class="btn" />
                </form>
            </div>
        </div>
    </div>
</div>
<!-- <div class="contact-wrapper">
    <div class="row form_container">
        <form method="post" action=" " name="contactform" id="contactform" autocomplete="on" onsubmit="return validateForm()">
            <div class="name_con col-md-6">
                <label for="username">
                    Your Name
                    <span class="required">*</span>
                </label>
                <input type="text" name="name" id="name" placeholder="" />
                <div id="message1"></div>
            </div>
            <div class="email_con col-md-6">
                <label for="usermail">
                    Your E-mail address
                    <span class="required">*</span>
                </label>
                <input type="email" name="email" id="email" placeholder="" />
                <div id="message2" class="alert"></div>
            </div>
            <div class="subject_con col-md-6">
                <label for="usersubject">
                    Subject
                    <span class="required">*</span>
                </label>
                <input type="text" name="subject" id="subject" placeholder="" />
                <div id="message3" class="alert"></div>
            </div>
            <div class="msg_con col-md-6">
                <label for="usermsg">
                    Message
                    <span class="required">*</span>
                </label>
                <input type="text" name="msg" id="msg" placeholder="" />
                <div id="message4" class="alert"></div>
            </div>
            <input type="submit" value="Submit" id="submit" />
        </form>
    </div>
</div> -->
<script>
  
  var snackbar = document.getElementById("snackbar")
  snackbar.className = "show";
  setTimeout(function() {
    snackbar.className = snackbar.className.replace("show", "");
  }, 3000);


    </script>
@include('client/footer')