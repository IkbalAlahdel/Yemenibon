@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('content.title')}} <span style="color:#5E3C23;">{{__('content.title_2')}} </span> {{__('content.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('content.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('content.link_title_2_add')}}</li>
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
    <form class="form-card" action="/admin/contents/store" method="POST" enctype="multipart/form-data">
            @csrf

<!-- Text input-->
<div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">
<div class="form-group">
  <input type="file" name="pdf" accept=".pdf" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  type="text">
  </div>
  </div>
</div>
<div class="row ">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

<div class="form-group">
  <input  name="title" placeholder="Page Title" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

<div class="form-group">
  <input  name="title_ar" placeholder="Page Arabic Title" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row my-5">

 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
 <div class="form-group">
  <select class="form-control col-md-4 mx-3" name="category_id" style="font-size:15px;">
      @foreach($category as $cat)
      <option style="color:black;" value="{{ $cat->id }} ">{{$cat->name }}</option>
      @endforeach
    </select> 
    </div>
 </div>
 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
<div class="form-group">
     <input id="status" value="1" class="col-md-4  mt-5" name="status" type="checkbox" style="font-size:15px;" >&nbsp; {{__('content.add_active')}}
  </div>
  </div>
</div>
<div class="row">
<div class="form-group" style="margin-left:1%;">
  <label class="control-label" for="data" style="font-size:18px;">{{__('content.add_label_1')}}</label>  </div>
  <div class="" style="margin-left:1%;">
  <textarea name="data" id="disc" cols="20" rows="10"> hello world</textarea>

  </div>
</div>
</div>
<div class="row ">
<div class="form-group" style="margin-left:1%;">
  <label class="control-label" for="data_ar" style="font-size:18px;">{{__('content.add_label_1_ar')}}</label>  </div>
  <div class="" style="margin-left:1%;">
  <textarea name="data_ar" id="disc2" cols="30" rows="10"> مرحبا ..لاضافه العربي</textarea>
  </div>
  </div>
</div>

    <div class="form-group">
        <label class="mx-1 control-label"></label>
        <div class="">
        </div>
    </div>


<!-- Button -->
<div class="form-group col-12 mt-4 mx-5">
  <div class="form-actions "  style=" margin-left:1%;">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px;"> {{__('content.add_btn')}}</button>
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














