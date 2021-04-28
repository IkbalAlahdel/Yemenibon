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

        <div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 m-5">
<div class="form-group">
  <!-- <input type="file" name="image" class="col-md-4 form-control input-md mx-3"   id="gallery-logo-add" style="font-size:15px;"  accept="image/*" required > -->
  <input  name="img" type="file" placeholder="interview Name"  value="{{$interview->img }}" id="gallery-logo-add" class="col-md-4 form-control input-md mx-3" style="font-size:15px;" accept="image/*" required required >

<div class="gallery2"></div>
  </div>
  </div>
</div>
<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">

<div class="form-group">
  <input  name="name" placeholder="interview Name"  value="{{$interview->name }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">

<div class="form-group">
  <input  name="name_ar" placeholder="interview Arabic Name"  value="{{$interview->name_ar }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row my-5">

 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
 <div class="form-group">
  <select class="form-control col-md-4 mx-3" name="category_id" style="font-size:15px;">
      @foreach($category as $cat)
      <option style="color:black;" value="{{ $cat->id }}" {{$cat->id==$interview->category_id?'selected':''}}>{{$cat->name }}</option>
      @endforeach
    </select> 
    </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
<input  name="date"   value="{{$interview->date }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="date">
  </div>
  </div>
</div>
<div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 ">

<div class="form-group">
  <input  name="desc" placeholder="interview description"  value="{{$interview->desc }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 ">

<div class="form-group">
  <input  name="desc_ar" placeholder="interview Arabic description"  value="{{$interview->desc_ar }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
<div class="form-group" style="">
  <label class="control-label" for="interview" style="font-size:18px;">{{__('interview.add_label_1')}}</label>  </div>
  <div class="" style="">
  <textarea name="interview"  value="{{$interview->interview }}" id="disc" cols="20" rows="10"> hello world</textarea>

  </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
<div class="form-group" >
  <label class="control-label" for="interview_ar" style="font-size:18px;">{{__('interview.add_label_1_ar')}}</label>  </div>
  <div class="" >
  <textarea name="interview_ar"  value="{{$interview->interview_ar }}" id="disc2" cols="30" rows="10"> مرحبا ..لاضافه العربي</textarea>
  </div>
  </div>
  </div>
<div class="form-group">
        <label class="mx-1 control-label"></label>
        <div class="">
        </div>
    </div>
    <div class="row ">
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="interviewer" placeholder="interview interviewer" value="{{$interview->interviewer }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="interviewer_ar" placeholder="interview Arabic interviewer" value="{{$interview->interviewer_ar }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-5">
<div class="form-group">
  <input  name="voice" placeholder="interview voice" value="{{$interview->voice }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
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