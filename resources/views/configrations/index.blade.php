@extends('layouts.master')
@section('content')
        <section id="main-content" style="width:93%;">
      <section class="wrapper" style="width:100%;">
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('config.title')}} <span style="color:#5E3C23;">{{__('config.title_2')}} </span>{{__('config.title_3')}} </b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('config.title_3')}}  </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('config.link_title_2')}}  </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:14px;" href="/admin/configrations/create">{{__('config.add_new_btn')}} </a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center"  style=" width:100%; font-size:14px;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-left" width="90px">{{__('config.Id')}}</th>
            <th class="text-center"width="200px">{{__('config.face')}}</th>
            <th class="text-center"width="200px">{{__('config.twit')}}</th>
            <th class="text-center"width="200px">{{__('config.insta')}}</th>
            <th class="text-center"width="200px">{{__('config.youtub')}}</th>
            <th class="text-center"width="200px">{{__('config.ad')}}</th>
            <th class="text-center"width="200px">{{__('config.ad_ar')}}</th>
            <th class="text-center"width="200px">{{__('config.ph')}}</th>
            <th class="text-center"width="200px">{{__('config.email')}}</th>
            <th class="text-center" width="480px">{{__('config.Action')}}</th>
        </tr>
        @foreach ($configrations as $configration )
            <tr>
                <td>{{ $configration->id  }}</td>
                <td>{{ $configration->facebook }}</td>
                <td>{{ $configration->twitter }}</td>
                <td>{{ $configration->instagram }}</td>
                <td>{{ $configration->youtub }}</td>
                <td>{{ $configration->address }}</td>
                <td>{{ $configration->address_ar }}</td>
                <td>{{ $configration->phone }}</td>
                <td>{{ $configration->email }}</td>
                  <td> 
                <form action="/admin/configrations/destroy/{{$configration->id}}" method="POST">
   
                @csrf


                    @method('PUT')
                    <a class="btn btn-sm btn-primary" href="/admin/configrations/edit/{{$configration->id}}" style="font-size:11px; margin-bottom:5px;">{{__('config.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-sm  btn-danger delete-confirm" data-name="{{ $configration->id }}" name="delete" style="font-size:11px;">{{__('config.delete_btn')}}</button>
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
          text: "This configration has been deleted successfully",
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
    <script src="{{asset('lib/common-scripts.js')}}"></script>

@endsection
