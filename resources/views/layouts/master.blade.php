<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>YemeniBon Dashboard</title>

  <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="{{asset(__('sidebar.css_file') )}}">
  <!-- <link rel="stylesheet" href="{{asset(__('sidebar.css_file_en') )}}"> -->

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>

  <!-- Favicons -->
  <link href= "{{asset('img/title.png')}} " rel="icon">

  <!-- Bootstrap core CSS -->
  <link href= "{{asset('lib/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
  <!--external css-->
  
  <link href= "{{asset('lib/font-awesome/css/font-awesome.css')}} " rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href= "{{asset('css/zabuto_calendar.css')}} ">
  <link rel="stylesheet" type="text/css" href= "{{asset('lib/gritter/css/jquery.gritter.css')}} " />
  <!-- Custom styles for this template -->
  <!-- <link href= "{{asset('css/style.css')}} " rel="stylesheet"> -->
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link href= "{{asset('css/style-responsive.css')}} " rel="stylesheet">
  <script src="{{asset('lib/chart-master/Chart.js')}}"></script>

  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.tiny.cloud/1/9u2s157ky8rkolywf0bev3ctozq7eqoii8frq84vla96spst/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
selector: '#disc',
language_url : '/langs/ar.js',
height : "480",
language: 'ar',
directionality: 'rtl',
plugins: 'tinydrive image advlist lists imagetools code table paste link emoticons searchreplace advlist checklist hr charmap directionality',
toolbar: 'insertfile undo redo  image  | table | link | emoticons | styleselect | bold italic |  alignleft aligncenter alignright alignjustify  bullist numlist outdent indent forecolor backcolor ',
toolbar_mode: 'floating',
tinydrive_token_provider: '/jwt',
tinydrive_google_drive_key: 'AIzaSyCHMZOXHcLPfXTVJ5Liyoj4lH5QudJ3peo',
tinydrive_google_drive_client_id: '896303365657-k5s6nf93jmkl01cam9om7eo1lps5oa2m.apps.googleusercontent.com',
tinydrive_dropbox_app_key:'sl.Asi_IGM54fd8Itqej2Q_XOghg2y1NkmNJZ-Z9BcqohW0sdxzaDZ8TvD0yN9qvnev8RpRAwEmneEmAp9kH1o7BZZnWR-CDe-8blWNyiwlD2UnIQDCbO_a6yHbWQcZ0RZH1oOuXyU',
menu: {
favs: {title: 'المفضلة', items: '   searchreplace | emoticons'}
},
menubar: 'favs edit view insert format  help',
/* enable title field in the Image dialog*/
image_title: true,
/* enable automatic uploads of images represented by blob or data URIs*/
automatic_uploads: true,
/*
URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
images_upload_url: 'postAcceptor.php',
here we add custom filepicker only to Image dialog
*/
file_picker_types: 'image',
/* and here's our custom image picker*/
file_picker_callback: function (cb, value, meta) {
var input = document.createElement('input');
input.setAttribute('type', 'file');
input.setAttribute('accept', 'image/*');
input.setAttribute('accept', 'file/*');

/*
  Note: In modern browsers input[type="file"] is functional without
  even adding it to the DOM, but that might not be the case in some older
  or quirky browsers like IE, so you might want to add it to the DOM
  just in case, and visually hide it. And do not forget do remove it
  once you do not need it anymore.
*/

input.onchange = function () {
  var file = this.files[0];

  var reader = new FileReader();
  reader.onload = function () {
    /*
      Note: Now we need to register the blob in TinyMCEs image blob
      registry. In the next release this part hopefully won't be
      necessary, as we are looking to handle it internally.
    */
    var id = 'blobid' + (new Date()).getTime();
    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
    var base64 = reader.result.split(',')[1];
    var blobInfo = blobCache.create(id, file, base64);
    blobCache.add(blobInfo);

    /* call the callback and populate the Title field with the file name */
    cb(blobInfo.blobUri(), { title: file.name });
  };
  reader.readAsDataURL(file);
};

input.click();
},
content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

  
</script>

