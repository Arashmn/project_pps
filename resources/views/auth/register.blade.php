@extends('auth.layouts.app')
@section('title', __('public.title.title register user'))
@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-4">
                <!-- Register Card -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <div class="d-flex flex-center mb-15">
                                <a href="#">
                                    <img src="{{ asset('admin/img/favicon/favicon.png') }}" class="max-h-75px"
                                        alt="">
                                </a>
                            </div>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-2" style="text-align: center">@lang('form.forms.index register.title register')</h4>
                        <form id="formAuthentication" class="mb-3" action="{{ route('register')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="username" class="form-label">@lang('form.forms.index register.full name user')</label>
                                <input type="text" class="form-control text-start" dir="ltr" name="name"
                                    name="username" placeholder="@lang('form.forms.index register.please type your fullname')" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">@lang('form.forms.index register.mobile user')</label>
                                <input type="text" class="form-control text-start" dir="ltr" name="mobile"
                                    name="email" placeholder="@lang('form.forms.index register.please type your phone number')">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">@lang('form.forms.index register.code meli user')</label>
                                <input type="text" class="form-control text-start" dir="ltr" name="code_meli"
                                    name="email" placeholder="@lang('form.forms.index register.please type your code meli')">
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">@lang('form.forms.index register.password')</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control text-start" dir="ltr"
                                        name="password" placeholder="············" aria-describedby="password">
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">@lang('form.forms.index register.please config password')</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control text-start" dir="ltr"
                                        name="password_confirmation" placeholder="············" aria-describedby="password">
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>
                            <div class="mb-3 fv-plugins-icon-container">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="terms-conditions" name="rules">
                                  <label class="form-check-label" for="terms-conditions">
                                    من موافقم با
                                    <a href="javascript:void(0);">سیاست حریم خصوصی و قوانین</a>
                                  </label>
                                <div class="fv-plugins-message-container invalid-feedback"></div></div>
                              </div>
                            <div class="col mt-3">
                                <p class="mb-2">@lang('form.forms.index register.please choose your role')</p>
                                <div class="form-check form-check-inline">
                                    <input name="0" class="form-check-input" type="radio"
                                        value="user" id="0" checked="">
                                    <label class="form-check-label" for="collapsible-address-type-home">@lang('form.forms.index register.radio users')</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="1" class="form-check-input" type="radio"
                                        value="marketer" id="1">
                                    <label class="form-check-label" for="collapsible-address-type-office">
                                        @lang('form.forms.index register.radio marketer')    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="2" class="form-check-input" type="radio"
                                        value="envoy" id="2">
                                    <label class="form-check-label" for="collapsible-address-type-office">
                                        @lang('form.forms.index register.radio envoy') </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input name="3" class="form-check-input" type="radio"
                                        value="branch" id="3">
                                    <label class="form-check-label" for="collapsible-address-type-office">
                                        @lang('form.forms.index register.radio branch') </label>
                                </div>
                                <div class="form-check form-check-inline" style="margin-right: 36px">
                                    <input name="4" class="form-check-input" type="radio"
                                        value="center" id="4">
                                    <label class="form-check-label" for="collapsible-address-type-office">
                                        @lang('form.forms.index register.radio center')</label>
                                </div>
                            </div>

                            <button class="btn btn-primary d-grid w-100" style="margin-top: 28px">عضویت</button>
                        </form>

                        <p class="text-center">
                            <span>حساب کاربری دارید؟</span>
                            <a href="auth-login-basic.html">
                                <span>وارد شوید</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
            </div>
        </div>
    </div>

@endsection
