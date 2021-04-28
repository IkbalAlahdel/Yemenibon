@extends('layouts.master')
@section('content')

<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('staticpage.title')}} <span style="color:#5E3C23;">{{__('staticpage.title_2')}} </span> {{__('staticpage.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('staticpage.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('staticpage.link_title_2')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;" href="/admin/staticpages/create">{{__('staticpage.add_new_btn')}}</a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center "  style=" width:100%;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-center"width="10px" >{{__('staticpage.Id')}}</th>
            <th class="text-center"width="280px">{{__('staticpage.title_index')}}</th>
            <th class="text-center"width="300px">{{__('staticpage.content')}}</th>
            <th class="text-center"width="280px">{{__('staticpage.title_index_ar')}}</th>
            <th class="text-center"width="300px">{{__('staticpage.content_ar')}}</th>
            <th class="text-center">{{__('staticpage.status')}}</th>
            <th class="text-center" width="280px">{{__('staticpage.Action')}}</th>
        </tr>
        @foreach ($staticpages as $staticpage )
            <tr>
                <td>{{ $staticpage->id}}</td>
                <td>{{ $staticpage->title }}</td>
                <td>{!! $staticpage->p_content !!}</td>
                <td>{{ $staticpage->title_ar }}</td>
                <td>{!! $staticpage->p_content_ar !!}</td>
                <td>
                @if($staticpage->status==0)
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input onclick="myFunction{{$staticpage->id}}()" type="checkbox" class="custom-control-input" id="customSwitch{{$staticpage->id}}">
                                <label class="custom-control-label" for="customSwitch{{$staticpage->id}}"></label>
                                </div>
                            </div>
                            @elseif($staticpage->status == 1)
                            <div class="form-group">
                                <div  class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger ">
                                <input onclick="myFunction{{$staticpage->id}}()" checked type="checkbox" class="custom-control-input" id="customSwitch{{$staticpage->id}}">
                                <label class="custom-control-label" for="customSwitch{{$staticpage->id}}"></label>
                                </div>
                            </div>
                    @endif
                </td>
                  <td> 
                <form action="/admin/staticpages/destroy/{{$staticpage->id}}" method="POST">
   
                @csrf

                <!-- <a class="btn btn-info" href="/admin/staticpages/show/{{$staticpage->id}}" style="font-size:12px;">Show</a> -->


                    @method('PUT')
                    <a class="btn btn-primary" href="/admin/staticpages/edit/{{$staticpage->id}}" style="font-size:12px;">{{__('staticpage.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger delete-confirm " data-name="{{ $staticpage->title }}"  name="delete" style="font-size:12px;">{{__('staticpage.delete_btn')}}</button>
                </form>
                  </td> 
            </tr>
            <script>
            function myFunction{{$staticpage->id}}() {
                    
                var checkBox{{$staticpage->id}} = document.getElementById("customSwitch{{$staticpage->id}}");
               
                if (checkBox{{$staticpage->id}}.checked == true){

                    $.ajax({

                            type:'get',
                            url:'/activ/cat_active/'+{{$staticpage->id}},
                            data:{id:{{$staticpage->id}}},
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
                            url:'/activ/cat_no_active/'+{{$staticpage->id}},
                            data:{id:{{$staticpage->id}}},
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
              <script src="{{asset('lib/common-scripts.js')}}"></script>

@endsection





