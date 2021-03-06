@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('article.title')}} <span style="color:#5E3C23;">{{__('article.title_2')}} </span> {{__('article.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('article.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('article.link_title_2_add')}}</li>
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
    <form class="form-card" action="/admin/articles/store" method="POST" enctype="multipart/form-data">
            @csrf

<!-- Text input-->
<div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 m-5">
<div class="form-group">
  <!-- <input type="file" name="image" class="col-md-4 form-control input-md mx-3"   id="gallery-logo-add" style="font-size:15px;"  accept="image/*" required > -->
  <input  name="image" type="file" placeholder="article Name"  id="gallery-logo-add" class="col-md-4 form-control input-md mx-3" style="font-size:15px;" accept="image/*" required  >
<div class="gallery2"></div>
  </div>
  </div>
</div>
<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">

<div class="form-group">
  <input  name="article_name" placeholder="article Name" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">

<div class="form-group">
  <input  name="name_ar" placeholder="article Arabic Name" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row my-5">

 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
 <div class="form-group">
  <select class="form-control col-md-4 mx-3" name="category_id" style="font-size:15px;">
      @foreach($category as $cat)
      <option style="color:black;" value="{{ $cat->id }} ">{{$cat->name }}</option>
      @endforeach
    </select> 
    </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
<input  name="date"  class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="date">
  </div>
  </div>
</div>
<div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 ">

<div class="form-group">
  <input  name="desc" placeholder="article description" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 ">

<div class="form-group">
  <input  name="desc_ar" placeholder="article Arabic description" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
<div class="row">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
<div class="form-group" style="">
  <label class="control-label" for="article" style="font-size:18px;">{{__('article.add_label_1')}}</label>  </div>
  <div class="" style="">
  <textarea name="article" id="disc" cols="20" rows="10"> hello world</textarea>

  </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
<div class="form-group" >
  <label class="control-label" for="article_ar" style="font-size:18px;">{{__('article.add_label_1_ar')}}</label>  </div>
  <div class="" >
  <textarea name="article_ar" id="disc2" cols="30" rows="10"> ?????????? ..???????????? ????????????</textarea>
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
  <input  name="publisher" placeholder="Article publisher" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="publisher_ar" placeholder="Article Arabic publisher" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="qoute" placeholder="article qoute" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="qoute_ar" placeholder="article arabic qoute" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-5">
<div class="form-group">
  <input  name="source_url" placeholder="article source_url" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>



<!-- Button -->
<div class="form-group col-12 mt-4 mx-5">
  <div class="form-actions "  style=" margin-left:1%;">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px;"> {{__('article.add_btn')}}</button>
  </div>
  </div>
   
    </form>
    </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <script>
$(function() {
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














