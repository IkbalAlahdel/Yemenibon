@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row " >
<div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('content.title')}} <span style="color:#5E3C23;">{{__('content.title_2')}} </span> {{__('content.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('content.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('content.link_title_2_edit')}}</li>
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
    <form action="/admin/contents/update/{{$content->id}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <!-- Text input-->
        <div class="row ">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
<div class="form-group">
  <input type="file" name="pdf" accept=".pdf" value="{{$content->pdf }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  type="text">
  </div>
  </div>
</div>



<div class="row ">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

<div class="form-group">
  <input  name="title" placeholder="Page Title" value="{{$content->title }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">

<div class="form-group">
  <input  name="title_ar" placeholder="Page Arabic Title" value="{{$content->title_ar }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row my-5">

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
<div class="form-group">
 <select class="form-control col-md-4 mx-3" name="category_id" style="font-size:15px;">
     @foreach($category as $cat)
     <option style="color:black;" value="{{ $cat->id }}" {{$cat->id==$content->category_id?'selected':''}}>{{$cat->name }}</option>
     @endforeach
   </select> 
   </div>
</div>
</div>



    



<!-- Text input-->

  <div class="form-group" style="margin-left:1%;">
  <label class="control-label" for="data"></label>  </div>
  <div class="" style="margin-left:1%;">
  <textarea name="data" id="disc" cols="30" rows="10">  {{$content->data }}</textarea>
  </div>
  <div class="form-group" style="margin-left:1%;">
  <label class="control-label" for="data_ar"></label>  </div>
  <div class="" style="margin-left:1%;">
  <textarea name="data_ar" id="disc2" cols="30" rows="10">  {{$content->data_ar }}</textarea>
  </div>
  
<!-- Button -->
<div class="form-group col-12 mt-4">
  <div class="form-actions "  style=" margin-left:1%;">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px;">{{__('content.edit_btn')}}</button>
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