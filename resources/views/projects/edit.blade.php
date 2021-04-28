@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row " >
<div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('project.title')}} <span style="color:#5E3C23;">{{__('project.title_2')}} </span>{{__('project.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('project.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('project.link_title_2_edit')}}</li>
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
    <form action="/admin/projects/update/{{$project->id}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <!-- Text input-->

<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<label class="control-label m-3" for="image">{{__('project.logo_edit')}}</label>  
<input type="file" name="image" value="{{$project->image }}"  id="gallery-logo-add"  class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  accept="image/*" required type="text">
<div class="gallery2"></div>
 </div>
  </div>
  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<label class="control-label m-3" for="image">{{__('project.img_edit')}}</label>  
<input type="file" name="multi_image[]" value="{{$project->multi_image }}" id="gallery-photo-add" accept="image/*" multiple="multiple" class="form-control input-md mx-3">
<div class="gallery"></div>
 </div>
  </div>
</div>
<div class="row ">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 m-5">
<div class="form-group">
  <input  name="title" value="{{$project->title }}" placeholder="Project Title" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4 m-5">
<div class="form-group">
  <input  name="title_ar" value="{{$project->title_ar }}" placeholder="Project Arabic Title" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3 m-5">
 <div class="form-group">
  <select class="form-control col-md-4" name="category_id" style="font-size:15px; line-height:15px; height:37px;">
  @foreach($category as $cat)
      <option style="color:black;" value="{{ $cat->id }} "{{$cat->id==$project->category_id?'selected':''}}>{{$cat->name }}</option>
      @endforeach
    </select> 
    </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="desc" placeholder="Project Description" value="{{$project->desc }}" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="desc_ar" placeholder="Project Arabic Description" value="{{$project->desc_ar }}" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <textarea  name="ldesc" placeholder="Project Long Description" value="{{$project->ldesc }}" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
</textarea> 
</div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <textarea  name="ldesc_ar" value="{{$project->ldesc_ar }}" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
</textarea> 
</div>
 </div>
 </div>
 
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="owner" placeholder="Owner Name" value="{{$project->owner }}" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="owner_ar" placeholder="Owner Arabic Name" value="{{$project->owner_ar }}" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="address" placeholder="Project Address" value="{{$project->address }}" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="address_ar" placeholder="Project Arabic Address" value="{{$project->address_ar }}" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="phone" placeholder="Project Phone Number" value="{{$project->phone }}"class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="email" placeholder="Project Email " value="{{$project->email }}" class="col-md-8 form-control input-md mx-1 fo" type="email" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="website" placeholder="Project Website" value="{{$project->website }}" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<input  name="face_link" placeholder="Project Facebook Link" value="{{$project->face_link }}" class="col-md-8 form-control mx-3 input-md fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="twit_link" placeholder="Project Twitter link" value="{{$project->twit_link }}" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<input  name="insta_link" placeholder="Project Instagram Link" value="{{$project->insta_link }}"class="col-md-8 form-control mx-3 input-md fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6 m-5">
<div class="form-group">
<input  name="shift_h" placeholder="Project Shift-Hours" value="{{$project->shift_h }}" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>

      
<!-- Button -->
<div class="form-group col-12 mt-4">
  <div class="form-actions "  style=" margin-left:1%;">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px;">{{__('project.edit_btn')}}</button>
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