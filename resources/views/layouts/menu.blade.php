<li class="{{ Request::is('*users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>@lang('menu.Users')</span></a>
</li>

<li class="{{ Request::is('heeders*') ? 'active' : '' }}">
    <a href="{{ route('heeders.index') }}"><i class="fa fa-edit"></i><span>@lang('menu.heeders')</span></a>
</li>

<li class="{{ Request::is('inFoAboutCompanies*') ? 'active' : '' }}">
    <a href="{{ route('inFoAboutCompanies.index') }}"><i class="fa fa-edit"></i><span>@lang('menu.In Fo About Companies')</span></a>
</li>

<li class="{{ Request::is('ourServices*') ? 'active' : '' }}">
    <a href="{{ route('ourServices.index') }}"><i class="fa fa-edit"></i><span>@lang('menu.our services')</span></a>
</li>
<li class="{{ Request::is('prants*') ? 'active' : '' }}">
    <a href="{{ route('prants.index') }}"><i class="fa fa-edit"></i><span>@lang('menu.prants')</span></a>
</li>

<li class="{{ Request::is('orders*') ? 'active' : '' }}">
    <a href="{{ route('orders.index') }}"><i class="fa fa-edit"></i><span>@lang('menu.orders')</span></a>
</li>

<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{{ route('settings.index') }}"><i class="fa fa-edit"></i><span>@lang('menu.settings')</span></a>
</li>

