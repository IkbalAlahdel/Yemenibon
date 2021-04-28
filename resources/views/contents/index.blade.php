@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('content.title')}} <span style="color:#5E3C23;">{{__('content.title_2')}} </span> {{__('content.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('content.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('content.link_title_2')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;" href="/admin/contents/create">{{__('content.add_new_btn')}}</a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center"  style=" width:100%;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-center" width="10px">{{__('content.Id')}}</th>
            <th class="text-center"width="200px">{{__('content.title_index')}}</th>
            <th class="text-center"width="300px">{{__('content.data')}}</th>
            <th class="text-center"width="200px">{{__('content.title_index_ar')}}</th>
            <th class="text-center"width="300px">{{__('content.data_ar')}}</th>
            <th class="text-center"width="150px">{{__('content.name')}}</th>
            <th class="text-center"width="100px">{{__('content.pdf')}} </th>
            <th class="text-center"width="100px">{{__('content.status')}} </th>
            <th class="text-center" width="280px">{{__('content.Action')}}</th>
        </tr>
        @foreach ($contents as $content )
            <tr>
                <td>{{ $content->id  }}</td>
                <td>{{ $content->title }}</td>
                <td>{!! $content->data !!}</td>
                <td>{{ $content->title_ar }}</td>
                <td>{!! $content->data_ar !!}</td>
                <td>{{ $content->category_name }}</td>
                <td>{{ $content->pdf}}</td>
                <td>    @if($content->status==0)
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input onclick="myFunction{{$content->id}}()" type="checkbox" class="custom-control-input" id="customSwitch{{$content->id}}">
                                <label class="custom-control-label" for="customSwitch{{$content->id}}"></label>
                                </div>
                            </div>
                            @elseif($content->status == 1)
                            <div class="form-group">
                                <div  class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger ">
                                <input onclick="myFunction{{$content->id}}()" checked type="checkbox" class="custom-control-input" id="customSwitch{{$content->id}}">
                                <label class="custom-control-label" for="customSwitch{{$content->id}}"></label>
                                </div>
                            </div>
                    @endif</td>
                  <td> 
                <form action="/admin/contents/destroy/{{$content->id}}" method="POST">
   
                @csrf

                <!-- <a class="btn btn-info" href="/contents/show/{{$content->id}}" style="font-size:12px;">Show</a> -->


                    @method('PUT')
                    <a class="btn btn-primary" href="/admin/contents/edit/{{$content->id}}" style="font-size:12px;">{{__('content.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger delete-confirm" data-name="{{ $content->title }}"  name="delete" style="font-size:12px;">{{__('content.delete_btn')}}</button>

                </form>
                  </td> 
            </tr>
            
            <script>
            function myFunction{{$content->id}}() {
                    
                var checkBox{{$content->id}} = document.getElementById("customSwitch{{$content->id}}");
                if (checkBox{{$content->id}}.checked == true){
                    // alert({{$content->id}})

                    $.ajax({

                            type:'get',
                            url:'/admin/cat_active/'+{{$content->id}},
                            data:{id:{{$content->id}}},
                            success:function(response){console.log(response);
                             alert("data saved");
                            },
                            error:function(error){console.log(error);
                            alert("data dont saved");
                            }
                        });
                } else{
                    $.ajax({
                            type:'get',
                            url:'/admin/cat_no_active/'+{{$content->id}},
                            data:{id:{{$content->id}}},
                            success:function(response){console.log(response);
                             alert("data saved");
                            },
                            error:function(error){console.log(error);
                             alert("data dont saved");
                            }
                        });
                }
                }
            </script>
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
