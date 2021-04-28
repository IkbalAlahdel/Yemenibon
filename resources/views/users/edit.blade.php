@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row " >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('adminuser.title')}} <span style="color:#5E3C23;">{{__('adminuser.title_2')}} </span> {{__('adminuser.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('adminuser.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('adminuser.link_title_2_edit')}}</li>
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

    <form action="/admin/users/update/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')
        <!-- Text input-->
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">

<div class="form-group">
  <label class="control-label m-3" for="name">{{__('adminuser.edit_name')}} </label>  
  <div class="">
  <input  name="name" placeholder="Name" value="{{$user->name }}" class="col-md-5 form-control input-md mx-3" style="font-size:15px;"  required type="text">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="control-label text-left" style="margin-top:0px;"> </label>  
  <div class="">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="control-label m-3" for="email">{{__('adminuser.edit_email')}}</label>  
  <div class="">
  <input name="email" placeholder="email" type="email" value="{{$user->email }}" class="col-md-8 form-control mx-3" style="font-size:15px;" required type="text">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="control-label text-left" style="margin-top:0px;"> </label>  
  <div class="">
  </div>
</div>





<!-- Button -->
<div class="form-group">
  <div class="form-actions m-5 col-12">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px; margin-top:5%;">{{__('adminuser.edit_btn')}}</button>
  </div>
  </div>
    </form>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <script src="{{asset('lib/common-scripts.js')}}"></script>

@endsection