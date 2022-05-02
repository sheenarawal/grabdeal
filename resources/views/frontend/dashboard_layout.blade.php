@extends('layouts.frontend')

@section('frontend_content')


    <div class="dashboard-wrapper bg-greylight">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="dashboard-nav bg-white rounded-lg shadow-xs">
                        <a href="#" class="dash-menu d-none d-block-md"><i class="ti-package font-sm mr-2"></i> Menu <i class="ti-angle-down font-xsss float-right "></i></a>
                        <ul class="dash-menu-ul">
                            <li class="d-block rounded-lg active"><a href="{{route('frontend.dashboard')}}">
                                    <i class="ti-package font-sm"></i><span> Dashboard</span></a>
                            </li>
                            <li class="d-block rounded-lg"><a href="{{route('frontend.wallet')}}">
                                    <i class="ti-wallet font-sm"></i><span> Wallet</span></a>
                            </li>
                            <li class="d-block rounded-lg"><a href="#">
                                    <i class="ti-email font-sm"></i><span> Email</span></a>
                            </li>
                            <li class="d-block rounded-lg"><a href="#">
                                    <i class="ti-comments font-sm"></i><span> Message</span></a>
                            </li>
                            <li class="d-block rounded-lg"><a href="#">
                                    <i class="ti-heart font-sm"></i><span> Bookmark</span></a>
                            </li>
                            <li class="d-block rounded-lg"><a href="{{route('frontend.profile')}}">
                                    <i class="ti-user font-sm"></i><span> Profile</span></a>
                            </li>
                            <li class="d-block rounded-lg "><a href="#">
                                    <i class="ti-lock font-sm"></i><span> Password</span></a>
                            </li>
                            <li class="d-block rounded-lg "><a href="#">
                                    <i class="ti-lock font-sm"></i><span> Refer Code</span></a>
                            </li>
                            <li class="d-block rounded-lg "><a href="#">
                                    <i class="ti-credit-card font-sm"></i><span> Payment</span></a>
                            </li>
                            <li class="d-block rounded-lg">
                                <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <i class="ti-power-off font-sm"></i><span> Logout</span></a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    @yield('frontend_dashboard')
                </div>
            </div>
        </div>
    </div>

@stop
@push('backend_css')
@endpush
@push('backend_script')
@endpush
