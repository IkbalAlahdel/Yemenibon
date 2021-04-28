@extends('layouts.master')
@section('content')

<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('config.title')}} <span style="color:#5E3C23;">{{__('config.title_2')}} </span> {{__('config.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('config.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('config.link_title_2_add')}}</li>
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
    <form class="form-card" action="/admin/configrations/store" method="POST" >
            @csrf
<div >
<div class="text-left m-5 py-5"> <h2 class="mb-4"><b> {{__('config.smt')}}  </b> </h2><div>
<!-- Text input-->
<div class="row mb-4 mt-5 py-1">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">

<div class="form-group">
<input  name="facebook" placeholder="facebook link" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div> 
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">

<div class="form-group">
<input name="twitter" placeholder="twitter link" class="col-md-4 form-control mx-3" style="font-size:15px;" required type="text">
 </div>
 </div> 
  </div> 

  <div class="row mb-4 mt-5 py-1">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">

<div class="form-group">
<input  name="instagram" placeholder="instagram link" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div> 
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">

<div class="form-group">
<input  name="youtub" placeholder="youtub link" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div> 
  </div> 



</div>

<div class="text-left"> <h2 class="mb-4 mt-5 py-5"><b> {{__('config.cinf')}}  </b> </h2><div>
<!-- Text input-->
<div class="row mb-4 mt-5">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

<div class="form-group">
<input  name="address" placeholder="address" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div> 
 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

<div class="form-group">
<input  name="address_ar" placeholder="address Arabic" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div> 
 </div> 
 <div class="row mb-4 mt-5">
 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

<div class="form-group">
<input  name="email" placeholder="email" type="email" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div> 
 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">

<div class="form-group">
<input  name="phone" placeholder="phone number" class="col-md-3 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div> 
  </div> 



<!-- Button -->
<div class="form-group m-3">
  <div class="form-actions col-12">
    <button type="submit"  class="btn btn-primary col-3 mt-5 btn-color" style="color:white;font-size:14px;">{{__('config.add_btn')}} </button>
  </div>
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