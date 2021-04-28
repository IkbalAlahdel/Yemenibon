@extends('layouts.master')
@section('content')

<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('adminuser.title')}} <span style="color:#5E3C23;">{{__('adminuser.title_2')}}</span> {{__('adminuser.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb" style="background-color:white;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('adminuser.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page" >{{__('adminuser.link_title_2_add')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form method="POST" action="/admin/users/store">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}"  style="font-size:15px;"/>
                <x-jet-input id="name" class="block mt-1 w-full form-control col-5" style="font-size:15px; width:50%;" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}"  style="font-size:15px;"/>
                <x-jet-input id="email" class="block mt-1 w-full form-control col-5" style="font-size:15px;width:50%;" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}"  style="font-size:15px;"/>
                <x-jet-input id="password" class="block mt-1 w-full form-control col-5" style="font-size:15px;width:50%;" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}"  style="font-size:15px;width:50%;"/>
                <x-jet-input id="password_confirmation" class="block mt-1 w-full form-control col-5" style="font-size:15px; width:50%;" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4 text-left">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex mt-4"  >


                <x-jet-button class="ml-4" style="font-size:12px; color: WHITE;
    border-radius: 4px;
    -webkit-border-radius: 4px;
    border: 1px solid #5E3C23 !important;
    padding: 10px 30px;
    margin-right: 15px;
    background: #5E3C23;
    margin-top: 15px;">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
        
    </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <script src="{{asset('lib/common-scripts.js')}}"></script>

@endsection