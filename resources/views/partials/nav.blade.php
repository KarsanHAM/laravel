<nav class="navbar navbar-expand-sm navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand">Kars Hamelink</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">
            <ul class="navbar-nav nav nav-fill w-100">
                <li class="nav-item">
                    <a class="{{ Request::path() === '/' ? 'nav-link active': 'nav-link' }}" href="./">Welkom</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::path() === 'profiel' ? 'nav-link active': 'nav-link' }}" href="/profiel">Profiel</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::path() === 'dashboard' ? 'nav-link active': 'nav-link' }}" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Request::path() === 'blog' ? 'nav-link active': 'nav-link' }}" href="/blog">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
