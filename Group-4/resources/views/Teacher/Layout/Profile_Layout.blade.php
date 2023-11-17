<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal Kids</title>
    <link rel="stylesheet" href="{{ asset('Css/Teacher/Comman_Styles.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/Teacher/Teacher_Profile_Styles.css') }}">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js" integrity="sha512-2hIlk2fL+NNHkULe9gGdma/T5vSYk80U5tvAFSy3dGEl8XD4h2i6frQvHv5B+bm/Itmi8nJ6krAcj5FWFcBGig==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" integrity="sha512-6qkvBbDyl5TDJtNJiC8foyEVuB6gxMBkrKy67XpqnIDxyvLLPJzmTjAj1dRJfNdmXWqD10VbJoeN4pOQqDwvRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/29e794e67b.js" crossorigin="anonymous"></script>
    <script src="{{ asset('Js/Teacher/Teacher_Profile.js') }}"></script>
</head>
<body>
    <div class="container">
        <div class="main_section_1">
            <div class="top_navigation_bar">
                {{-- Import Navigation --}}
                @yield('Navigation')
            </div>
            <div class="drop_down_">
                {{-- Drop Down Body --}}
            </div>
            <div class="body_section_and_calandars">
                <div class="body_sections_1">
                    {{-- Teacher Body --}}
                    @yield('Teacher_Body')
                </div>
            </div>
        </div>
        <div class="_fixed_sile_navigation">
            {{-- Fixed Navigation --}}
            @yield('Fixed_Navigation')    
        </div>
        @yield('footer')
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/super-build/ckeditor.js"></script>
    <script>
        /* Ckeditor */
    </script>    
</body>
</html>