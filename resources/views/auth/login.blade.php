@extends('auth.layouts.app')
@section('title', __('public.title.title Login'))
@section('content')
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
                <div class="flex-row text-center mx-auto">
                    <img src="../../assets/img/pages/login-light.png" alt="Auth Cover Bg color" width="520"
                        class="img-fluid authentication-cover-img" data-app-light-img="pages/login-light.png"
                        data-app-dark-img="pages/login-dark.png">
                    <div class="mx-auto">
                        <h3>قدرتمندترین قالب مدیریت را کشف کنید</h3>
                        <p>
                            کاملا مناسب برای هر سطح از توسعه‌دهندگان که به شما کمک می‌کند <br>
                            تا پروژه و برنامه بزرگ بعدی خود را شروع کنید.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Login -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <div class="d-flex flex-center mb-15">
                            <a href="#">
                                <img src="{{ asset('admin/img/favicon/favicon.png') }}" class="max-h-75px"
                                    alt="">
                            </a>
                        </div>
                    </div>
                    <h4 class="mb-2" style="text-align: center" >@lang('form.forms.index register.title register')</h4>

                    <!-- /Logo -->
                    <p class="mb-3" style="text-align: center">لطفا وارد حساب خود شده و ماجراجویی را شروع کنید</p>
                    <div style="padding: 60px">
                        <x-validation />
                    </div>

                    <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">@lang('form.forms.index login.mobile users')</label>
                            <input type="text" class="form-control text-start" dir="ltr" id="email"
                                name="mobile" placeholder="@lang('form.forms.index login.please type your mobile')" autofocus>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">@lang('form.forms.index login.password')</label>
                                <a href="auth-forgot-password-cover.html">
                                    <small>@lang('form.forms.index login.do you have forget password')</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control text-start" dir="ltr"
                                    name="password" placeholder="············" aria-describedby="password">
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me" name="remember" type="checkbox">@lang('form.forms.index login.remember-me')</label>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">@lang('form.forms.index login.btn login')</button>
                    </form>

                    <p class="text-center">
                        <span>@lang('form.forms.index login.do you have account')</span>
                        <a href="{{ route('register') }}">
                            <span>@lang('form.forms.index login.create account')</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>

@endsection
