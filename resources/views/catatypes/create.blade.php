@extends('layouts.master')
@section('content')

<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('catatype.title')}} <span style="color:#5E3C23;">{{__('catatype.title_2')}} </span> {{__('catatype.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('catatype.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('catatype.link_title_2')}}</li>
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
    <form class="form-card" action="/admin/catatypes/store" method="POST" >
            @csrf
            <div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">

<!-- Text input-->
<div class="form-group m-5">
  <label class="control-label m-3" for="type">{{__('catatype.add_category_label')}}</label>  
  <div class="">
  <input name="type" placeholder="Type" class="col-md-5 form-control mx-5" style="font-size:15px;" required type="text">
  </div>
</div>
</div>
</div>

<div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6">

<!-- Text input-->
<div class="form-group m-5">
  <label class="control-label m-3" for="type_ar">{{__('catatype.add_category_label_ar')}}</label>  
  <div class="">
  <input name="type_ar" placeholder="Type Arabic" class="col-md-5 form-control mx-5" style="font-size:15px;" required type="text">
  </div>
</div>
</div>
</div>

<!-- Button -->
<div class="form-group m-5">
  <div class="form-actions m-5 col-12">
    <button type="submit"  class="btn btn-primary col-4 mx-auto btn-color" style="color:white;font-size:14px;margin-top:3%;">{{__('catatype.add_btn')}}</button>
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