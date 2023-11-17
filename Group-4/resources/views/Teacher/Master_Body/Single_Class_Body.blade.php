<div class="classes">
    <div class="classes_title">
        <span>{{ $class_details->Subject }}</span>
    </div>

    <div class="grade_header">
        <span>Grade - {{-- {{ $cls_data->Grade }} --}}</span>
    </div>
    <div class="year">
        <span>Batch - {{ $class_details->Batch }}</span>
    </div>


    <div class="student_summary_raw">


        <div class="carts">

            <div class="cart">
                <div class="number_student">
                    <div class="numbers">
                        <span>100+</span>
                    </div>
                    <div class="st-title"><a href="{{ url('students/'.$class_details->id) }}">
                        <span>Students</span></a>
                    </div>
                </div>

                <div class="st_image">
                    <div class="img">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="cart">
                <div class="number_student">
                    <div class="numbers">
                        <span>12</span>
                    </div>
                    <div class="st-title">
                        <span>Classes</span>
                    </div>
                </div>

                <div class="st_image">
                    <div class="img">
                        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="cart">
                <div class="number_student">
                    <div class="numbers">
                        <span>12+</span>
                    </div>
                    <div class="st-title"><a href="{{-- {{ url('leader_bord/'.$cls_data->Class_id) }} --}}">
                        <span>Leader Bord</span></a>
                    </div>
                </div>

                <div class="st_image">
                    <div class="img">
                        <i class="fa-solid fa-ranking-star"></i>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="teacher_prograss">

        <div class="lesson_discription">
            <div class="img_discription_1">
                <div class="dis_img">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </div>

                <div class="text_discription">

                    <!-- <span>Prograss</span> -->
                    <div class="pro">
                        <span>Prograss</span>
                    </div>

                    <div class="prograss_dis">
                        <span>{{-- {!! $Prograss->Prograss !!} --}}</span>                 
                    </div>
                </div>
            </div>

            <div class="edit_buuton">
                <input type="button" value="Edit" class="edit_prograss">
            </div>
        </div>

        <div class="add_new_topic">

            <div class="adding">
                <div class="image_add">
                    <div class="ic">
                        <span><i class="fa fa-plus" aria-hidden="true"></i></span>
                    </div>
                    <div class="add-discription">
                        <span>Add New Topic</span>
                    </div>
                </div>
                

                <div class="new_topic_btn">
                    <button type="button" class="show-modal add_topic" id="add_tpoic_btn">Add Topic</button>
                </div>
            </div>
        </div>


   {{--  @foreach ($Topics as $item) --}}

        <div class="topic_row">

            <div class="topic_title">
                {{-- <span>{{ $item->Topic }}</span> --}}
            </div>

            {{-- <p>{{ $quiz_data->Quiz_title }}</p> --}}

            <div class="add_materials">
                <!-- <div class="iconic_img">
                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                </div> -->

                {{-- <div class="dis_add_metarial">
                    <input type="button" value="Add Resourse" id="add_resoureses">
                </div> --}}

                {{-- <a href="{{  ('Edit_Tpoic/'.$item->id)}}">Edit</a> --}}
{{--                 <button type="button" value="{{ $item->id }}" class="shehan">Edit</button>
                <button type="button" value="{{ $item->id }}" class="resourse">Resourse</button> --}}
                {{-- <button type="button"><a href="{{ url('Quiz/'.$cls_data->id).'/'.$item->id.'/'.$quiz_data->id }}">View</a></button> --}}
                
            </div>

            





        </div>

        @foreach ($topic_details as $topic)
        <div class="sdsd12">

            <div class="all_titlles">
                <div class="topic_title">
                    <p class="x"><i class="fa-solid fa-caret-right x"></i>&nbsp;&nbsp;{{ $topic->Topic_Name }}</p>
                </div>
    
                <div class="topic_btns">
                    <button type="button" value="{{ $topic->id }}" class="shehan">Edit</button>
                    <button type="button" value="{{ $topic->id }}" class="resourse">Resourse</button>
                </div>

            </div>

            

            <div class="body_title">

            @foreach ($seq as $item1)

                @if ($topic->id == $item1->Topic_Id)

                    @foreach ($quiz_data as $quiz)
                        @if($item1->Activity == $quiz->Quiz_Un)
                            
                            <div class="local_quiz">
                                <div class="quiz_title">
                                    <p class="quix_ttl">&nbsp;&nbsp;{{ $quiz->Quiz_Title }}</p>
                                </div>
                                
                                
                                <div class="btns">
                                    <button class="marks_cls"><a href="{{ url('Marks/'.$topic->Class_No.'/'.$topic->id.'/'.$quiz->id)}}"><i class="fa-solid fa-check"></i>&nbsp;Marks</a></button>
                                    <button type="button" class="view_cls"><a href="{{ url('Quiz/'.$topic->id.'/'.$quiz->id)}}"><i class="fa-solid fa-eye"></i>&nbsp;View</a></button>
                                    <button class="edit_cls"><a href="{{ url('Edit/'.$topic->Class_No.'/'.$topic->id.'/'.$quiz->id)}}"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Edit</a></button>
                                    <button class="delete_cls"><i class="fa-solid fa-trash-can"></i>&nbsp;Delete</button>
    
                                </div> 
                            </div>
                            
                        @endif
                        
                    @endforeach

