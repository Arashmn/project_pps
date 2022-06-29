@extends('auth.layouts.app')
@section('title', __('public.title.title register user'))
@section('content')
    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
                <div class="flex-row text-center mx-auto">
                    <img src="../../assets/img/pages/register-light.png" alt="Auth Cover Bg color" width="520" class="img-fluid authentication-cover-img" data-app-light-img="pages/register-light.png" data-app-dark-img="pages/register-dark.png">
                    <div class="mx-auto">
                        <h3>چند کلیک تا شروع</h3>
                        <p>
                            دوره آزمایشی 14 روزه رایگان خود را شروع کرده و <br> همین امروز ایجاد برنامه خود را شروع کنید.
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Register -->
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
                    <!-- /Logo -->
                    <h4 class="mb-2" style="text-align: center" >@lang('form.forms.index register.title register')</h4>
                    <div style="padding: 50px">
                        <x-validation />
                    </div>

                    <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">@lang('form.forms.index register.full name user')</label>
                            <input type="text" class="form-control text-start" dir="ltr" name="name"
                                name="username" value="{{ old('name') }}" placeholder="@lang('form.forms.index register.please type your fullname')" autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">@lang('form.forms.index register.mobile user')</label>
                            <input type="text" value="{{ old('mobile') }}" class="form-control text-start"
                                dir="ltr" name="mobile" placeholder="@lang('form.forms.index register.please type your phone number')">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">@lang('form.forms.index register.code meli user')</label>
                            <input type="text" value="{{ old('code_meli') }}" class="form-control text-start"
                                dir="ltr" name="code_meli" placeholder="@lang('form.forms.index register.please type your code meli')">
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
                                <input class="form-check-input" type="checkbox" id="terms-conditions"
                                    onchange="isChecked(this, 'sub1')" name="rules" value="1">
                                <label class="form-check-label" for="terms-conditions">
                                    @lang('form.forms.index register.accept')
                                    <a href="javascript:void(0);"> @lang('form.forms.index register.rules')</a>
                                </label>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                        </div>

                        <div class="col mt-3">
                            <p class="mb-2">@lang('form.forms.index register.please choose your role')</p>
                            <div class="form-check form-check-inline">
                                <input name="type" class="form-check-input" type="radio" value="user"
                                    id="0" checked="">
                                <label class="form-check-label"
                                    for="collapsible-address-type-home">@lang('form.forms.index register.radio users')</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="type" class="form-check-input" type="radio" value="marketer"
                                    id="1">
                                <label class="form-check-label" for="collapsible-address-type-office">
                                    @lang('form.forms.index register.radio marketer') </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="type" class="form-check-input" type="radio" value="envoy"
                                    id="2">
                                <label class="form-check-label" for="collapsible-address-type-office">
                                    @lang('form.forms.index register.radio envoy') </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input name="type" class="form-check-input" type="radio" value="branch"
                                    id="3">
                                <label class="form-check-label" for="collapsible-address-type-office">
                                    @lang('form.forms.index register.radio branch') </label>
                            </div>
                            <div class="form-check form-check-inline" style="margin-right: 36px">
                                <input name="type" class="form-check-input" type="radio" value="center"
                                    id="4">
                                <label class="form-check-label" for="collapsible-address-type-office">
                                    @lang('form.forms.index register.radio center')</label>
                            </div>
                        </div>

                        <button class="btn btn-primary d-grid w-100" id="sub1" disabled="disabled"
                            style="margin-top: 28px">@lang('form.forms.index register.btn create')</button>
                    </form>

                    <p class="text-center">
                        <span>@lang('form.forms.index register.do you have account')</span>
                        <a href="{{ route('login') }}">
                            <span>@lang('form.forms.index register.login account') </span>
                        </a>
                    </p>

                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>

@endsection

<script>
    function isChecked(checkbox, sub1) {
        document.getElementById(sub1).disabled = !checkbox.checked;
    }
</script>
