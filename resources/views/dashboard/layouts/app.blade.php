<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @yield('add-css')
{{--    datatable--}}
{{--    <link href="/css/dashboard/datatable.css" rel="stylesheet">--}}
{{--    end datatable--}}


    <link href="{{mix('/css/dashboard/dashboard-app.css')}}" rel="stylesheet">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

<main class="d-flex page">

    <div class="left-menu">
        {{--    iconner    https://preview.keenthemes.com/metronic/demo1/features/icons/svg.html--}}
        {{--        <div class="brand d-flex align-items-center">--}}
        {{--            <a href="#" class="brand-logo" aria-label="brand"><img alt="Logo" src="/img/logo.svg"></a>--}}
        {{--            <button class="brand-toggle" type="button" aria-label="minimaize menu">--}}
        {{--                <span>--}}
        {{--                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
        {{--                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
        {{--                        <polygon points="0 0 24 0 24 24 0 24"></polygon>--}}
        {{--                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#494b74" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)"></path>--}}
        {{--                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#494b74" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)"></path>--}}
        {{--                    </g>--}}
        {{--                </svg>--}}
        {{--                </span>--}}
        {{--            </button>--}}
        {{--        </div>--}}

        <div id="simple-bar" class="simple-bar">
            <div>
                <a href="/" class="text-center"><h3 class="text-white mt-4">Home</h3></a>
            </div>
            <ul class="menu-nav" id="menu-nav">
                <li class="menu-item">
                    <a href="{{route('dashboard.index')}}" class="menu-link {{ request()->is('dashboard') ? 'active' : '' }}">
                        <span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                               <polygon points="0 0 24 0 24 24 0 24"></polygon>
                               <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                               <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                           </g>
                       </svg>
                        </span>
                        <span class="menu-text">{{__("Dashboard")}}</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link ">
                        <span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                               <polygon points="0 0 24 0 24 24 0 24"></polygon>
                               <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                               <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                           </g>
                       </svg>
                        </span>
                        <span class="menu-text">{{__("Courses")}}</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                               <polygon points="0 0 24 0 24 24 0 24"></polygon>
                               <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                               <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                           </g>
                       </svg>
                        </span>
                        <span class="menu-text">{{__("Chapters")}}</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link ">
                        <span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                               <polygon points="0 0 24 0 24 24 0 24"></polygon>
                               <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                               <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                           </g>
                       </svg>
                        </span>
                        <span class="menu-text">{{__("Students")}}</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <span class="svg-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                               <polygon points="0 0 24 0 24 24 0 24"></polygon>
                               <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
                               <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
                           </g>
                       </svg>
                        </span>
                        <span class="menu-text">{{__("Users")}}</span>
                    </a>
                </li>
            </ul>
        </div>

    </div>


    <div class="wrapper w-100 d-flex flex-column">

        <header class="header">
            <div class="d-flex justify-content-between align-items-center">
                <a href="/" class="brand-logo d-xl-none">
                    123
{{--                    <img src="/img/logo.svg" width="100" alt="Logo">--}}
                </a>
                {{--                <div class="dropdown-menu dropdown-menu-right p-0">--}}

                {{--                    <div class="dropdown-notification simple-bar">--}}
                {{--                        <a href="#" class="notification-link">--}}
                {{--                            <div class="notification-title">--}}
                {{--                                New Student Registered--}}
                {{--                            </div>--}}
                {{--                            <div class="notification-time">--}}
                {{--                                1 week ago--}}
                {{--                            </div>--}}
                {{--                        </a>--}}
                {{--                        <a href="#" class="notification-link">--}}
                {{--                            <div class="notification-title">--}}
                {{--                                New Student Registered (Anna Asatryan)--}}
                {{--                            </div>--}}
                {{--                            <div class="notification-time">--}}
                {{--                                1 week ago--}}
                {{--                            </div>--}}
                {{--                        </a>--}}
                {{--                        <a href="#" class="notification-link">--}}
                {{--                            <div class="notification-title">--}}
                {{--                                New Student Registered (Anna Asatryan)--}}
                {{--                            </div>--}}
                {{--                            <div class="notification-time">--}}
                {{--                                1 week ago--}}
                {{--                            </div>--}}
                {{--                        </a>--}}
                {{--                        <a href="#" class="notification-link">--}}
                {{--                            <div class="notification-title">--}}
                {{--                                New Student Registered (Anna Asatryan)--}}
                {{--                            </div>--}}
                {{--                            <div class="notification-time">--}}
                {{--                                1 week ago--}}
                {{--                            </div>--}}
                {{--                        </a>--}}
                {{--                        <a href="#" class="notification-link">--}}
                {{--                            <div class="notification-title">--}}
                {{--                                New Student Registered (Anna Asatryan)--}}
                {{--                            </div>--}}
                {{--                            <div class="notification-time">--}}
                {{--                                1 week ago--}}
                {{--                            </div>--}}
                {{--                        </a>--}}
                {{--                        <a href="#" class="notification-link">--}}
                {{--                            <div class="notification-title">--}}
                {{--                                New Student Registered (Anna Asatryan)--}}
                {{--                            </div>--}}
                {{--                            <div class="notification-time">--}}
                {{--                                1 week ago--}}
                {{--                            </div>--}}
                {{--                        </a>--}}

                {{--                    </div>--}}
                {{--                    <a href="#" class="notification-link-all">SEE ALL</a>--}}
                {{--                </div>--}}

                <div class="btn-group ml-auto">
                    <button type="button" class="btn dropdown-toggle d-flex align-items-center" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-md-inline-block">Name</span>
                        <span class="flaticon-user ml-2"></span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        {{--                        <button class="dropdown-item" type="button">--}}
                        {{--                            <i class="flaticon2-user-1 mr-2"></i>--}}
                        {{--                            My Profile--}}
                        {{--                        </button>--}}
                        <a href="#" class="dropdown-item">
                            <i class="flaticon-lock  mr-2"></i>
                            Change password
                        </a>
                        <form action="#" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit">
                                <i class="flaticon-logout  mr-2"></i>
                                Log out
                            </button>
                        </form>
                    </div>
                </div>

                <button class="btn open-menu" type="button">
                    <i class="flaticon2-cross"></i>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false">
                        <title>Menu</title>
                        <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                    </svg>
                </button>
            </div>
        </header>

        <div class="content d-flex flex-column flex-column-fluid">

            @yield('content')

        </div>
    </div>
</main>



<script src="{{ mix('/js/dashboard/dashboard-app.js') }}"></script>
<script src="{{ mix('/js/app.js') }}"></script>

{{--datatable--}}
{{--<script type="text/javascript" src="/js/dashboard/datatables.net.js"></script>--}}
{{--<script type="text/javascript" src="/js/dashboard/DataTables-Bootstrap.js"></script>--}}
{{--end datatable--}}
@yield('scripts')
</body>

</html>
