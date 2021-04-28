@extends('layouts.master')
@section('content')
<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row" style="">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('pdf.title')}} <span style="color:#5E3C23;">{{__('pdf.title_2')}} </span> {{__('pdf.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('pdf.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('pdf.link_title_2')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row" >
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
<a class="btn btn-success" style="margin-bottom:0.3%; color:white; font-size:15px;" href="/admin/pdfs/create">{{__('pdf.add_new_btn')}}</a>

</div>
    </div>
    <div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">

    <table class="table table-responsive text-center"  style=" width:100%;">
        <tr style="background-color:whitesmoke;" >
            <th class="text-center" width="10px">{{__('pdf.Id')}}</th>
            <th class="text-center"width="200px">{{__('pdf.name_index')}}</th>
            <th class="text-center"width="300px">{{__('pdf.date')}}</th>
            <th class="text-center"width="200px">{{__('pdf.publisher')}}</th>
            <th class="text-center"width="300px">{{__('pdf.pdf')}}</th>
            <th class="text-center"width="100px">{{__('pdf.img')}} </th>
            <th class="text-center"width="100px">{{__('pdf.desc')}} </th>
            <th class="text-center"width="100px">{{__('pdf.download_url')}} </th>
            <th class="text-center"width="100px">{{__('pdf.veiw_url')}} </th>
            <th class="text-center"width="100px">{{__('pdf.category_name')}} </th>
            <th class="text-center" width="280px">{{__('pdf.Action')}}</th>
        </tr>
        @foreach ($pdfs as $pdf )
            <tr>
                <td>{{ $pdf->id  }}</td>
                <td>{{ $pdf->name }}</td>
                <td>{{ $pdf->date }}</td>
                <td>{{ $pdf->publisher }}</td>
                <td>{!! $pdf->pdf !!}</td>
                <td>{{ $pdf->img }}</td>
                <td>{{ $pdf->desc }}</td>
                <td>{{ $pdf->download_url }}</td>
                <td>{{ $pdf->veiw_url }}</td>
                <!-- <td>{!! $pdf->data_ar !!}</td> -->
                <td>{{ $pdf->category_name }}</td>
                
                  <td> 
                <form action="/admin/pdfs/destroy/{{$pdf->id}}" method="POST">
   
                @csrf

                <!-- <a class="btn btn-info" href="/pdfs/show/{{$pdf->id}}" style="font-size:12px;">Show</a> -->


                    @method('PUT')
                    <a class="btn btn-primary" href="/admin/pdfs/edit/{{$pdf->id}}" style="font-size:12px;">{{__('pdf.edit_bt')}}</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger delete-confirm" data-name="{{ $pdf->name }}"  name="delete" style="font-size:12px;">{{__('pdf.delete_btn')}}</button>

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
