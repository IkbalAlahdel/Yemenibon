@extends('layouts.master')
@section('content')

<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('category.title')}} <span style="color:#5E3C23;">{{__('category.title_2')}} </span> {{__('category.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('category.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('category.link_title_2')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;" href="/admin/categories/create">{{__('category.add_new_btn')}}</a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center"  style=" width:100%;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-center" width="10px">{{__('category.Id')}}</th>
            <th class="text-center"width="280px">{{__('category.name')}}</th>
            <th class="text-center"width="280px">{{__('category.name_ar')}}</th>
            <th class="text-center"width="300px">{{__('category.type')}}</th>
            <th class="text-center">{{__('category.status')}}</th>
            <th class="text-center" width="280px">{{__('category.Action')}}</th>
        </tr>
        @foreach ($categories as $category )
            <tr>
                <td>{{ $category->id  }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->name_ar }}</td>
                <td>{{ $category->catatype_type }}</td>
                <!-- <td>{{ $category->status }}</td> -->
                <td>
                @if($category->status==0)
                            <div class="form-group">
                                <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                                <input onclick="myFunction{{$category->id}}()" type="checkbox" class="custom-control-input" id="customSwitch{{$category->id}}">
                                <label class="custom-control-label" for="customSwitch{{$category->id}}"></label>
                                </div>
                            </div>
                            @elseif($category->status == 1)
                            <div class="form-group">
                                <div  class="custom-control custom-switch custom-switch-on-success custom-switch-off-danger ">
                                <input onclick="myFunction{{$category->id}}()" checked type="checkbox" class="custom-control-input" id="customSwitch{{$category->id}}">
                                <label class="custom-control-label" for="customSwitch{{$category->id}}"></label>
                                </div>
                            </div>
                    @endif</td>

                  <td> 
                <form action="/admin/categories/destroy/{{$category->id}}" method="POST">
   
                @csrf
                    @method('PUT')
                    <a class="btn btn-primary" href="/admin/categories/edit/{{$category->id}}" style="font-size:12px;">{{__('category.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger delete-confirm" data-name="{{ $category->name }}" name="delete" style="font-size:12px;">{{__('category.delete_btn')}}</button>

                </form>
                  </td> 
            </tr>

            <script>
            function myFunction{{$category->id}}() {
                    
                var checkBox{{$category->id}} = document.getElementById("customSwitch{{$category->id}}");
                if (checkBox{{$category->id}}.checked == true){
                    // alert({{$category->id}})

                    $.ajax({

                            type:'get',
                            url:'/cat_active/'+{{$category->id}},
                            data:{id:{{$category->id}}},
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
                            url:'/cat_no_active/'+{{$category->id}},
                            data:{id:{{$category->id}}},
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
