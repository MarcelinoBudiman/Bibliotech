<nav class="navbar navbar-expand-md navbar-dark justify-content-center" style="background-color: #278d87;">
        <div class="container-fluid">
            <a class="navbar-brand me-auto p-2 bd-highlight" href="/">Bibliotech</a>

            <ul class="navbar-nav" style="color: #2CA19A">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/add-book-page">Add Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/library">Queue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">About US</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto" style="color: #2CA19A">
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="px-3 text-light nav-link btn rounded-pill" style="background-color: #a12c33;" type="submit">Logout</button>
                    </form>
                </li>
            </ul>

    </nav>
