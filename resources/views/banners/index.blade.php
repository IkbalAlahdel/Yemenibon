@extends('layouts.master')
@section('content')

<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('Banner.title')}} <span style="color:#5E3C23;">{{__('Banner.title_2')}} </span>{{__('Banner.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('Banner.link_title')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('Banner.link_title_2')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;" href="/admin/banners/create">{{__('Banner.add_new_btn')}}</a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center"  style=" width:100%;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-center" width="10px">{{__('Banner.Id')}}</th>
            <th class="text-center"width="200px">{{__('Banner.image1')}}</th>
            <th class="text-center"width="200px">{{__('Banner.image2')}}</th>
            <th class="text-center"width="200px">{{__('Banner.image3')}}</th>
            <th class="text-center"width="200px">{{__('Banner.t_ar')}}</th>
            <th class="text-center"width="200px">{{__('Banner.d_ar')}}</th>
            <th class="text-center"width="200px">{{__('Banner.image4')}}</th>
            <th class="text-center" width="380px">{{__('Banner.Action')}}</th>
        </tr>
        @foreach ($banners as $banner )
            <tr>
                <td>{{ $banner->id  }}</td>
                <td>
                <img src="{{ asset('images/'.$banner->image) }}" alt="img" title="" height="400px" width="400px"> </td>      
                <!-- <td>
                <img src="{{ asset('images/'.$banner->image2) }}" alt="img" title="" height="400px" width="400px"> </td>     
                <td>              
                <img src="{{ asset('images/'.$banner->image3) }}" alt="img" title="" height="400px" width="400px"> </td>      
                <td>                
                <img src="{{ asset('images/'.$banner->image4) }}" alt="img" title="" height="400px" width="400px"> </td>      
                <td>                
                <img src="{{ asset('images/'.$banner->image5) }}" alt="img" title="" height="400px" width="400px"> </td>      
         -->
         <td>{{ $banner->title }}</td>
                <td>{{ $banner->desc}}</td>
                <td>{{ $banner->title_ar}}</td>
                <td>{{ $banner->desc_ar}}</td>
                <td>{{ $banner->link}}</td>
                  <td width="200px"> 
                <form action="/admin/banners/destroy/{{$banner->id}}" method="POST" enctype="multipart/form-data">
   
                @csrf
                    @method('PUT')
                    <a class="btn btn-primary" href="/admin/banners/edit/{{$banner->id}}" style="font-size:14px;">{{__('Banner.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger delete-confirm" data-name="{{ $banner->id }}" name="delete" style="font-size:14px;">{{__('Banner.delete_btn')}}</button>

                </form>
                  </td> 
            </tr>
            @endforeach
    </table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
            <script>

 $('.delete-confirm').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
          title: `Are you sure you want to delete ${name}?`,
          text: "If you delete this, it will be gone forever.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          form.submit();
          swal({
          title: ` done`,
          text: "This slider images has been deleted successfully",
          icon: "success",
      })
        }
      });
  });
    </script>
           <!-- /col-lg-3 -->
           </div>
           </div>

        <!-- /row -->
      </section>
    </section>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!--script for this page-->
@endsection
