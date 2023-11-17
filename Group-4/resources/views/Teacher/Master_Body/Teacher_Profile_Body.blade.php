<div class="profile">
    <div class="profile_header">
        <span>Profile</span>
    </div>

    {{-- Make sure to change action after creating Autherntication make_changes/1 --}}
    <form action={{ "update/1"}} method="post" enctype="multipart/form-data">
        @csrf
        <div class="genaral_details">
            <div class="title_section">
                <i class="fa fa-caret-right gen_data" aria-hidden="true">&nbsp;&nbsp;</i>
                <span>General Details</span>
            </div>
            <div class="form_and_profile">
                <div class="form_section">

                    <div class="first_name">
                        <div class="name_first">
                            <span>First Name</span>
                        </div>
                        <div class="text_feild">
                            <input type="text" name="first_name" value="{{ $details->First_Name }}" disabled>
                        </div>
                    </div>

                    <div class="first_name">
                        <div class="name_first">
                            <span>Last name</span>
                        </div>
                        <div class="text_feild">
                            <input type="text" name="last_name" value="{{ $details->Last_Name }}" disabled>
                        </div>
                    </div>

                    <div class="first_name">
                        <div class="name_first">
                            <span>Email Address</span>
                        </div>
                        <div class="text_feild">
                            <input type="email" name="user_email"  value="{{ $details->Email }}" disabled>
                        </div>
                    </div>

                    <div class="first_name">
                        <div class="name_first">
                            <span>Address Line 1</span>
                        </div>
                        <div class="text_feild">
                            <input type="text" name="address_1" value="{{ $details->Address_1 }}">
                        </div>
                    </div>

                    <div class="first_name">
                        <div class="name_first">
                            <span>Address Line 2</span>
                        </div>
                        <div class="text_feild">
                            <input type="text" name="address_2" value="{{ $details->Address_2}}">
                        </div>
                    </div>

                    <div class="first_name">
                        <div class="name_first">
                            <span>City/Town</span>
                        </div>
                        <div class="text_feild">
                            <input type="text" name="town" value="{{ $details->City }}">
                        </div>
                    </div>

                    <div class="first_name">
                        <div class="name_first">
                            <span>Province</span>
                        </div>
                        <div class="text_feild">
                            <input type="text" name="province" value="{{ $details->Province }}">
                        </div>
                    </div>

                </div>

                <div class="upload_image">
                    <div class="apk_img">
                        <div class="ksks">
                            <img src="{{ asset($details->Image) }}" alt="sdsdsd" width="150px" height="150px" class="img_2">
                            <div class="btn_c">
                                <div class="box"><i class="fa fa-camera"></i>
                                    <input type="file" name="photo" id="profile_change">
                                </div>   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="profile_section">
            <div class="profile_1">
                <i class="fa fa-caret-right pic_arrow" aria-hidden="true">&nbsp;&nbsp;</i>
                <span class="user_pic">User Picture</span>
            </div>
            <div class="drag_drop">
                <div class="drag_area">
                    <div class="drag_drop_icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <span class="header">Drag & Drop</span>
                    <span class="header">Or <span class="button">Browser</span></span>
                    <input type="file" hidden class="file_b">
                    <span class="support">Supports: JPEG, JPG, PNG</span>
                </div>
            </div>
        </div>

        <div class="quilification_section">
            <div class="quilifications">
                <i class="fa fa-caret-right qulification_arrow" aria-hidden="true">&nbsp;&nbsp;</i>
                <span class="qulifi">Qualifications</span>
            </div>
            <div class="qualification_details">
                <div class="number name_first">
                    <span>Discription</span>
                </div>
                <div class="number_field">
                    
                        <!-- <label for="question2">Question 2:</label> -->
                        <div id="editor1" name="editor1"></div>
                </div>
            </div>
        </div>

        <div class="contact_details">
            <div class="contact_del">
                <i class="fa fa-caret-right con" aria-hidden="true" id="con">&nbsp;&nbsp;</i>
                <span class="con_details">Contact Details</span>
            </div>
            <div class="details">
                <div class="number name_first">
                    <span>Mobile Number</span>
                </div>

                <div class="number_field">
                    <input type="text" name="contact" value="{{ $details->Contact_Number }}">
                </div>
            </div>
        </div>

        <div class="update_cancel_btns">
            <input type="submit" value="Save Changes">
            <input type="button" value="Cancel">
        </div>
    </form>
    
    @if(Session::has('message'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 5000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'success',
        title: 'Data Updated Successfully.'
      })
    </script>
    @endif
</div>
