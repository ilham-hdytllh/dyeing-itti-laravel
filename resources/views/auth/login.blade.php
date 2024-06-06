<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dyeing | Login</title>
    <!-- Icon app -->
    <link rel="icon" type="image/png" href="{{ asset('img/logo_ITTI.ico') }}" />

    <!-- plugins -->
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-default-stylesheet" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="{{ asset('assets/css/bootstrap-dark.min.css') }}" rel="stylesheet" type="text/css"
        id="bs-dark-stylesheet" disabled />
    <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="app-dark-stylesheet"
        disabled />

    <!-- icons -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body class="bg-gradient-light">

    <div class="container mt-3">


        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-4 col-lg-5 col-md-8 mt-5">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex align-items-center">
                        <div class="mr-3">
                            <p class="h3 text-dark mt-2"><b>DYE</b> ITTI</p>
                        </div>
                        <div>
                            <img src="{{ asset('img/ITTI_LogoShape.png') }}" class="user-image"
                                style="max-width: 100%; height: auto; max-height: 200px;" alt="User Image">
                        </div>
                    </div>
                </div>

                <div class="card o-hidden border-0 shadow-lg my-3 ">
                    <div class="card-body p-0 ">
                        <!-- Nested Row within Card Body -->
                        <div class="col-lg-12">
                            <div class="p-3">
                                <div class="text-center">
                                    <p class="text-muted mt-1 mb-3">Sign in to start your session</p>
                                </div>
                                <form class="user" method="POST" action="function/login_procces.php">
                                    <div class="mb-2">
                                        <label class="form-label">Email Address / Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="icon-dual" data-feather="mail"></i>
                                            </span>
                                            <input type="emailorusername" class="form-control" id="emailorusername"
                                                placeholder="user@user.com / user">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        {{-- <a href="pages-recoverpw.html"
                                            class="float-end text-muted text-unline-dashed ms-1">Forgot your
                                            password?</a> --}}
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="icon-dual" data-feather="lock"></i>
                                            </span>
                                            <input type="password" class="form-control" id="password"
                                                placeholder="Enter your password">
                                        </div>
                                    </div>
                                    <div class="row justify-content-end">
                                        <div class="col-auto">
                                            <button class="btn btn-primary px-4" type="submit">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="text-center">
                        <p id="current-time" class="display-4"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor js -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>

    <script>
        function updateTime() {
            const now = new Date();
            let hours = now.getHours();
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // the hour '0' should be '12'
            document.getElementById('current-time').textContent = `${hours}:${minutes}:${seconds} ${ampm}`;
        }

        setInterval(updateTime, 1000);
        updateTime(); // Initial call to display time immediately on load
    </script>

</body>

</html>
