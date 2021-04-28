@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('about.title')}} <span style="color:#5E3C23;">{{__('about.title_2')}} </span> {{__('about.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('about.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('about.link_title_2')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;" href="/admin/abouts/create">{{__('about.add_new_btn')}}</a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center"  style=" width:100%;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-center"width="10px" >{{__('about.Id')}}</th>
            <th class="text-center"width="200px">{{__('about.title_index')}}</th>
            <th class="text-center"width="200px">{{__('about.title_index')}} {{__('about.arabic')}}</th>
            <th class="text-center"width="200px">{{__('about.title_index2')}}</th>
            <th class="text-center"width="200px">{{__('about.title_index2')}} {{__('about.arabic')}}</th>
            <th class="text-center"width="200px">{{__('about.title2')}}</th>
            <th class="text-center"width="200px">{{__('about.title2')}} {{__('about.arabic')}}</th>
            <th class="text-center"width="200px">{{__('about.title_index3')}}</th>
            <th class="text-center"width="200px">{{__('about.title_index3')}} {{__('about.arabic')}}</th>
            <th class="text-center" width="280px">{{__('about.multi_img')}}</th>
            <th class="text-center" width="280px">{{__('about.Action')}}</th>
        </tr>
        @foreach ($abouts as $about )
            <tr>
                <td>{{ $about->id  }}</td>
                <td>{{ $about->initiative_desc}}</td>
                <td>{{ $about->initiative_ar_desc}}</td>
                <td>{{ $about->Training_desc}}</td>
                <td>{{ $about->Training_ar_desc}}</td>
                <td>{{ $about->objectives_desc}}</td>
                <td>{{ $about->objectives_ar_desc }}</td>
                <td>{{ $about->Trainers }}</td>
                <td>{{ $about->Trainers_ar}}</td>
               
                <td>
                    @foreach (json_decode($about->multi_image) as $image)
    
                  <img src="{{ asset('images/'.$image) }}" width="100">
    
                                    @endforeach
    
                    </td>
               
                  <td> 
                <form action="/admin/abouts/destroy/{{$about->id}}" method="POST">
   
                @csrf

                    @method('PUT')
                    <a class="btn btn-primary" href="/admin/abouts/edit/{{$about->id}}" style="font-size:12px;">{{__('about.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger my-2 delete-confirm" data-name="{{ $about->title }}"  name="delete" style="font-size:12px;">{{__('about.delete_btn')}}</button>

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
          text: "This page has been deleted successfully",
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
    <script>
                function dep_select(){
                var m= $("#selectdep").val();
                if(m==1){
                $('.dep4').css('display','none');
                    }
                }
              
         

            </script>
            
@endsection
