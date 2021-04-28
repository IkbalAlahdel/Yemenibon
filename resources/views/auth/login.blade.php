      
  <link href= "{{asset('css/loginStyle.css')}} " rel="stylesheet">


        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="container-login100" style="background-image: url('asset/img/bg.png');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <form method="POST" action="{{ route('login') }}" class="login100-form validate-form">
            @csrf
            <div>
                <span><img class="logo" src="{{asset('asset\img\logo.png')}}" alt="" srcset="" width="100" height="100"></span>
            </div>
            <span class="login100-form-title p-b-37">
                Log In System
            </span>
            <div class="wrap-input100 validate-input m-b-20">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="input100"  type="email" name="email" :value="old('email')" required autofocus />
					<span class="focus-input100"></span>
           
            </div>

            <div  class="wrap-input100 validate-input m-b-20">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input  class="input100"  type="password" name="password" required autocomplete="current-password" />
					<span class="focus-input100"></span>
            
            </div>

           

            <div class="container-login100-form-btn">
               
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                    {{ __('Creat Account') }}
                </a>

                <x-jet-button class="login100-form-btn">
                    {{ __('Login') }}
                </x-jet-button>
            </div>
        </form>
            </div>
        </div>
    
<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script><!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/animations/2.1/js/animations.min.js" integrity="sha512-Jb1xPasilz4CRWpHF6CQPrVq8ar/oOGD+IYRc02srqssq/X4jdGb4tEq2mklHHiS3SKpFzU8RerqdbGhQGFomQ==" crossorigin="anonymous"></script>
<!--===============================================================================================-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.1/umd/popper.min.js" integrity="sha512-g2PN+aYR0KupTVwea5Ppqw4bxWLLypWdd+h7E0ydT8zF+/Y2Qpk8Y1SnzVw6ZCVJPrgB/91s3VfhVhP7Y4+ucw==" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script><!--===============================================================================================-->

<!--===============================================================================================-->
	