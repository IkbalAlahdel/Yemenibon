@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row " >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">Yemeni<span style="color:#5E3C23;">Bon</span> Static Page</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">Static Page</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Show Static Page</li>
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



    <div class="form-group">
  <div class="row">
  <div class="col-12">
                <strong>Title :</strong>
                {{$content->title }}        
            </div>
        </div>
        <div class="form-group">
  <div class="row">
  <div class="col-12">
                <strong>Data :</strong>
                {!!$content->data !!}        
            </div>
        </div>
 
        <div class="form-group">
  <div class="row">
  <div class="col-12">
                <strong>Category Name :</strong>
                {{$content->category_name }}        
            </div>
        </div>
        <div class="form-group">
  <div class="row">
  <div class="col-12">
                <strong>PDF : </strong>
                {{$content->pdf }}        
            </div>
        </div>

        <div class="form-group">
  <div class="row">
  <div class="col-12">



            </div>
        </div>
    </div>


          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
@endsection








  
