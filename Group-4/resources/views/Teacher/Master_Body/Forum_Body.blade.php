    <div class="header_topic">

        <!-- <div class="leader">
            <span>Dashbord</span>
        </div> -->
    </div>

    <div class="quiz">
        <form action="{{ url('my_class/quiz/'.$class_id_.'/'.$topic_id_.'/store') }}" method="POST">
            @csrf
    
            <div class="quiz_title">
                <span>Quiz Setting</span>
            </div>

            <div class="quiz_name">
                <div class="q_name">
                    <span>Quiz Name</span>
                </div>
                <div class="text_field">
                    <input type="text" placeholder="Enter Quiz Title" name="quiz_name">
                </div>
            </div>

            <div class="quiz_name">
                <div class="q_name">
                    <span>Quiz Discription</span>
                </div>
                <div class="text_field_1">
                    <!-- <textarea name="dis" id="question1" cols="30" rows="10"></textarea> -->
                    
                        <!-- <label for="question2">Question 2:</label> -->
                        
                        <textarea name="quiz_discription" id="editor" cols="30" rows="10"></textarea>
                    
                    
                </div>
            </div>

            <div class="time_start">

                <div class="start_title">
                    <span>Start Time</span>
                </div>

                <div class="inner_details">

                    <input type="date" name="start_date" id="">
                    <input type="time" name="start_time" id="">
                    <div class="date">
                        <select name="" id="" title="Date">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>

                    <div class="date">
                        <select name="" id="" title="Mounth">
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">Apile</option>
                        </select>
                    </div>

                    <div class="date" title="Year">
                        <select name="" id="">
                            <option value="">2022</option>
                            <option value="">2023</option>
                            <option value="">2024</option>
                            <option value="">2025</option>
                        </select>
                    </div>

                    <div class="date">
                        <select name="" id="" title="Hour">
                            <option value="">00</option>
                            <option value="">01</option>
                            <option value="">02</option>
                            <option value="">03</option>
                        </select>
                    </div>

                    <div class="date">
                        <select name="" id="" title="Minutes">
                            <option value="">01</option>
                            <option value="">02</option>
                            <option value="">03</option>
                            <option value="">04</option>
                        </select>
                    </div>

                </div>

            </div>
            <div class="time_end">

                <div class="start_title">
                    <span>End Time</span>
                </div>

                <div class="inner_details">
                    <input type="date" name="end_date" id="">
                    <input type="time" name="end_time" id="">

                    <div class="date">
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>

                    <div class="date">
                        <select name="" id="">
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">Apile</option>
                        </select>
                    </div>

                    <div class="date">
                        <select name="" id="">
                            <option value="">2022</option>
                            <option value="">2023</option>
                            <option value="">2024</option>
                            <option value="">2025</option>
                        </select>
                    </div>

                    <div class="date">
                        <select name="" id="">
                            <option value="">00</option>
                            <option value="">01</option>
                            <option value="">02</option>
                            <option value="">03</option>
                        </select>
                    </div>

                    <div class="date">
                        <select name="" id="">
                            <option value="">01</option>
                            <option value="">02</option>
                            <option value="">03</option>
                            <option value="">04</option>
                        </select>
                    </div>

                </div>
            </div>

            <div class="time_limit">

                <div class="start_title">
                    <span>Time Limit</span>
                </div>

                <div class="date_inner">

                    <input type="time" name="time_limit" id="">
                    <div class="date">
                        <select name="" id="">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>

                  {{--   <div class="date">
                        <select name="" id="horse">
                            <option value="">Hour</option>
                            <option value="">2</option>
                            <option value="">3</option>
                            <option value="">4</option>
                        </select>
                    </div>  --}}

                </div>

            </div>

            <div class="number_of_quection">

                <div class="number_title">
                    <span>Number of Quections</span>
                </div>

                <div class="text_number">
                    <input type="number" value="0" name="number_of_quections">
                </div>
            </div>


            <div class="button_section">
                <div class="save_display">
                    <input type="submit"  id="btn-sub" value="Save and Display">
                    <input type="button"  id="btn-sub2" value="Save">
                    <input type="button"  id="btn-sub3" value="Cancel">
                </div>
            </div>
        </form>

    </div>

 