{{--                     @foreach ($articles as $article)
                        @if($item1->Activity_sequency == $article->Article_Letter)

                            <div class="local_article">
                                <div class="artcle_title">
                                    <p class="quix_ttl">✎&nbsp;&nbsp;{{ $article->Article_id }}</p>
                                </div>
                                
                                <div class="btns2">
                                    <button type="button" class="view_cls"><i class="fa-solid fa-eye"></i>&nbsp;View</button>
                                    <button class="edit_cls"><i class="fa-regular fa-pen-to-square"></i>&nbsp;Edit</button>
                                    <button class="delete_cls"><i class="fa-solid fa-trash-can"></i>&nbsp;Delete</button>
    
                                </div>
                            </div>

                            
                        @endif
                        
                    @endforeach --}}
 
                @endif
                
            @endforeach 
            </div>
            <hr>
        </div>
        @endforeach

    </div>

    <section id="model">
        <span class="overlay"></span>
        <div class="modal-box">
          <i class="fa-regular fa-circle-check"></i>

          <form action="{{ url('/lesson/'.$class_details->id)}}" method="get">

            <div class="text_feild_name">

                <input type="hidden" value="{{ $class_details->id }}">
                <div class="name_feild_1"><span>Enter Topic :</span></div>
                <div class="text_feild_1"><input type="text" class="text_2" name="topics"></div>
            </div>

            <div class="buttons">
                <input type="submit" value="add">
                <button class="close-btn">Ok, Close</button>
            </div>


          </form>
          
        </div>
    </section>


 


    <section id="model" class="section_2">
        <span class="overlay"></span>
        <div class="modal-box">
          <i class="fa-regular fa-circle-check"></i>

          <form action="{{-- {{ url('Prograss/'.$Prograss->id) }} --}}" method="get">

            <textarea name="dis" id="editor" cols="30" rows="10">{{-- {{ $Prograss->Prograss }} --}}</textarea>
            <div class="buttons">
                <input type="submit" value="add">
                <button class="close-btn">Ok, Close</button>
            </div>


          </form>
          
        </div>
    </section>

    <section id="model" class="section_1">
        <span class="overlay"></span>
        <div class="modal-box">
          <i class="fa-regular fa-circle-check"></i>

          <form action="{{ url('update_topic') }}" method="get">


            <input type="hidden" name="st_id" id="st_id">
            <div class="text_feild_name">
                <div class="name_feild_1" ><span>Enter Topic :</span></div>
                <div class="text_feild_1"><input type="text" class="text_2" name="topics" id="topic"></div>
            </div>

            <div class="buttons">
                <input type="submit" value="Update">
                <button class="close-btn">Cancel</button>
            </div>


          </form>
          
        </div>
    </section>

    <section id="model" class="section_3">
        <span class="overlay"></span>
        <div class="modal-box">
          <span class="royal_title">Royal Kids</span>
          <img src="{{-- {{ asset('css/logo5_color.svg') }} --}}" alt="" srcset="" width="150px" height="150px">


            <input type="hidden" value="{{ $class_details->id }}" class="hidden_value">
            <div class="btn_carts">

                <button class="quiz">
                    <div class="names">Quiz</div>
                    <div class="icons"><i class="fa-regular fa-pen-to-square quizes"></i></div>
                </button>
                <button class="article">
                    <div class="names">Article</div>
                    <div class="icons"><i class="fa-regular fa-newspaper articles"></i></div>
                </button>
                <button class="article">
                    <div class="names">Note</div>
                    <div class="icons"><i class="fa-regular fa-note-sticky notes"></i></div>
                </button>
                {{-- <a href="">Videos</a> --}}

            </div>
        </div>
    </section>



</div>
