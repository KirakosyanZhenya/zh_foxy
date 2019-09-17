<!DOCTYPE html>
<html lang="en">
<head>
    <title>Who Are You</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}" >
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-light bg-light">
    <div class="container">
        <div id="navbar_items_left" class="d-flex flex-row">
            <div class="d-block d-md-none">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <a class="navbar-brand" href="#" id="logo">
                <img src="{{asset('svg/foxy_face_winkle.svg')}}" alt="foxy_face_winkle">
                <img src="{{asset('svg/Component_1.svg')}}" alt="foxy">
            </a>
            <button id="models" type="button" class="d-none d-md-block btn btn-light pull-left">Models</button>
            <button id="videos" type="button" class="d-none d-md-block btn btn-light">Videos</button>
        </div>
        <div class="d-flex justify-content-center flex-row" id="navbar_items_right">
            <div class="d-none d-md-block">
                <div id="search_button" class="d-flex justify-content-center">
                    <img src="{{asset('svg/search_icon.svg')}}">
                </div>
            </div>
            <div id="basket_button" class="d-flex justify-content-center align-items-center">
                <div>
                    <p class="d-flex justify-content-center align-items-center">3</p>
                    <img src="{{asset('svg/CartIcon_Group.svg')}}" width="20" height="20">
                </div>
            </div>
            <button id="sign_up" type="button" class="d-none d-md-block btn">Sign Up</button>
            <button id="login" type="button" class="d-none d-md-block btn">Login</button>
        </div>
        <div class="d-block d-md-none" style="width: 100%">
            <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Models</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center" href="#"><img src="{{asset('svg/search_icon.svg')}}" width="14" height="14">   Search </a>
                    </li>
                    <li><hr></li>
                    <li class="nav-item d-flex flex-row-reverse">
                        <button id="collapse_sign_up" type="button" class="btn">Sign Up</button>
                        <button id="collapse_login" type="button" class="btn">Login</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div id="white_triangle_top"></div>
<div id="main_content" class="">
    <div class="row">
        <div id="header_who_are_you">
            <div class="d-flex align-items-center flex-column">
                <h1>Who are you?</h1>
                <div id="header_under_liner"></div>
            </div>
        </div>
    </div>
{{--    <div class="row">--}}
        <div class="d-none d-md-block">
            <div class="row">
            <div class="d-flex justify-content-center flex-row" id="main_content_2">
{{--        <div class="d-flex justify-content-center">--}}
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
                <div id="sign_up_for_free" class="d-flex justify-content-center bottom_button">
                    <div class="d-flex justify-content-center flex-row align-items-center">
                        <span>SIGN UP FOR FREE</span>
                        <img src="{{asset('svg/heart.svg')}}">
                    </div>
                </div>
            </div>
{{--        </div>--}}
        <div id="or_window" class="d-flex align-items-center">
            <div class="d-flex justify-content-center align-items-center flex-column">
                <img src="{{asset('svg/Group_2173.svg')}}">
                <p>or</p>
            </div>
        </div>
{{--        <div class="d-flex justify-content-center">--}}
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
                <div id="start_my_store" class="d-flex justify-content-center bottom_button">
                    <div class="d-flex justify-content-center flex-row align-items-center">
                        <span>START MY STORE</span>
                        <img src="{{asset('svg/store-clipart-transparent-780888-5417819_white.svg')}}">
                    </div>
                </div>
            </div>
        </div>
            </div>
        </div>
        <div class="d-block d-md-none" id="main_content_3">
            <div class="col-sm-12">
                <div class="d-flex justify-content-center">
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
                    <div id="sign_up_for_free" class="d-flex justify-content-center bottom_button">
                        <div class="d-flex justify-content-center flex-row align-items-center">
                            <span>SIGN UP FOR FREE</span>
                            <img src="{{asset('svg/heart.svg')}}">
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="d-flex justify-content-center">
            <div id="or_window" class="d-flex align-items-center">
                <div class="d-flex justify-content-center align-items-center flex-column">
                    <img src="{{asset('svg/Group_2173.svg')}}">
                    <p>or</p>
                </div>
            </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="d-flex justify-content-center">
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
                    <div id="start_my_store" class="d-flex justify-content-center bottom_button">
                        <div class="d-flex justify-content-center flex-row align-items-center">
                            <span>START MY STORE</span>
                            <img src="{{asset('svg/store-clipart-transparent-780888-5417819_white.svg')}}">
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
{{--    </div>--}}
    <div id="login_now" class="d-flex justify-content-center">
        Already have an account?&nbsp; <a href="#"> Login now →</a>
    </div>
</div>
<div id="white_triangle_bottom"></div>
</body>
</html>