<script>
  tinymce.init({
selector: '#disc2',
language_url : '/langs/ar.js',
height : "480",
language: 'ar',
directionality: 'rtl',
plugins: 'tinydrive image advlist lists imagetools code table paste link emoticons searchreplace advlist checklist hr charmap directionality',
toolbar: 'insertfile undo redo  image  | table | link | emoticons | styleselect | bold italic |  alignleft aligncenter alignright alignjustify  bullist numlist outdent indent forecolor backcolor ',
toolbar_mode: 'floating',
tinydrive_token_provider: '/jwt',
tinydrive_google_drive_key: 'AIzaSyCHMZOXHcLPfXTVJ5Liyoj4lH5QudJ3peo',
tinydrive_google_drive_client_id: '896303365657-k5s6nf93jmkl01cam9om7eo1lps5oa2m.apps.googleusercontent.com',
tinydrive_dropbox_app_key:'sl.Asi_IGM54fd8Itqej2Q_XOghg2y1NkmNJZ-Z9BcqohW0sdxzaDZ8TvD0yN9qvnev8RpRAwEmneEmAp9kH1o7BZZnWR-CDe-8blWNyiwlD2UnIQDCbO_a6yHbWQcZ0RZH1oOuXyU',
menu: {
favs: {title: 'المفضلة', items: '   searchreplace | emoticons'}
},
menubar: 'favs edit view insert format  help',
/* enable title field in the Image dialog*/
image_title: true,
/* enable automatic uploads of images represented by blob or data URIs*/
automatic_uploads: true,
/*
URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)
images_upload_url: 'postAcceptor.php',
here we add custom filepicker only to Image dialog
*/
file_picker_types: 'image',
/* and here's our custom image picker*/
file_picker_callback: function (cb, value, meta) {
var input = document.createElement('input');
input.setAttribute('type', 'file');
input.setAttribute('accept', 'image/*');
input.setAttribute('accept', 'file/*');

/*
  Note: In modern browsers input[type="file"] is functional without
  even adding it to the DOM, but that might not be the case in some older
  or quirky browsers like IE, so you might want to add it to the DOM
  just in case, and visually hide it. And do not forget do remove it
  once you do not need it anymore.
*/

input.onchange = function () {
  var file = this.files[0];

  var reader = new FileReader();
  reader.onload = function () {
    /*
      Note: Now we need to register the blob in TinyMCEs image blob
      registry. In the next release this part hopefully won't be
      necessary, as we are looking to handle it internally.
    */
    var id = 'blobid' + (new Date()).getTime();
    var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
    var base64 = reader.result.split(',')[1];
    var blobInfo = blobCache.create(id, file, base64);
    blobCache.add(blobInfo);

    /* call the callback and populate the Title field with the file name */
    cb(blobInfo.blobUri(), { title: file.name });
  };
  reader.readAsDataURL(file);
};

input.click();
},
content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
});

  
</script>

  <!-- =======================================================
    Template Name: Dashio
    Template  url: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
<style>
  .tagA{
    color:red !important;
  }
  </style>
</head>

