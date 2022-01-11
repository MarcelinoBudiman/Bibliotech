@extends('template')

@section('user-nav')
    <nav class="navbar navbar-expand-md navbar-dark justify-content-center" style="background-color: {{PRIMARY_COLOR}};">
        <div class="container-fluid">
            <a class="navbar-brand me-auto p-2 bd-highlight" href="#">JH Furniture</a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Borrow</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Order Queue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About US</a>
                </li>
            </ul>
    </nav>
@endsection
