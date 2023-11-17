<div class="sub_iterm">
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
                {{-- <img src="{{ asset($details->Image) }}" alt="" width="60px" height="60px"> --}}
            </figure>
        </div>
        <div class="setting_icon">
            <i class="fa fa-cog set" aria-hidden="true"></i>
        </div>
    </div>
</div>
    
@endsection



@section('Drop_Down')

<div class="drop_down_body">
    <div class="drop_down_section">
        <div class="images">
            <figure>
                {{-- <img src="{{ asset($details->Image) }}" alt="ssss" width="50px" height="50px" class="drop_down_pic"> --}}
            </figure>
        </div>
        <div class="drop_name">
            <h3>Shehan Hansaja</h3>
        </div>
    </div>

    <div class="secound_body">

        <div class="row_cart">
            <div class="image_title">
                <div class="cart_image"><i class="fa fa-tachometer" aria-hidden="true"></i></div>
                <div class="cart_title">
                    <span>Dashboard</span>
                </div>
            </div>
        </div>
        <div class="row_cart">
            <div class="image_title">
                <div class="cart_image">
                    <i class="fa fa-user" aria-hidden="true"></i>
                </div>
                <div class="cart_title">
                    <span>Profile</span>
                </div>
            </div>
        </div>
        <div class="row_cart">
            <div class="image_title">
                <div class="cart_image">
                    <i class="fa fa-cog" aria-hidden="true"></i>
                </div>
                <div class="cart_title">
                    <span>Setting & Privacy</span>
                </div>
            </div>
        </div>
        <div class="row_cart">
            <div class="image_title">
                <div class="cart_image">
                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                </div>
                <div class="cart_title">
                    <span>Logout</span>
                </div>
            </div>
        </div>
        
    </div>
</div>