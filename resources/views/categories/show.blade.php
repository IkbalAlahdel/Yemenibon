@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
        <section id="main-content">
      <section class="wrapper">
        <div class="row">
        <div class="col-lg-9 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="page-header">
        <h2 class="pageheader-title"><b class="logo">Yemeni<span style="color:#D0C39F;">Bon</span> Category</b>  </h2>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="haver"> shoow hellocategory</a></li>

                        <li class="breadcrumb-item"><a href="#" class="haver">category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Show Category</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>&nbsp;
                {{ $category->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Type: </strong>&nbsp;
                {{ $category->type }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Active:</strong>&nbsp;
                {{ $category->status }}
            </div>
        </div>


    </div>
    
       <!-- /col-lg-3 -->
              </div>
        <!-- /row -->
      </section>
    </section>

@endsection