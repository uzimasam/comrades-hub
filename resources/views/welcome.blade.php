@extends('layouts.app')

@section('title', 'Home')

@section('content')
    @include('layouts.navbars.guest.navbar')
    <main class="main-content  mt-0">
        <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
            style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signup-cover.jpg'); background-position: top;">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                        <h1 class="text-white mb-2 mt-5">Comrades Hub</h1>
                        <p class="text-lead text-white">
                            Welcome to Comrades Hub, a platform for connecting with fellow comrades, to buy and sell items.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
        </div>
    </main>
    @include('layouts.footers.auth.footer')
@endsection