<body style="background-color:#fcf5efe7; ">

  <section id="container">
  <div class="">
                                                            
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>

      <!--logo start-->
      <!-- <a href="index.html" class="logo"><b style="color:white;">Yemeni<span style="color:#3B291D">Bon</span></b></a> -->
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">

    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        <li>
            <a style="font-size:14px; height:4.7vh; border:0; line-height:20px;" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ $properties['native'] }}
            </a>
        </li>
    @endforeach

          <!-- notification dropdown end -->



         
        </ul>
        <!--  notification end -->
      </div>



      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li>
                               <!-- Authentication
                                 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                             
                               <form method="POST" action="{{ route('logout') }}" class="logout">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" style="color:white;"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form> -->

            <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-jet-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out" >
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-5 my-5 border border-transparent  leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                     
                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link class="py-5 text-center" style="font-size:16px;" href="{{ route('logout') }} "
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                </div>
                </div>


        </li>
        </ul>
      </div>

    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse" style="background-color:#f2e0d4; color:white;font-size:16px;">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu " id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('img/YemeniBon_Logo_Watercolor-01.png')}}" class="img-circle" width="50"></a></p>
          <li class="mt-0 ">
            <a class="tagA" href="{{asset('/dashboard')}}">
              <i class="fa fa-dashboard"></i>
              <span class="fonting"><b>{{__('sidebar.dashboard_page')}}</span>
              </a>
          </li>
          <li class="sub-menu">
            <a  class="tagA"href="{{asset('admin/banners/index')}}">
              <i class="fa fa-picture-o color"></i>
              <span class="color fonting">{{__('sidebar.Banner_page')}}</span>
              </a>
              </li>
          <li class="sub-menu">
            <a  class="tagA" href="{{asset('admin/catatypes/index')}}">
              <i class="fa fa-list color"></i>
              <span class="color fonting">{{__('sidebar.categorytype_page')}}</span>
              </a>

          </li>
          </li>
          <li class="sub-menu">
            <a class="tagA" href="{{asset('admin/categories/index')}}">
              <i class="fa fa-list-alt color"></i>
              <span class="color fonting">{{__('sidebar.category_page')}}</span>
              </a>

              </li>
          <li class="sub-menu ">
            <a  class="tagA" href="{{asset('admin/projects/index')}}">
              <i class="fa fa-desktop color"></i>
              <span class="color fonting">{{__('sidebar.Projects_page')}}</span>
              </a>
          </li>
          </li>
          <li class="sub-menu ">
            <a  class="tagA" href="{{asset('admin/articles/index')}}">
              <i class="fa fa-tasks color"></i>
              <span class="color fonting">{{__('sidebar.Article')}}</span>
              </a>
          </li>  
          <li class="sub-menu ">
            <a  class="tagA" href="{{asset('admin/interviews/index')}}">
              <i class="fa fa-tasks color"></i>
              <span class="color fonting">{{__('sidebar.Interview')}}</span>
              </a>
          </li> 
           <li class="sub-menu ">
            <a  class="tagA" href="{{asset('admin/pdfs/index')}}">
              <i class="fa fa-tasks color"></i>
              <span class="color fonting">{{__('sidebar.Pdf')}}</span>
              </a>
          </li>
         
          <li class="sub-menu ">
            <a class="tagA"  href="{{asset('admin/users/index')}}">
              <i class="fa fa-user color"></i>
              <span class="color fonting">{{__('sidebar.Admin_Users_page')}} </span>
              </a>
          </li>
          <li class="sub-menu ">
            <a class="tagA" href="{{asset('admin/configrations/index')}}">
              <i class="fa fa-cogs color"></i>
              <span class="color fonting">{{__('sidebar.Configrations_page')}}</span></b>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12 main-chart m-5">
@yield('content')
           <!-- / calendar -->
           </div>
          <!-- /col-lg-3 -->
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    </section>
    <footer class="site-footer">
      <div class="text-center">
        <p>
        All Rights Reserved &copy; Copyrights <strong>YemeniBon</strong>. 
        </p>

        <a  href="#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
    @push('scripts')

  <!-- js placed at the end of the document so the pages load faster -->
  <script src= "{{asset('lib/jquery/jquery.min.js')}}"></script>

  <script src= "{{asset('lib/bootstrap/js/bootstrap.min.js')}} "></script>
  <script class="include" type="text/javascript" src= "{{asset('lib/jquery.dcjqaccordion.2.7.js')}} "></script>
  <script src= "{{asset('lib/jquery.scrollTo.min.js')}} "></script>
  <script src= "{{asset('lib/jquery.nicescroll.js')}} " type="text/javascript"></script>
  <script src= "{{asset('lib/jquery.sparkline.js')}} "></script>
  <!--common script for all pages-->
  <script src= "{{asset('lib/common-scripts.js')}} "></script>
  <script type="text/javascript" src= "{{asset('lib/gritter/js/jquery.gritter.js')}} "></script>
  <script type="text/javascript" src= "{{asset('lib/gritter-conf.js')}} "></script>
  <!--script for this page-->
  <script src= "{{asset('lib/zabuto_calendar.js')}} "></script>
  <script src= "{{asset('js/app.js')}} "></script>
  <script src= "{{asset('lib/sparkline-chart.js')}} "></script>




  @endpush
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
  <script >
  
   const currentlocation=location.href;
 const menuItem=document.getElementsByClassName('tagA');

 const itemlength=menuItem.length;
 for(let i=0;i<itemlength;i++){
   console.log(currentlocation);
   if( menuItem[i]==currentlocation)
   {
    menuItem[i].className="active";
   console.log(menuItem[i]);
   }
 }

// var activeNavItem =document.querySelectorAll('a');
// var activeNavItem =$(document.querySelectorAll('a'));

// activeNavItem.click(function(){
//   activeNavItem.removeClass('active');
//   $(this).addClass('active');  
// });

</script>
</body>

</html>
