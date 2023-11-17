<div class="quiz">
    
    <div class="quiz_title">
        <span>Quiz Pre-View.</span>
    </div>

    <h2 class="header_quiz">Quiz</h2>

    <div class="quiz_pre_title">
        <span>{{ $quiz_data->Quiz_Title }}</span>
    </div>

    <div class="quiz_preview_discription">
        <span>{!! $quiz_data->Quiz_Description !!}</span>
    </div>

    <div class="quiz_time_">
        <div class="start_time">
            <span>Start Time: {{ $quiz_data->Start_Date }}&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{  $quiz_data->Start_Time}}</span>
        </div>
        <div class="end_time">
            <span>End Time: {{ $quiz_data->End_Date }}&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;{{  $quiz_data->End_Time}}</span>
        </div>
    </div>

    <div class="time_limits">
        <span>Time Limit: {{ $quiz_data->Time_Limit }}&nbsp;min</span>
    </div>

    <div class="line"></div>




    <div class="quections_section_with_answers">

        @foreach ($quiz as $quiz_data)

        <div class="quiction_cart">
            <div class="quection_with_number_1">

                <div class="quection_number">
                    <span>1.</span>
                </div>
                <div class="quection_dis">
                    <span>{!! $quiz_data->Quiction !!}</span>
                </div>
            </div>

            <div class="answers_section">
                <div class="_answer {{ $quiz_data->Correct_Answer == 'A' ? 'hight_light' : '' }}">
                    <span>{{ $quiz_data->Answer1 }}</span>
                </div>
                <div class="_answer {{ $quiz_data->Correct_Answer == 'B' ? 'hight_light' : '' }}">
                    <span>{{ $quiz_data->Answer2 }}</span>
                </div>
                <div class="_answer {{ $quiz_data->Correct_Answer == 'C' ? 'hight_light' : '' }}">
                    <span>{{ $quiz_data->Answer3 }}</span>
                </div>
                <div class="_answer {{ $quiz_data->Correct_Answer == 'D' ? 'hight_light' : '' }}">
                    <span>{{ $quiz_data->Answer4 }}</span>
                </div>
            </div>

        </div>
        <div class="line"></div>
            
        @endforeach



       {{--  <div class="quiction_cart">
            <div class="quection_with_number_1">

                <div class="quection_number">
                    <span>2.</span>
                </div>
                <div class="quection_dis">
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum porro dicta excepturi quos numquam, nesciunt sequi earum incidunt temporibus fuga aliquam eligendi qui provident ipsa obcaecati amet consequuntur</span>
                </div>
            </div>

            <div class="answers_section">
                <div class="_answer">
                    <span>A. Lorem ipsum dolor sit amet consectetur.</span>
                </div>
                <div class="_answer">
                    <span>B. Harum porro dicta excepturi quos numquam</span>
                </div>
                <div class="_answer">
                    <span>C. Mesciunt sequi earum incidunt temporibus fuga aliquam eligendi qui</span>
                </div>
                <div class="_answer hight_light">
                    <span>D. Quos numquam, nesciunt sequi earum incidunt</span>
                </div>
            </div>

        </div>
        <div class="line"></div>

        <div class="quiction_cart">
            <div class="quection_with_number_1">

                <div class="quection_number">
                    <span>3.</span>
                </div>
                <div class="quection_dis">
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Harum porro dicta excepturi quos numquam, nesciunt sequi earum incidunt temporibus fuga aliquam eligendi qui provident ipsa obcaecati amet consequuntur</span>
                </div>
            </div>

            <div class="answers_section">
                <div class="_answer hight_light">
                    <span>A. Lorem ipsum dolor sit amet consectetur.</span>
                </div>
                <div class="_answer">
                    <span>B. Harum porro dicta excepturi quos numquam</span>
                </div>
                <div class="_answer">
                    <span>C. Mesciunt sequi earum incidunt temporibus fuga aliquam eligendi qui</span>
                </div>
                <div class="_answer">
                    <span>D. Quos numquam, nesciunt sequi earum incidunt</span>
                </div>
            </div>

        </div> --}}


        <div class="buttons">
            <div class="publish_btn">
                <input type="button" value="Publish" class="publish_btn_clk">
            </div>
            <div class="edit_btn">
                <input type="button" value="Edit" class="edit_btn_clk">
            </div>
            <div class="cancel_btn">
                <input type="button" value="Cancel" class="cancel_btn_clk">
            </div>
        </div>
 
    </div>
</div>