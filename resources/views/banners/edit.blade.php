@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row " >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('Banner.title')}}<span style="color:#5E3C23;">{{__('Banner.title_2')}}</span> {{__('Banner.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('Banner.link_title')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Banner.link_title_2_edit')}}</li>
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

    <form action="/admin/banners/update/{{$banner->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <!-- Text input-->

        <div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 m-5">
<div class="form-group">
<!-- <input type="file" name="image" value="{{$banner->image }}" class="col-md-4 form-control input-md mx-3" onchange="readURL(this);" style="font-size:15px;"  accept="image/*"  type="text">
<img id="blah" src="http://placehold.it/180" alt="your image" width="100px" /> -->
<input type="file" name="image" value="{{$banner->image }}" class="col-md-4 form-control input-md mx-3"   id="gallery-logo-add" style="font-size:15px;"  accept="image/*" required type="text">
<div class="gallery2"></div>
</div>
  </div>
</div>
<div class="row ">
<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-4 m-5">
<div class="form-group">
  <input  name="title" placeholder="Image Title" value="{{$banner->title }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7 m-5">
<div class="form-group">
  <input  name="desc" placeholder="Image Description"  value="{{$banner->desc }}" class="col-md-8 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
<div class="col-xl-5 col-lg-4 col-md-4 col-sm-4 col-4 m-5">
<div class="form-group">
  <input  name="title_ar" placeholder="Image Title" value="{{$banner->title_ar }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-7 m-5">
<div class="form-group">
  <input  name="desc_ar" placeholder="Image Description"  value="{{$banner->desc_ar }}" class="col-md-8 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-4 m-5">
 <div class="form-group">
  <input  name="link" placeholder="Project Link" value="{{$banner->link }}" class="col-md-8 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>

<!-- Button -->
<!-- <div class="form-group ml-8 m-5" style="margin-top:1%;">

        <div class="form-group ml-7">

  <div class="row">
  <div class="col-12">
  <input type="file" name="image1" value="{{$banner->image }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  accept="image/*" type="text">
  </div>
  </div>
</div>
<div class="row ">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 m-5">

<div class="form-group">
  <input  name="title" value="{{$banner->title }}" placeholder="Image Title" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 m-5">

<div class="form-group">
  <input  name="desc" value="{{$banner->desc }}" placeholder="Image Description" class="col-md-8 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
<div class="row">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">

<div class="form-group">
  <input  name="link" value="{{$banner->link }}" placeholder="Image Link" class="col-md-8 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div> -->

<!-- Button -->
<div class="form-group ml-8 m-5" style="margin-top:1%;">
  <div class="form-actions col-12">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px;">{{__('Banner.edit_btn')}}</button>
  </div>
  </div>
    </form>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <script>
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
    $('#gallery-logo-add').on('change', function() {
        imagesPreview(this, 'div.gallery2');
    });
});</script>
    <script src="{{asset('lib/common-scripts.js')}}"></script>

@endsection