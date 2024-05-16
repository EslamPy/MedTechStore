@extends('Layouts.dashboard')

@section('dashboard')

    <body id="reportsPage">
        <div class="" id="home">
            <nav class="navbar navbar-expand-xl">
                <div class="container h-100">
                    <a class="navbar-brand" href="{{ route('dash') }}">
                        <h1 class="tm-site-title mb-0">Order List</h1>
                    </a>
                    <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars tm-nav-icon"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto h-100">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('product') }}">
                                    <i class="fas fa-shopping-cart"></i> Products</a>
                            </li>

                        </ul>


                        <ul class="navbar-nav">
                            <li class="nav-item">

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>

                                <a class="nav-link d-block" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ session('userName') }}, <b>Logout</b>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="text-white mt-5 mb-5">Welcome back, <b>{{ session('userName') }}</b></p>
                    </div>
                </div>
                <!-- row -->


                <div class="col-12 tm-block-col">
                    <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                        <h2 class="tm-block-title">Orders List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">ORDER NO.</th>
                                    <th scope="col">STATUS</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">LOCATION</th>
                                    <th scope="col">EST DELIVERY DUE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"><b>#122349</b></th>
                                    <td>
                                        <div class="tm-status-circle moving"></div>
                                        Moving
                                    </td>
                                    <td><b>Oliver Trag</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>16:00, 12 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122348</b></th>
                                    <td>
                                        <div class="tm-status-circle pending"></div>
                                        Pending
                                    </td>
                                    <td><b>Jacob Miller</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>11:00, 10 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122347</b></th>
                                    <td>
                                        <div class="tm-status-circle cancelled"></div>
                                        Cancelled
                                    </td>
                                    <td><b>George Wilson</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>12:00, 22 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122346</b></th>
                                    <td>
                                        <div class="tm-status-circle moving"></div>
                                        Moving
                                    </td>
                                    <td><b>William Aung</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>15:00, 10 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122345</b></th>
                                    <td>
                                        <div class="tm-status-circle pending"></div>
                                        Pending
                                    </td>
                                    <td><b>Harry Ryan</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>15:00, 11 NOV 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122344</b></th>
                                    <td>
                                        <div class="tm-status-circle pending"></div>
                                        Pending
                                    </td>
                                    <td><b>Michael Jones</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>18:00, 12 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122343</b></th>
                                    <td>
                                        <div class="tm-status-circle moving"></div>
                                        Moving
                                    </td>
                                    <td><b>Timmy Davis</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>12:00, 10 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122342</b></th>
                                    <td>
                                        <div class="tm-status-circle moving"></div>
                                        Moving
                                    </td>
                                    <td><b>Oscar Phyo</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>15:30, 06 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122341</b></th>
                                    <td>
                                        <div class="tm-status-circle moving"></div>
                                        Moving
                                    </td>
                                    <td><b>Charlie Brown</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>11:00, 10 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122340</b></th>
                                    <td>
                                        <div class="tm-status-circle cancelled"></div>
                                        Cancelled
                                    </td>
                                    <td><b>Wilson Cookies</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>17:30, 12 OCT 2018</td>
                                </tr>
                                <tr>
                                    <th scope="row"><b>#122339</b></th>
                                    <td>
                                        <div class="tm-status-circle moving"></div>
                                        Moving
                                    </td>
                                    <td><b>Richard Clamon</b></td>
                                    <td><b>London, UK</b></td>
                                    <td>15:00, 12 OCT 2018</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>
@endsection
