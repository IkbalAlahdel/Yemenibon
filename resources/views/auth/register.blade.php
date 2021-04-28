
 
  <link href= "{{asset('css/loginStyle.css')}} " rel="stylesheet">


  @if (session('status'))
      <div class="mb-4 font-medium text-sm text-green-600">
          {{ session('status') }}
      </div>
  @endif
  <div class="container-login100" style="background-image: url('asset/img/bg.png');">
    <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">


        <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
            @csrf
            <div>
                <span><img class="logo" src="{{asset('asset\img\logo.png')}}" alt="" srcset="" width="100" height="100"></span>
            </div>
            <span class="login100-form-title p-b-37">
                Register In System
            </span>
            <div class="wrap-input100 validate-input m-b-20">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="input100" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
					<span class="focus-input100"></span>
                </div>

            <div class="wrap-input100 validate-input m-b-20">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="input100" type="email" name="email" :value="old('email')" required />
					<span class="focus-input100"></span>
                </div>

            <div class="wrap-input100 validate-input m-b-20">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="input100" type="password" name="password" required autocomplete="new-password" />
					<span class="focus-input100"></span>
                </div>

            <div class="wrap-input100 validate-input m-b-20">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="input100" type="password" name="password_confirmation" required autocomplete="new-password" />
					<span class="focus-input100"></span>
                </div>

          

            <div class="container-login100-form-btn">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="login100-form-btn">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
   