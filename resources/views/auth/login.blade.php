<link rel="stylesheet" href="login-style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


<body class="">

    <div class="section">
        <div class="container">

            <div class="row full-height justify-content-center">
                <div class="col-12 text-center align-self-center py-5">
                    <div class="section pb-5 pt-5 pt-sm-2 text-center">
                        <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
                        <input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
                        <label for="reg-log"></label>
                        <div class="card-3d-wrap mx-auto">
                            <div class="card-3d-wrapper">
                                <div class="card-front">
                                    @if (session()->has('loginError'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('loginError') }}
                                            <button type="button" class="btn-close" data-bs-dismis="alert"
                                                aria-label="close"></button>
                                        </div>
                                    @endif
                                    <div class="center-wrap">
                                        <form action="/login" method="post" class="section text-center">
                                            @csrf
                                            <h4 class="mb-4 pb-3">Log In</h4>
                                            <div class="form-group">
                                                <input type="email" name="email"
                                                    class="form-style @error('email') is-invalid @enderror"
                                                    placeholder="Your Email" id="email" autofocus
                                                    value="{{ old('email') }}">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            @error('email')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <div class="form-group mt-2">
                                                <input type="password" name="password"
                                                    class="form-style @error('password') is-invalid @enderror"
                                                    placeholder="Your Password" id="password" required>
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            @error('password')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                            <button class="btn mt-4" type="submit">Submit</button>
                                            <p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot
                                                    your
                                                    password?</a></p>
                                        </form>
                                    </div>
                                </div>
                                <div class="card-back">
                                    <div class="center-wrap">
                                        <div class="section text-center">
                                            <form class="px-3 py-4" method="post" action="/register">
                                                @csrf
                                                @method('post')
                                                <h4 class="mb-4 pb-3">Sign Up</h4>
                                                <div class="form-group">
                                                    <input type="text" name="name"
                                                        class="form-style @error('name') is-invalid @enderror"
                                                        placeholder="Your Full Name" id="logname" autocomplete="off"
                                                        value="{{ old('name') }}">
                                                    <i
                                                        class="input-icon
                                                        uil uil-user">
                                                    </i>
                                                    @error('name')
                                                        <div class="invalid-feedback text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="email" name="email"
                                                        class="form-style @error('email') is-invalid @enderror"
                                                        placeholder="Your Email" id="logemail" autocomplete="off"
                                                        value="{{ old('email') }}">
                                                    <i class="input-icon uil uil-at"></i>
                                                    @error('email')
                                                        <div class="invalid-feedback text-danger">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                                <div class="form-group mt-2">
                                                    <input type="password" name="password" class="form-style"
                                                        placeholder="Your Password" id="logpass" autocomplete="off">
                                                    <i class="input-icon uil uil-lock-alt"></i>
                                                </div>
                                                <button class="btn mt-4" type="submit">submit</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
