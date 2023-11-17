@foreach ($teacherDetails as $item)

{{-- <div class="header_topic">

    <div class="leader">
        <span>My Class</span>
    </div>    

</div> --}}

<div class="recent_cls" {{-- style="background-image: url('{{ $item->Cover_Image }}');" --}}>

    <div class="cls_header">

        <div class="class_name">{{ $item->Subject }}</div>
        <div class="book_mark"><i class="fa fa-users" aria-hidden="true"></i></div>
    </div>

    <div class="cls_body">
        <!-- <div class="clas_icon"><i class="fa-solid fa-chalkboard-user"></i></div> -->
        <div class="clas_name"><span>Grade : {{ $item->Grade }}</span></div>
    </div>
    <div class="cls_body">
        <!-- <div class="clas_icon"><i class="fa fa-calendar" aria-hidden="true"></i></div> -->
        <div class="clas_name"><span>Year : {{ $item->Batch }}</span></div>
    </div>

    <div class="members">
        <!-- <div class="member_icon clas_icon"><i class="fa fa-users" aria-hidden="true"></i></div> -->
        <div class="number_of_members"><span>Students : 12</span></div>
    </div>

    <div class="clas_btn">

        <div class="view"><a href="{{ url('my_class/'.$item->id) }}"><span>View&nbsp;&nbsp;</span><i class="fa fa-caret-right pic_arrow" aria-hidden="true"></i></a></div>
    </div>

</div>
    
@endforeach

 


{{-- <div class="recent_cls">

    <div class="cls_header">

        <div class="class_name">Engish</div>
        <div class="book_mark"><i class="fa fa-users" aria-hidden="true"></i></div>
    </div>

    <div class="cls_body">
        <!-- <div class="clas_icon"><i class="fa-solid fa-chalkboard-user"></i></div> -->
        <div class="clas_name"><span>Grade : 10</span></div>
    </div>
    <div class="cls_body">
        <!-- <div class="clas_icon"><i class="fa fa-calendar" aria-hidden="true"></i></div> -->
        <div class="clas_name"><span>Year : 2023</span></div>
    </div>

    <div class="members">
        <!-- <div class="member_icon clas_icon"><i class="fa fa-users" aria-hidden="true"></i></div> -->
        <div class="number_of_members"><span>Students : 12</span></div>
    </div>

    <div class="clas_btn">

        <div class="view"><span>View&nbsp;&nbsp;</span><i class="fa fa-caret-right pic_arrow" aria-hidden="true"></i></div>
    </div>

</div> --}}

{{-- <div class="recent_cls">

    <div class="cls_header">

        <div class="class_name">Engish</div>
        <div class="book_mark"><i class="fa fa-users" aria-hidden="true"></i></div>
    </div>

    <div class="cls_body">
        <!-- <div class="clas_icon"><i class="fa-solid fa-chalkboard-user"></i></div> -->
        <div class="clas_name"><span>Grade : 10</span></div>
    </div>
    <div class="cls_body">
        <!-- <div class="clas_icon"><i class="fa fa-calendar" aria-hidden="true"></i></div> -->
        <div class="clas_name"><span>Year : 2023</span></div>
    </div>

    <div class="members">
        <!-- <div class="member_icon clas_icon"><i class="fa fa-users" aria-hidden="true"></i></div> -->
        <div class="number_of_members"><span>Students : 12</span></div>
    </div>

    <div class="clas_btn">

        <div class="view"><a href=""><span>View&nbsp;&nbsp;</span><i class="fa fa-caret-right pic_arrow" aria-hidden="true"></i></a></div>
    </div>

</div> --}}
