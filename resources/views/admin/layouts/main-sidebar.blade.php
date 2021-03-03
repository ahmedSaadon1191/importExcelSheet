<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="{{ route('upload_form') }}"><img style="height: 50px;"
                src="{{URL::asset('Admin/img/brand/1.jpg')}}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="{{route('upload_form') }}"><img style="height: 50px;"
                src="{{URL::asset('Admin/img/brand/1.jpg')}}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="{{ route('upload_form') }}"><img style="height: 50px;"
                src="{{URL::asset('Admin/img/brand/1.jpg')}}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="{{ route('upload_form') }}"><img style="height: 50px;"
                src="{{URL::asset('Admin/img/brand/1.jpg')}}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
                <div class="">
                    <img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('Admin/img/1.jpg')}}"><span
                        class="avatar-status profile-status bg-green"></span>
                </div>
                <div class="user-info">
                    <h4 class="font-weight-semibold mt-3 mb-0"> الادمن</h4>

                </div>
            </div>
        </div>
        <ul class="side-menu">
            <li class="side-item side-item-category">الرئيسيه</li>



            <li class="slide">
                <a class="side-menu__item" href="{{ route('upload_form') }}">
                    <i class="fa fa-desktop text-success ml-1"></i>
                    <span class="side-menu__label  p-1">رفع ملف</span></a>
            </li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('insure.index') }}">
                    <i class="fa fa-desktop text-success ml-1"></i>
                    <span class="side-menu__label  p-1"> اضافه ضمان</span></a>
            </li>



        </ul>
    </div>
</aside>
<!-- main-sidebar -->
