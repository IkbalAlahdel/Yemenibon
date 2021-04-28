@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('staticpage.title')}} <span style="color:#5E3C23;">{{__('staticpage.title_2')}} </span> {{__('staticpage.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('staticpage.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('staticpage.link_title_2_add')}}</li>
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
    <form class="form-card" action="/admin/staticpages/store" method="POST" >
            @csrf

<!-- Text input-->
<div class="row m-x">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
<div class="form-group">
  <input  name="title" placeholder="Page Title" class="col-md-5 form-control input-md mx-3" style="font-size:15px;"  required type="text">
  </div>
  </div>
  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
<div class="form-group">
  <input  name="title_ar" placeholder="Page Arabic Title" class="col-md-5 form-control input-md mx-3" style="font-size:15px;"  required type="text">
  </div>
  </div>
  <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">

  <div class="form-group">
  <input id="status" value="1" class="col-md-1 mx-3 p-3" name="status" type="checkbox" style="font-size:15px;" >&nbsp; {{__('staticpage.add_active')}}
  </div>
  </div>
</div>


<div class="form-group" style="margin-left:3%;">
  <label class="control-label" for="p_content" style="font-size:18px;">{{__('staticpage.add_label_1')}}</label> 
  <div class="" style="margin-left:1%;">
  <textarea name="p_content" id="disc" cols="30" rows="10"> hello world</textarea>

  </div>
</div>

    <div class="form-group">
        <label class="mx-1 control-label"></label>
        <div class="">
        </div>
    </div>
    <div class="form-group" style="margin-left:3%;">
  <label class="control-label" for="p_content_ar" style="font-size:18px;">{{__('staticpage.add_label_1_ar')}}</label>  
  <div class="" style="margin-left:1%;">
  <textarea name="p_content_ar" id="disc2" cols="30" rows="10"> مرحبا ...</textarea>
  </div>
</div>
<div class="form-group">
        <label class="mx-1 control-label"></label>
        <div class="">
        </div>
    </div>
<!-- Button -->
<div class="form-group m-5">
  <div class="form-actions m-5 col-12">
    <button type="submit"  class="btn btn-primary col-12 mx-auto btn-color" style="color:white;font-size:14px;">{{__('staticpage.add_btn')}}</button>
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














