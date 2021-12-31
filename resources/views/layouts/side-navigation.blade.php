@php
$links = [
    [
        'href' => 'dashboard',
        'text' => 'Dashboard',
        'is_multi' => false,
        'roles' => 'all',
    ],
    [
        'href' => [
            [
                'section_text' => 'Admin Panel',
                'section_list' => [['href' => 'view-user', 'text' => 'Data User'], ['href' => 'add-user', 'text' => 'Buat User']],
            ],
        ],
        'text' => 'User',
        'is_multi' => true,
        'roles' => 'admin',
    ],
];
$navigation_links = json_decode(json_encode($links), false);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">{{ config('app.name', 'Laravel') }}</a>
        </div>
        @foreach ($navigation_links as $link)
            @if ($link->roles == 'admin' &&
    auth()->user()->hasRole('admin'))
                <ul class="sidebar-menu">
                    <li class="menu-header">{{ $link->text }}</li>
                    @if (!$link->is_multi)
                        <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route($link->href) }}"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                    @else
                        @foreach ($link->href as $section)
                            @php
                                $routes = collect($section->section_list)
                                    ->map(function ($child) {
                                        return Request::routeIs($child->href);
                                    })
                                    ->toArray();
                                $is_active = in_array(true, $routes);
                            @endphp

                            <li class="dropdown {{ $is_active ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                        class="fas fa-chart-bar"></i> <span>{{ $section->section_text }}</span></a>
                                <ul class="dropdown-menu">
                                    @foreach ($section->section_list as $child)
                                        <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a
                                                class="nav-link"
                                                href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    @endif
                </ul>
            @elseif ($link->roles == 'all' || $link->roles == 'user')
                <ul class="sidebar-menu">
                    <li class="menu-header">{{ $link->text }}</li>
                    @if (!$link->is_multi)
                        <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route($link->href) }}"><i
                                    class="fas fa-fire"></i><span>Dashboard</span></a>
                        </li>
                    @else
                        @foreach ($link->href as $section)
                            @php
                                $routes = collect($section->section_list)
                                    ->map(function ($child) {
                                        return Request::routeIs($child->href);
                                    })
                                    ->toArray();
                                $is_active = in_array(true, $routes);
                            @endphp

                            <li class="dropdown {{ $is_active ? 'active' : '' }}">
                                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                                        class="fas fa-chart-bar"></i> <span>{{ $section->section_text }}</span></a>
                                <ul class="dropdown-menu">
                                    @foreach ($section->section_list as $child)
                                        <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a
                                                class="nav-link"
                                                href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    @endif
                </ul>
            @endif
        @endforeach
    </aside>
</div>
