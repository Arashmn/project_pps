<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/" class="app-brand-link">
            <span class="app-brand-logo demo">
                <div class="d-flex flex-center ">
                    <a href="#">
                        <img src="{{ asset('admin/img/favicon/favicon.png') }}" class="max-h-75px" alt=""
                            style="margin-right: -28px">
                    </a>
                </div>
            </span>
            <small class="app-brand-text text-muted text-center ms-2">@lang('public.menu.management')</small>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx menu-toggle-icon d-none d-xl-block fs-4 align-middle"></i>
            <i class="bx bx-x d-block d-xl-none bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-divider mt-0"></div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item ">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Page 1">@lang('public.menu.dashboard')</div>
            </a>
        </li>
        <!-- users -->
        <li class="menu-item {{ isActive(['admin.admins.users.index'])}}">
            <a href="" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div data-i18n="Page 2">@lang('public.menu.user.users')</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item  {{ isActiveSubMenu(['admin.admins.users.index'])}} ">
                    <a href="{{ route('admin.users.index') }}" class="menu-link">
                        <div data-i18n="Analytics">@lang('public.menu.user.users')</div>
                    </a>
                </li>
                <li class="menu-item  ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Analytics">@lang('public.menu.user.role')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.users.create' ])}} --}}
                <li class="menu-item  ">
                    <a href="/" class="menu-link ">
                        <div data-i18n="eCommerce">@lang('public.menu.user.permission')</div>
                    </a>
                </li>
            </ul>
            {{-- {{ isActive(['admin.permissions.index', 'admin.permissions.create' ])}} --}}
            <!-- services -->
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-check""></i>
                <div data-i18n="Roles & Permissions">@lang('public.menu.service.service')</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Roles">@lang('public.menu.service.customers')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.permissions.index' ])}} --}}
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.service.services')</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user-check""></i>
                <div data-i18n="Roles & Permissions">@lang('public.menu.branch.branch')</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Roles">@lang('public.menu.branch.envoy')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.permissions.index' ])}} --}}
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.branch.marketer')</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.branch.branches')</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-calendar-event""></i>
                <div data-i18n="Roles & Permissions">@lang('public.menu.accident.accident')</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.accident.Follow up')</div>
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Roles">@lang('public.menu.accident.record accident')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.permissions.index' ])}} --}}

            </ul>
        </li>

        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-car""></i>
                <div data-i18n="Roles & Permissions">@lang('public.menu.car.car')</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Roles">@lang('public.menu.car.car list')</div>
                    </a>
                </li>
                {{-- {{ isActiveSubMenu([ 'admin.permissions.index' ])}} --}}
                <li class="menu-item ">
                    <a href="/" class="menu-link">
                        <div data-i18n="Permission">@lang('public.menu.car.Follow up car')</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Stats   -->
        <li class="menu-item ">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Page 1">@lang('public.menu.Stats')</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="index.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Page 1">@lang('public.menu.list amount')</div>
            </a>
        </li>


    </ul>
</aside>
