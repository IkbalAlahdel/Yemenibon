@include('client/header')
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" id="post-data">
                @include('data')
            </div>
        </div>
    </div>

    <button class="btn btn-info" id="more">more</button>
    <div class="ajax-load" style="display:none">
<p>  loading</p>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

   <script>

        function load(page){
            $.ajax({
                url:"?page="+page,
                type:"get",
                beforeSend:function(){
                    $(".ajax-load").show();
                }
            }).done(function(data){
                if(data.html==" "){
                    $(".ajax-load").html("no data");
                    return ;
                }
                $(".ajax-load").hide();
                $("#post-data").append(data.html);
            });
        }

        // var page=1;
        // $(window).scroll(function(){
        //     if($(window).scrollTop()+$(window).height()>=$(document).height())
        //     {
        //         page++;
        //         load(page);
        //     }
        // });

        var page=1;
        $("#more").click(function(){
                page++;
                load(page);
           
        });
        </script>
</body>
</html>