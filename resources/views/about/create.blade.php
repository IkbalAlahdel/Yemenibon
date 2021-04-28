@extends('layouts.master')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet'
    href='https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css'>
<link rel='stylesheet' href='https://unpkg.com/filepond/dist/filepond.min.css'>
<link rel="stylesheet" href="./style.css">

<section id="main-content">
      <section class="wrapper" >
        <div class="row">
        <div class="col-lg-12 main-chart">
<div class="row ">
<div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="page-header">
        <h1 class="pageheader-title"><b class="logo">{{__('project.title')}} <span style="color:#5E3C23;">{{__('project.title_2')}} </span> {{__('project.title_3')}}</b>  </h1>

           <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="haver">{{__('project.title_3')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('project.link_title_2_add')}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="form-card" action="/admin/about/store" method="POST" enctype="multipart/form-data">
            @csrf


<h1>{{__('about.title')}}</h1>
 <div class="row ">
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<label class="control-label m-3" > {{__('about.Description')}} </label>  
  <textarea  name="initiative_desc" placeholder="initiative Long Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
</textarea> 
</div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<label class="control-label m-3" > {{__('about.Description')}} </label>  
  <textarea  name="initiative_ar_desc" placeholder="initiative Long Arabic Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
</textarea> 
</div>
 </div>
 </div>


{{-- Tranning --}}

<h1>{{__('about.title1')}}</h1>

 <div class="row ">
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
   <div class="form-group">
   <label class="control-label m-3" for="image"> {{__('about.Description')}} </label>  
     <textarea  name="Training_desc" placeholder="Training Long Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
   </textarea> 
   </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
   <div class="form-group">
   <label class="control-label m-3" for="image"> {{__('about.Description')}} </label>  
     <textarea  name="Training_ar_desc" placeholder="Training Long Arabic Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
   </textarea> 
   </div>
    </div>
    </div>


    
{{-- The objectives of the training workshop --}}

<h1>{{__('about.title2')}}</h1>

 <div class="row ">
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
   <div class="form-group">
   <label class="control-label m-3" for="image">{{__('about.objectives')}} {{__('about.Description')}} </label>  
     <textarea  name="objectives_desc" placeholder="objectives  Long Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
   </textarea> 
   </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
   <div class="form-group">
   <label class="control-label m-3" for="image">{{__('about.objectives')}} {{__('about.Description')}} </label>  
     <textarea  name="objectives_ar_desc" placeholder="objectives  Long Arabic Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
   </textarea> 
   </div>
    </div>
    </div>



    {{-- our traines --}}

    <div class="row ">
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
       <div class="form-group">
       <label class="control-label m-3" for="image">{{__('about.Trainers')}} {{__('about.Description')}} </label>  
         <textarea  name="Trainers" placeholder="Trainers  Long Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
       </textarea> 
       </div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
       <div class="form-group">
       <label class="control-label m-3" for="image">{{__('about.Trainers')}} {{__('about.Description')}} </label>  
         <textarea  name="Trainers_ar" placeholder="Trainers  Long Arabic Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
       </textarea> 
       </div>
        </div>
        </div>

 <div class="row ">
     <h1>
    <label class="control-label m-3" for="image">{{__('about.Trainers')}} {{__('about.name')}} </label>  
     </h1>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="Trainers_name" placeholder="Trainers Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="Trainers_name_ar" placeholder="Trainers Arabic Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>
 <div class="row ">
    <h1>
        <label class="control-label m-3" for="image">{{__('about.Trainers')}} {{__('about.Job')}} </label>  
         </h1>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="Trainers_job" placeholder="Trainers Job" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
  <input  name="Trainers_job_ar" placeholder="Trainers Job Arabic Address" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
 </div>
 </div>
 </div>





  {{-- our Trainees' Quotations --}}

  <div class="row ">
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
   <div class="form-group">
   <label class="control-label m-3" for="image">{{__('about.Trainees')}} {{__('about.Description')}} </label>  
     <textarea  name="Trainees" placeholder="Trainees' Quotations  Long Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
   </textarea> 
   </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
   <div class="form-group">
   <label class="control-label m-3" for="image">{{__('about.Trainees')}} {{__('about.Description')}} </label>  
     <textarea  name="Trainees_ar" placeholder="Trainees' Quotations  Long Arabic Description" cols="90" rows="15" class="col-md-8 form-control input-md mx-3 fo" style="font-size:15px;"  required type="text">
   </textarea> 
   </div>
    </div>
    </div>

<div class="row ">
 <h1>
<label class="control-label m-3" for="image">{{__('about.Trainees')}} {{__('about.name')}} </label>  
 </h1>
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<input  name="Trainees_name" placeholder="Trainees Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
</div>
</div>
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<input  name="Trainees_name_ar" placeholder="Trainees Arabic Name" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
</div>
</div>
</div>
<div class="row ">
<h1>
    <label class="control-label m-3" for="image">{{__('about.Trainees')}} {{__('about.Job')}} </label>  
     </h1>
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<input  name="Trainees_job" placeholder="Trainees Job" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
</div>
</div>
<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-5 m-5 ">
<div class="form-group">
<input  name="Trainees_job_ar" placeholder="Trainees Job Arabic Address" class="col-md-8 form-control input-md mx-1 fo" style="font-size:15px;"  required type="text">
</div>
</div>
</div>


{{-- photo --}}
<div class="form-group col-md-12 col-sm-12 col-xm-12">
  <h3 class="col-md-12 col-sm-12 col-xm-12">{{__('about.photo')}} </h3>
  <div class="gallery"></div>
  <div class="form-group" data-select2-id="44">
      <div id="drop-area">

          <input type="file" name="attachment[]" id="fileElem" multiple
              onchange="handleFiles(this.files)">
          <label class="button" for="fileElem">{{__('about.select')}}</label>
          <progress id="progress-bar" max=100 value=0></progress>
          <div id="gallery" />
      </div>
  </div>
</div>









 


<!-- Button -->
<div class="form-group col-12 mt-4 mx-5">
  <div class="form-actions "  style=" margin-left:1%;">
    <button type="submit"  class="btn btn-primary col-3 mx-auto btn-color" style="color:white; font-size:14px;">{{__('project.add_btn')}}</button>
  </div>
  </div>
   

         

    </form>
    </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <script src="{{asset('lib/common-scripts.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
<script>

    // ************************ Drag and drop ***************** //
    let dropArea = document.getElementById("drop-area")

        // Prevent default drag behaviors
        ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false)
            document.body.addEventListener(eventName, preventDefaults, false)
        })

        // Highlight drop area when item is dragged over it
        ;['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, highlight, false)
        })

        ;['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false)
        })

    // Handle dropped files
    dropArea.addEventListener('drop', handleDrop, false)

    function preventDefaults(e) {
        e.preventDefault()
        e.stopPropagation()
    }

    function highlight(e) {
        dropArea.classList.add('highlight')
    }

    function unhighlight(e) {
        dropArea.classList.remove('active')
    }

    function handleDrop(e) {
        var dt = e.dataTransfer
        var files = dt.files

        handleFiles(files)
    }

    let uploadProgress = []

    function initializeProgress(numFiles) {
        uploadProgress = []

        for (let i = numFiles; i > 0; i--) {
            uploadProgress.push(0)
        }
    }

    function updateProgress(fileNumber, percent) {
        uploadProgress[fileNumber] = percent
        let total = uploadProgress.reduce((tot, curr) => tot + curr, 0) / uploadProgress.length
        console.debug('update', fileNumber, percent, total)
    }

    function handleFiles(files) {
        files = [...files]
        initializeProgress(files.length)
        files.forEach(uploadFile)
        files.forEach(previewFile)
    }

    function previewFile(file) {
        let reader = new FileReader()
        reader.readAsDataURL(file)
        reader.onloadend = function () {
            let img = document.createElement('img')
            img.src = reader.result
            document.getElementById('gallery').appendChild(img)
        }
    }

    function uploadFile(file, i) {
        var url = 'https://api.cloudinary.com/v1_1/joezimim007/image/upload'
        var xhr = new XMLHttpRequest()
        var formData = new FormData()
        xhr.open('POST', url, true)
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest')

        // Update progress (can be used to show progress indicator)
        xhr.upload.addEventListener("progress", function (e) {
            updateProgress(i, (e.loaded * 100.0 / e.total) || 100)
        })

        xhr.addEventListener('readystatechange', function (e) {
            if (xhr.readyState == 4 && xhr.status == 200) {
                updateProgress(i, 100) // <- Add this
            }
            else if (xhr.readyState == 4 && xhr.status != 200) {
                // Error. Inform the user
            }
        })

        formData.append('upload_preset', 'ujpu6gyk')
        formData.append('file', file)
        xhr.send(formData)
    }
    var login_btn = document.querySelector("#login_btn");
  login_btn.disabled = true;
  /*form validation*/
  var form1 = document.getElementById("form1");
  var spinner = document.getElementById("spinner");
  var circle = document.getElementById("circle");
  var x_circle = document.getElementById("x-circle");
</script>
@endsection














