    <nav class="navbar navbar-expand-md navbar-dark justify-content-center" style="background-color: #278d87;">
        <div class="container-fluid">
            <a class="navbar-brand me-auto p-2 bd-highlight" href="/">Bibliotech</a>

            <ul class="navbar-nav align-content-start">
                <li class="nav-item" style="color: #2CA19A">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cart">Borrow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Order Queue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about-us">About US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/history">Transaction History</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="px-3 text-light nav-link btn rounded-pill" style="background-color: #a12c33;" type="submit">Logout</button>
                    </form>
                </li>

            </ul>
    </nav>
