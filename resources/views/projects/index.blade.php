@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('project.title')}} <span style="color:#5E3C23;">{{__('project.title_2')}} </span> {{__('project.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('project.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('project.link_title_2')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;" href="/admin/projects/create">{{__('project.add_new_btn')}}</a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center"  style=" width:100%;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-center"width="10px" >{{__('project.Id')}}</th>
            <th class="text-center"width="200px">{{__('project.title_index')}}</th>
            <th class="text-center"width="200px">{{__('project.desc')}}</th>
            <th class="text-center"width="500px">{{__('project.ldesc')}}</th>
            <th class="text-center"width="200px">{{__('project.title_index_ar')}}</th>
            <th class="text-center"width="200px">{{__('project.desc_ar')}}</th>
            <th class="text-center"width="500px">{{__('project.ldesc_ar')}}</th>
            <th class="text-center"width="100px">{{__('project.img')}} </th>
            <th class="text-center"width="300px">{{__('project.multi_img')}} </th>
            <th class="text-center"width="150px">{{__('project.name')}}</th>
            <!-- hhhhhhhhhhh -->
            <th class="text-center"width="150px">{{__('project.owner')}}</th>
            <th class="text-center"width="150px">{{__('project.owner_ar')}}</th>
            <th class="text-center"width="150px">{{__('project.addr')}}</th>
            <th class="text-center"width="150px">{{__('project.addr_ar')}}</th>
            <th class="text-center"width="150px">{{__('project.phon')}}</th>
            <th class="text-center"width="150px">{{__('project.emai')}}</th>
            <th class="text-center"width="150px">{{__('project.web')}}</th>
            <th class="text-center"width="100px">{{__('project.face_url')}} </th>
            <th class="text-center"width="100px">{{__('project.twit_url')}} </th>
            <th class="text-center"width="100px">{{__('project.insta_url')}} </th>

            <th class="text-center"width="150px">{{__('project.shift')}}</th>
            <th class="text-center" width="280px">{{__('project.Action')}}</th>
        </tr>
        @foreach ($projects as $project )
            <tr>
                <td>{{ $project->id  }}</td>
                <td>{{ $project->title }}</td>
                <td>{{ $project->desc}}</td>
                <td>{{ $project->ldesc}}</td>
                <td>{{ $project->title_ar }}</td>
                <td>{{ $project->desc_ar}}</td>
                <td>{{ $project->ldesc_ar}}</td>
                <td>
                <img src="{{ asset('images/'.$project->image) }}" width="100">

                </td>
                <td>
                @foreach($projects as $project)
                @foreach (json_decode($project->multi_image) as $image)

                                    <img src="{{ asset('images/'.$image) }}" width="100">
                                @endforeach
                                @endforeach

                </td>
                <td>{{ $project->category_name }}</td>
                <td>{{ $project->owner}}</td>
                <td>{{ $project->owner_ar}}</td>
                <td>{{ $project->address}}</td>
                <td>{{ $project->address_ar}}</td>
                <td>{{ $project->phone}}</td>
                <td>{{ $project->email}}</td>
                <td>{{ $project->website}}</td>
                <td>{{ $project->face_link}}</td>
                <td>{{ $project->twit_link}}</td>
                <td>{{ $project->insta_link}}</td>
                <td>{{ $project->shift_h}}</td>

               
                  <td> 
                <form action="/admin/projects/destroy/{{$project->id}}" method="POST">
   
                @csrf



                    @method('PUT')
                    <a class="btn btn-primary" href="/admin/projects/edit/{{$project->id}}" style="font-size:12px;">{{__('project.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger my-2 delete-confirm" data-name="{{ $project->title }}"  name="delete" style="font-size:12px;">{{__('project.delete_btn')}}</button>

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
