    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
        <a class="navbar-brand" href="/">LARAVEL BLOG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ ($title === "HOME") ? 'active' : '' }}" href="/">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" {{ ($title === "ABOUT") ? 'active' : '' }}" href="/about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" {{ ($title === "BLOG") ? 'active' : '' }}" href="/blog">BLOG</a>
            </li>
            </ul>
        </div>
        </div>
  </nav>
  