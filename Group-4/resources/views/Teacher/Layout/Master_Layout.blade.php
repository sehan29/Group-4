<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/myclass_styles.css') }}"> --}}
    <!-- Include SweetAlert CSS and JS -->

    
    <link rel="stylesheet" href="{{ asset('Css/Teacher/Comman_Styles.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('Css/Teacher/Class_Styles.css') }}"> --}}
    @yield('CSS')
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/super-build/ckeditor.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script>
    <script src="https://kit.fontawesome.com/29e794e67b.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('Js/Teacher/Calandar.js') }}"></script>
</head>
<body>


    <div class="container">


        <div class="main_section_1">
            <div class="top_navigation_bar">
{{--                 <div class="sub_iterm">
                    <div class="sub_iterms">
                        <ul class="itm">
                            <li><i class="fa fa-bell ss12" aria-hidden="true"></i></li>
                            <li><i class="fa fa-comments" aria-hidden="true"></i></li>
                        </ul>
                        
                    </div>

                    <div class="user_details">

                        <div class="name_of_user">
                            <p>Shehan Hansaja</p>
                        </div>

                        <div class="profile_pic">
                            <figure>
                                <img src="{{ asset('background_images/user2.jpg') }}" alt="" width="60px" height="60px">
                            </figure> 
                        </div>
                        <div class="setting_icon">
                            <i class="fa fa-cog" aria-hidden="true" title="Setting"></i>
                        </div>
                    </div>

                </div> --}}
                @yield('Navigation')
            </div>




            <div class="body_section_and_calandars">
                <div class="body_sections">
                    <div class="leader_bord_section">

{{-- 
                        <div class="header_topic">

                            <div class="leader">
                                <span>My Class</span>
                            </div>    

                        </div>
 --}}

                        @yield('Header')
                        

                        <div class="body_content">

                            <div class="recent_accessed_cls">

                                @yield('Teacher_Body')

                            </div>
                            

                            
 
                        </div>
            

                        </div>
                        
                    </div>

    
                </div>
                <div class="calandar_events">
                    <div class="events">

                        <div class="calandar_event">
                            <span>Calandar Event</span>
                        </div>


                        <div class="event_img">

                            <div class="all_set">
                                <div class="not_title">
                                    <span>There is no Event</span>
                                </div>
                                <div class="event_img1">
                                    <i class="fa-regular fa-newspaper"></i>
                                </div>
                            </div>
                            
                        </div>
                    </div>


                    <div class="calandars">

                        <div class="calendar">
                            <div class="month">
                              <i class="fas fa-angle-left prev"></i>
                              <div class="date">
                                <h1></h1>
                              </div>
                              <i class="fas fa-angle-right next"></i>
                            </div>
                            <div class="weekdays">
                              <div>Sun</div>
                              <div>Mon</div>
                              <div>Tue</div>
                              <div>Wed</div>
                              <div>Thu</div>
                              <div>Fri</div>
                              <div>Sat</div>
                            </div>
                            <div class="days"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- <div class="footer">
                <span>&copy; 2023 Powerd By <span class="tech_name">SH Technology</span></span>
            </div> --}}
            @yield('footer')
        </div>
        <div class="_fixed_sile_navigation">
            @yield('Fixed_Navigation') 
        </div>
        

    </div>

   <script src="{{ asset('Js/Teacher/cal.js') }}"></script>
   <script src="{{ asset('Js/Teacher/ck_editor.js') }}"></script>


   <script>

    $(document).ready(function(){
        
        $(document).on('click','.edit_prograss',function(){
            $('.section_2').addClass("active");
        });

        $(document).on('click','.overlay',function(){
            $('.section_2').removeClass("active");
        });

    });

    const section = document.querySelector("section"),
      overlay = document.querySelector(".overlay"),
      showBtn = document.querySelector(".show-modal"),
      closeBtn = document.querySelector(".close-btn");
      section_1 = document.querySelector('section');

      showBtn.addEventListener("click", () =>{
        section.classList.add("active");
        section_1.classList.add('active');
        console.log("shehan");


      } );
      overlay.addEventListener("click", () =>
        section.classList.remove("active")
        
      );
      closeBtn.addEventListener("click", () =>
        section.classList.remove("active")
        );

$(document).ready(function(){

var topic_id;
/*  let section = $('section');
let overlay = $('.overlay');
let overlay = $('.close-btn');
let section_1 = $('section'); */


$(document).on('click','.shehan',function(){

    var id = $(this).val();
    console.log(id);
    $('.section_1').addClass("active");

    $.ajax({

        type:"GET",
        url:"/edit_topic_title/"+id,
        success:function(response){

            console.log(response);

            $('#topic').val(response.student.Topic_Name);
            $('#st_id').val(response.student.id);
            console.log(response.student.id);
            

        }
    });

});




$(document).on('click','.overlay',function(){

    $('.section_1').removeClass("active");

});


$(document).on('click','.resourse',function(){

    topic_id = $(this).val();
    console.log(topic_id);
    $('.section_3').addClass("active");
    
    console.log("shehan");


});

$(document).on('click','.overlay',function(){

    $('.section_3').removeClass("active");

});

$(document).on('click','.quiz',function(){

    var class_id = $('.hidden_value').val();
    console.log(topic_id);
    window.location.href="quiz/"+class_id+"/"+topic_id;
});
$(document).on('click','.article',function(){

    var class_id = $('.hidden_value').val();
    console.log(topic_id);
    window.location.href="article/"+class_id+"/"+topic_id;
}); 


});

</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@yield('js_section')

</body>
</html>