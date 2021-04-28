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
    <form action="/admin/pdfs/update/{{$pdf->id}}" method="POST" enctype="multipart/form-data">

        @csrf
        @method('PUT')

<!-- Text input-->
<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input type="file" name="pdf" value="{{$pdf->pdf }}" accept=".pdf" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  type="text">
  </div>
  </div>
  <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="img" type="file" placeholder="interview Name" value="{{$pdf->img }}"  id="gallery-logo-add" class="col-md-4 form-control input-md mx-3" style="font-size:15px;" accept="image/*" required  >
<div class="gallery2"></div>
</div>
</div>
</div>
<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">

<div class="form-group">
  <input  name="name" placeholder="pdf Name" value="{{$pdf->name }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">

<div class="form-group">
  <input  name="name_ar" placeholder="pdf Arabic Name" value="{{$pdf->name_ar }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row my-5">

 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
 <div class="form-group">
  <select class="form-control col-md-4 mx-3" name="category_id" style="font-size:15px;">
      @foreach($category as $cat)
      <option style="color:black;" value="{{ $cat->id }}" {{$cat->id==$pdf->category_id?'selected':''}}>{{$cat->name }}</option>
      @endforeach
    </select> 
    </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
<input  name="date" value="{{$pdf->date }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="date">
  </div>
  </div>
</div>
<div class="row ">
<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 m-5">

<div class="form-group">
  <input  name="desc" placeholder="pdf description" value="{{$pdf->desc }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>

 <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-6 m-5">

<div class="form-group">
  <input  name="desc_ar" placeholder="pdf Arabic description" value="{{$pdf->desc_ar }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>

<div class="row ">
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="publisher" placeholder="pdf publisher" value="{{$pdf->publisher }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5">
<div class="form-group">
  <input  name="publisher_ar" placeholder="pdf Arabic publisher" value="{{$pdf->publisher_ar }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>

 <div class="row ">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-5">
<div class="form-group">
  <input  name="download_url" placeholder="pdf download_url" value="{{$pdf->download_url }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>

 <div class="row ">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 m-5">
<div class="form-group">
  <input  name="veiw_url" placeholder="pdf veiw_url"  value="{{$pdf->veiw_url }}" class="col-md-4 form-control input-md mx-3" style="font-size:15px;"  required type="text">
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