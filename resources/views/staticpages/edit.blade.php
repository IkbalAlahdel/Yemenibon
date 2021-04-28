@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row " >
<div class="col-xl-12 col-lg-12 col-md-8 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('staticpage.title')}} <span style="color:#5E3C23;">{{__('staticpage.title_2')}} </span>{{__('staticpage.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('staticpage.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('staticpage.link_title_2_edit')}}</li>
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

    <form action="/admin/staticpages/update/{{$staticpage->id}}" method="POST">
        @csrf
        @method('PUT')
        <!-- Text input-->
        <div class="row m-x">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">
<div class="form-group">
  <label class="control-label m-3" for="title">{{__('staticpage.edit_name')}}</label>  
  <input  name="title" placeholder="Name" value="{{$staticpage->title }}" class="col-md-5 form-control input-md mx-3" style="font-size:15px;"  required type="text">
  </div>
</div>
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">
<div class="form-group">
  <label class="control-label m-3" for="title_ar">{{__('staticpage.edit_name_ar')}}</label>  
  <input  name="title_ar" placeholder="Name" value="{{$staticpage->title_ar }}" class="col-md-5 form-control input-md mx-3" style="font-size:15px;"  required type="text">
  </div>
</div>
</div>
<!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">
<div class="form-group" style="margin-left:1%;">
        <label class="mx-3 control-label" for="status"></label>
        <div class="mx-3"style="margin-left:1%;">
            <input id="status" value="{{$staticpage->status }}" class="mx-2" name="status" type="checkbox"> Active

        </div>
    </div>
    </div> -->

<!-- Text input-->

<div class="form-group" style="margin-left:1%;">
<label class="control-label" for="p_content" style="font-size:18px;">{{__('staticpage.add_label_1')}}</label>  
  <div class="" style="margin-left:1%;">
  <textarea name="p_content" id="disc" cols="30" rows="10">  {{$staticpage->p_content }}</textarea>

  </div>
  </div>


  <div class="form-group" style="margin-left:1%;">
  <label class="control-label" for="p_content_ar" style="font-size:18px;">{{__('staticpage.add_label_1_ar')}}</label>  
  <div class="" style="margin-left:1%;">
  <textarea name="p_content_ar" id="disc2" cols="30" rows="10"> مرحبا ...</textarea>
  </div>
</div>
<!-- Button -->
<div class="form-group col-12 mt-4">
  <div class="form-actions "  style=" margin-left:1%;">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px;">{{__('staticpage.edit_btn')}}</button>
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