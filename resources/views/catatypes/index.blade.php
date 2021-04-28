@extends('layouts.master')
@section('content')

<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('catatype.title')}} <span style="color:#5E3C23;"> {{__('catatype.title_2')}} </span> {{__('catatype.title_3')}} </b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver"> {{__('catatype.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('catatype.link_title_2')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;" href="/admin/catatypes/create">{{__('catatype.add_new_btn')}}</a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center"  style=" width:100%;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-center"width="10px" >{{__('catatype.Id')}}</th>
            <th class="text-center"width="300px">{{__('catatype.Type')}}</th>
            <th class="text-center"width="300px">{{__('catatype.Type_ar')}}</th>
            <th class="text-center" width="280px">{{__('catatype.Action')}}</th>
        </tr>
        @foreach ($catatypes as $catatype )
            <tr>
                <td>{{ $catatype->id  }}</td>
                <td>{{ $catatype->type }}</td>
                <td>{{ $catatype->type_ar }}</td>

                  <td> 
                <form action="/admin/catatypes/destroy/{{$catatype->id}}" method="POST">
   
                @csrf
                    @method('PUT')
                    <a class="btn btn-primary" href="/admin/catatypes/edit/{{$catatype->id}}" style="font-size:12px;">{{__('catatype.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger delete-confirm" data-name="{{ $catatype->type }}" name="delete" style="font-size:12px;">{{__('catatype.delete_btn')}}</button>

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
          text: "This category has been deleted successfully",
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
              <script src="{{asset('lib/common-scripts.js')}}"></script>

@endsection
