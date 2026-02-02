@php
    $active = 'text-navy border-b-2 border-navy pb-2';
    $inactive = 'text-gray-500 hover:text-navy';
@endphp

<nav class="flex gap-8 py-4 text-sm font-semibold">

    <a href="{{ route('superadmin.dashboard') }}"
       class="{{ request()->routeIs('superadmin.dashboard') ? $active : $inactive }}">
       Approve Reviewer
    </a>

    <a href="#"
       class="{{ request()->is('superadmin/report*') ? $active : $inactive }}">
       Report Reviewer
    </a>

    <a href="#"
       class="{{ request()->is('superadmin/token*') ? $active : $inactive }}">
       Transfer Token
    </a>

    <a href="{{ route('superadmin.log-activity') }}"
       class="{{ request()->routeIs('superadmin.log-activity') ? $active : $inactive }}">
       Log Activity
    </a>

    <a href="{{ route('superadmin.news.index') }}"
       class="{{ request()->routeIs('superadmin.news.*') ? $active : $inactive }}">
       News
    </a>

</nav>
