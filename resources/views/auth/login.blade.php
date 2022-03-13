<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link style="text/css" rel="stylesheet" href="{{asset('css/login.css')}}">
    <link style="text/css" rel="stylesheet" href="{{asset('css/google.css')}}">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel=”stylesheet” href=”https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.0.0/css/font-awesome.min.css”>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

    <title>Login</title>
</head>


<body>
    <div class="container w-full">
        <div class="register w-100 h-100">
            <div class="grid md:grid-col-2">
                <div class="slogan md:col-start">
                    <div class="bg w-100 h-100" style="background-image: url('{{ asset ('images/mask-bg.jpg')}}');">
                        <div href="{{route('welcome')}}" class="font-bold back md:pt-40 col-start">
                            <a href="">Back to Home</a>
                        </div>
                        <div class="py-12 font-bold md:text-4xl lg:text-5xl">
                            Learn Design
                            <br>From the
                            <br>Expert
                        </div>
                    </div>
                </div>
                <div class=" md:col-end-4">
                    <div class="font-bold md:col-end-4 title md:pt-40 ">Login</a></div>
                    <form class="py-10 w-100">

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required>
                        </div>
                        <button type="submit" class="mt-2 text-white btn btn-reg sm:w-full">Register</button>
                        <p class="py-2 text-center">or</p>
                        <div class="sosmed">
                            <div class="google-btn ">
                                <div class="google-icon-wrapper">
                                    <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                                </div>
                                <div class="text-center btn-text">Sign in with google</div>
                            </div>
                            <button type="submit" class="mt-3 text-white btn btn-fb sm:w-full"><i class="fa fa-facebook"></i>Sign up with
                                facebook</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
