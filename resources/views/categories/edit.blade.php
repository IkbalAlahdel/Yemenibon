@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row " >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('category.title')}} <span style="color:#5E3C23;">{{__('category.title_2')}} </span> {{__('category.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('category.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('category.link_title_2_edit')}}</li>
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

    <form action="/admin/categories/update/{{$category->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
        <!-- Text input-->
<div class="form-group">
  <label class="control-label m-3" for="name">{{__('category.edit_label_1')}}</label>  
  <div class="">
  <input  name="name" placeholder="Name" value="{{$category->name }}" class="col-md-10 form-control input-md mx-3" style="font-size:15px;"  required type="text">
  </div>
  </div>
  </div>
  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
        <!-- Text input-->
<div class="form-group">
  <label class="control-label m-3" for="name_ar">{{__('category.edit_label_1_ar')}}</label>  
  <div class="">
  <input  name="name_ar" placeholder="Name (arabic)" value="{{$category->name }}" class="col-md-10 form-control input-md mx-3" style="font-size:15px;"  required type="text">
  </div>
  </div>
  </div>
  </div>
  <div class="row ">
<!-- Text input-->
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5">
 <div class="form-group">
  <select class="form-control col-md-4" name="catatype_id" style="font-size:15px;margin-top:10%;">
  @foreach($catatype as $cat)
      <option style="color:black;" value="{{ $cat->id }} " {{$cat->id==$category->catatype_id?'selected':''}}>{{$cat->type }}</option>
      @endforeach
    </select> 
    </div>
 </div>
 </div>



<!-- Button -->
<div class="form-group">
  <div class="form-actions mx-5 col-12">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px; margin-top:5%;">{{__('category.edit_btn')}}</button>
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