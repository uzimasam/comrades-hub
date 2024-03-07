<footer class="footer pt-3  ">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
                <div class="copyright text-center text-sm text-muted text-lg-start">
                    ©
                    <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    made with <i class="fa fa-heart"></i> by
                    <a href="https://github.com/uzimasam" class="font-weight-bold" target="_blank">Uzima Sam</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link text-muted">Home</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link text-muted">Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link text-muted">Sign In</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <a href="{{ route('dashboard') }}" class="nav-link text-muted">Dashboard</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</footer>
