<!DOCTYPE html>
<html lang="en">
<head>
    <title>Who Are You</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#" id="logo">
            <img src="{{asset('svg/foxy_face_winkle.svg')}}" alt="foxy_face_winkle">
            <img src="{{asset('svg/Component_1.svg')}}" alt="foxy">
        </a>

        <a id="models" href="#" class="pull-left">Models</a>
        <a id="videos" href="#" class="">Videos</a>

        <div id="search_button" class="d-flex justify-content-center">
            <img src="{{asset('svg/search_icon.svg')}}">
        </div>
        <div id="basket_button" class="d-flex justify-content-center align-items-center">
            <div>
                <p class="d-flex justify-content-center align-items-center">3</p>
                <img src="{{asset('svg/CartIcon_Group.svg')}}" width="20" height="20">
            </div>
        </div>
        <button id="sign_up" type="button" class="btn">Sign Up</button>
        <button id="login" type="button" class="btn">Login</button>
    </nav>
    <div class="d-flex flex-column" id="header_who_are_you">
        <h1>Who are you?</h1>
        <div id="header_under_liner"></div>
    </div>
    <div id="main_content" class="d-flex justify-content-center flex-row">
        <div id="fan_window" class="d-flex align-items-center flex-column">
            <h2>Fan</h2>
            <div class="align-items-left middle_list">
                <h4>Signup for a free account to:</h4>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3414.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Chat with your dream girls</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3414.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Order Custom Videos</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3414.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Access private Snapchats</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3414.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Buy exclusive Videos</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3414.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Find your new crush</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3414.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">And much more…</p>
                    </div>
                </div>
            </div>
            <div id="sign_up_for_free" class="d-flex justify-content-center flex-row align-items-center bottom_button">
                SIGN UP FOR FREE
                <img src="{{asset('svg/heart.svg')}}">
            </div>
        </div>
        <div id="or_window" class="d-flex align-items-center flex-column">
            <img src="{{asset('svg/Group_2173.svg')}}">
            <p>or</p>
        </div>
        <div id="model_window" class="d-flex align-items-center flex-column">
            <h2>Model</h2>
            <div class="align-items-left middle_list">
                <h4>Open your own store to:</h4>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3413.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Sell videos&photosets</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3413.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Sell customs</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3413.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Sell 1-on-1 video chats</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3413.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Sell custom subscriptions</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3413.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">Use your own custom domain</p>
                    </div>
                </div>
                <div class="media">
                    <img class="align-self-start mr-2" src="{{asset('svg/Group_3413.svg')}}">
                    <div class="media-body">
                        <p class="d-flex align-items-center">And much more…</p>
                    </div>
                </div>
            </div>
            <div id="start_my_store" class="d-flex justify-content-center flex-row align-items-center bottom_button">
                START MY STORE
                <img src="{{asset('svg/store-clipart-transparent-780888-5417819_white.svg')}}">
            </div>
{{--            <button id="start_my_store" type="button" class="btn btn-light bottom_button">--}}
{{--                START MY STORE--}}
{{--                <img src="{{asset('svg/store-clipart-transparent-780888-5417819_white.svg')}}">--}}
{{--            </button>--}}
        </div>
    </div>
    <div id="login_now" class="d-flex justify-content-center">
        Already have an account?&nbsp; <a href="#"> Login now →</a>
    </div>
</body>
</html>
