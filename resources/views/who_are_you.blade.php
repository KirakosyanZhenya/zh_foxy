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
        <div class="container">
            <div>
                <a class="navbar-brand" href="#" id="logo">
                    <img src="{{asset('svg/foxy_face_winkle.svg')}}" alt="foxy_face_winkle">
                    <img src="{{asset('svg/Component_1.svg')}}" alt="foxy">
                </a>
                <button id="models" type="button" class="btn btn-light pull-left">Models</button>
                <button id="videos" type="button" class="btn btn-light">Videos</button>
            </div>
            <div class="d-flex justify-content-center flex-row" id="navbar_items_right">
                <div id="search_button" class="d-flex justify-content-center">
                    <img src="{{asset('svg/search_icon.svg')}}">
                </div>
                <div id="basket_button" class="d-flex justify-content-center">
                    <img src="{{asset('svg/basket_icon.svg')}}">
                </div>
                <button id="sign_up" type="button" class="btn">Sign Up</button>
                <button id="login" type="button" class="btn">Login</button>
            </div>
        </div>
    </nav>
    <div class="d-flex align-items-center flex-column">
        <h1>Who are you?</h1>
        <div id="header_under_liner"></div>
    </div>
    <div id="main_content" class="d-flex justify-content-center flex-row align-items-center">
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
            <button id="sign_up_for_free" type="button" class="btn btn-light bottom_button">
                SIGN UP FOR FREE
                <img src="{{asset('svg/heart.svg')}}">
            </button>
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
            <button id="start_my_store" type="button" class="btn btn-light bottom_button">
                START MY STORE
                <img src="{{asset('svg/heart.svg')}}">
            </button>
        </div>
    </div>
    <div id="login_now" class="d-flex justify-content-center">
        Already have an account?&nbsp; <a href="#"> Login now →</a>
    </div>
</body>
</html>
