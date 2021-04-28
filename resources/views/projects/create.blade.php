@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('project.title')}} <span style="color:#5E3C23;">{{__('project.title_2')}} </span> {{__('project.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('project.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('project.link_title_2_add')}}</li>
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
    <form class="form-card" action="/admin/projects/store" method="POST" enctype="multipart/form-data">
            @csrf
<!-- Text input-->
<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<label class="control-label m-3" for="image">{{__('project.logo_add')}} </label>  
<input type="file" name="image" class="col-md-4 form-control input-md mx-3"   id="gallery-logo-add" style="font-size:15px;"  accept="image/*" required type="text">
<div class="gallery2"></div>
 </div>
  </div>
  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<label class="control-label m-3" for="image">{{__('project.img_add')}}</label>  
<input type="file" name="multi_image[]" accept="image/*" multiple="multiple" id="gallery-photo-add" class="form-control input-md mx-3">
<div class="gallery"></div>
 </div>
  </div>
</div>
            <!-- <div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 m-5">
<div class="form-group">
<label class="control-label m-3" for="image">{{__('category.add_label_1_ar')}}</label>  
<input type="file" name="multi_image[]" accept="image/*" multiple="multiple" class="form-control input-md mx-3">
  </div>
  </div>
</div> -->

<div class="row ">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 m-5">
<div class="form-group">
  <input  name="title" placeholder="Project Title" class="col-md-4 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 m-5">
<div class="form-group">
  <input  name="title_ar" placeholder="Project Arabic Title" class="col-md-4 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 m-5">
 <div class="form-group">
  <select class="form-control col-md-4" name="category_id" style="font-size:15px; line-height:15px; height:37px;">
      @foreach($category as $cat)
      <option style="color:black;" value="{{ $cat->id }} ">{{$cat->name }}</option>
      @endforeach
    </select> 
    </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="desc" placeholder="Project Description" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="desc_ar" placeholder="Project Arabic Description" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <textarea  name="ldesc" placeholder="Project Long Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
</textarea> 
</div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <textarea  name="ldesc_ar" placeholder="Project Long Arabic Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
</textarea> 
</div>
 </div>
 </div>
 <!-- <div class="row ">
 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 m-5">
<div class="form-group">
  <input  name="desc_ar" placeholder="Project Arabic Description" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 m-5">
<div class="form-group">
  <textarea  name="ldesc_ar" placeholder="Project Long Arabic Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
</textarea> 
</div>
 </div>
 </div> -->

 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="owner" placeholder="Owner Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="owner_ar" placeholder="Owner Arabic Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="address" placeholder="Project Address" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="address_ar" placeholder="Project Arabic Address" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="phone" placeholder="Project Phone Number" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="email" placeholder="Project Email " class="col-md-8 form-control input-md mx-1 fo" type="email" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="website" placeholder="Project Website" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<input  name="face_link" placeholder="Project Facebook Link" class="col-md-8 form-control mx-3 input-md fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="twit_link" placeholder="Project Twitter link" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<input  name="insta_link" placeholder="Project Instagram Link" class="col-md-8 form-control mx-3 input-md fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 m-5">
<div class="form-group">
<input  name="shift_h" placeholder="Project Shift-Hours" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>


<!-- Button -->
<div class="form-group col-12 mt-4 mx-5">
  <div class="form-actions "  style=" margin-left:1%;">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px;">{{__('project.add_btn')}}</button>
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














