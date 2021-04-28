@extends('layouts.master')
@section('content')
<section id="main-content " style="width:100%; margin-left:4%;">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart" style="width:100%;" >
        <section id="main-content" style="width:100%;">
      <section class="wrapper" style="width:100%;">
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">Yemeni<span style="color:#5E3C23;">Bon</span> Static Page</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">Static Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Ststic Page Content</li>
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
    <form class="form-card" action="/staticpage/store" method="POST" >
            @csrf

<!-- Text input-->
<div class="form-group">
  <div class="row">
  <div class="col-12">
  <input  name="title" placeholder="Page Title" class="col-md-5 form-control input-md mx-3" style="font-size:15px;"  required type="text">
  <input id="status" value="1" class="col-md-1 mx-3 p-3" name="status" type="checkbox" style="font-size:15px;" > Active
  </div>
  </div>
</div>


<div class="form-group" style="margin-left:1%;">
  <label class="control-label" for="p_content" style="font-size:18px;">Page Content</label>  </div>
  <div class="" style="margin-left:1%;">
  <textarea id="mytextarea" name="p_content" class="mx-3" >Hello, World!</textarea>
  </div>
</div>

    <div class="form-group">
        <label class="mx-1 control-label"></label>
        <div class="">
        </div>
    </div>
<!-- Button -->
<div class="form-group" style="margin-top:2%; margin-left:1%;">
  <div class="form-actions col-12">
    <button type="submit"  class="btn btn-primary col-12 mx-auto btn-color" style="color:white;font-size:14px;">Add StaticPage</button>
  </div>
  </div>

    </form>
    </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection














