<x-guest-layout>
    <div class="main-wrapper container">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <a href="{{ route('welcome') }}" class="navbar-brand sidebar-gone-hide">{{ config('app.name') }}</a>
            <ul class="navbar-nav sidebar-gone-hide">
                <li class="nav-item active"><a href="https://docs.getstisla.com/#/en/2.2.0/overview"
                        class="nav-link" target="_blank">Documentation</a></li>
            </ul>
            <div class="nav-collapse">
                <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </nav>

        <nav class="navbar navbar-secondary navbar-expand-lg">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">
                            <i class="fas fa-sign-in-alt"></i><span>Login</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">
                            <i class="fas fa-clipboard-list"></i><span>Register</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <h1>Landing Page</h1>
                </div>

                <div class="section-body">
                    <h2 class="section-title">Example Stisla Laravel Breeze</h2>
                    <p class="section-lead">This page is brief explanation for Stisla Laravel Breeze</p>
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ config('app.name') }}</h4>
                        </div>
                        <div class="card-body">
                            <p>
                                This is a minimalistic landing page template for Stisla Laravel Breeze. Laravel Breeze
                                is built on top of many different third party libraries and components. Such as :
                            </p>
                            <ul>
                                <li><a href="https://getbootstrap.com/docs/4.6/getting-started/introduction/">Bootstrap
                                        4</a></li>
                                <li><a href="https://fontawesome.com/">Font awesome</a></li>
                                <li><a href="https://laravel.com/docs/8.x/installation">Laravel 8.x</a></li>
                                <li><a href="https://laravel-livewire.com/docs/2.x/quickstart">Livewire 2.x</a></li>
                                <li>etc...</li>
                            </ul>
                            <p>Always refer to it's documentation while you're developing the project. Cheers!</p>
                        </div>
                        <div class="card-footer">
                            <small>{{ now() }}</small>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                <small class="text-muted">Laravel Breeze + Stisla by Fahmi Jabbar ©2022</small>
            </div>
        </footer>
    </div>
</x-guest-layout>
