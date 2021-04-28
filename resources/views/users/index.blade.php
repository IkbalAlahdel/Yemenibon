@extends('layouts.master')
@section('content')

<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('adminuser.title')}} <span style="color:#5E3C23;">{{__('adminuser.title_2')}}</span> {{__('adminuser.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver"> {{__('adminuser.title_3')}} </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('adminuser.link_title_2')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;" href="/admin/users/create">{{__('adminuser.add_new_btn')}}</a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center"  style=" width:100%;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-center"width="10px" >{{__('adminuser.Id')}}</th>
            <th class="text-center"width="280px">{{__('adminuser.name')}}</th>
            <th class="text-center"width="300px">{{__('adminuser.email')}}</th>
            <th class="text-center"width="300px">{{__('adminuser.active')}}</th>
            <th class="text-center" width="380px">{{__('adminuser.Action')}}</th>
        </tr>
        @foreach ($users as $user )
            <tr>
                <td>{{ $user->id  }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                @if($user->status == 0)
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input onclick="myFunction{{$user->id}}()" type="checkbox" class="custom-control-input" id="customSwitch{{$user->id}}">
                                <label class="custom-control-label" for="customSwitch{{$user->id}}"></label>
                                </div>
                            </div>
                            @elseif($user->status == -1)
                            <div class="form-group">
                                <div  class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger ">
                                <input onclick="myFunction{{$user->id}}()" checked type="checkbox" class="custom-control-input" id="customSwitch{{$user->id}}">
                                <label class="custom-control-label" for="customSwitch{{$user->id}}"></label>
                                </div>
                            </div>
                    @endif</td>
                  <td> 
                <form action="/admin/users/destroy/{{$user->id}}" method="POST">

                @csrf
                    @method('PUT')
                    <a class="btn btn-primary" href="/admin/users/edit/{{$user->id}}" style="font-size:12px;">{{__('adminuser.edit_bt')}}</a>
   
                    <!-- @csrf
                    @method('DELETE') -->
      
                    <!-- <button type="submit"  class="btn btn-danger delete-confirm"  data-name="{{ $user->name }}" name="delete" style="font-size:12px;">Delete</button> -->
</form>
                  </td> 
            </tr>
            <script>
            function myFunction{{$user->id}}() {
                    
                var checkBox{{$user->id}} = document.getElementById("customSwitch{{$user->id}}");
                if (checkBox{{$user->id}}.checked == true){
                    //  alert({{$user->id}})

                    $.ajax({

                            type:'get',
                            url:'/activUser/cat_active/'+{{$user->id}},
                            data:{id:{{$user->id}}},
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
                            url:'/activUser/cat_no_active/'+{{$user->id}},
                            data:{id:{{$user->id}}},
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
            <!-- <script>

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
          text: "User has been deleted successfully",
          icon: "success",
      })
        }
      });
  });
    </script> -->
           <!-- /col-lg-3 -->
           </div>
           </div>

        <!-- /row -->
      </section>
    </section>
    <!-- <script>
                function dep_select(){
                var m= $("#selectdep").val();
                if(m==1){
                $('.dep4').css('display','none');
                    }
                }
              
         

            </script> -->
    <script src="{{asset('lib/common-scripts.js')}}"></script>

@endsection
