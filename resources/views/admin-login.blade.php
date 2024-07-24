<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login admin | Blog Test</title>
    @include('cdn/cdn')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="text-center"><b>Login Admin</b></h4>
                        <form action="/store-login" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>username</label>
                                <input type="text" class="form-control" name="username" placeholder="Masukkan username...">
                                @if($errors->has('username'))
                                    <div class="text-danger">
                                        {{ $errors->first('username')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Masukkan password...">
                                @if($errors->has('password'))
                                    <div class="text-danger">
                                        {{ $errors->first('password')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Masuk sekarang</button>
                            </div>
                            <p class="text-center">atau</p>
                            <div class="form-group">
                                <a href="/admin-register" class="btn btn-block">Daftar sekarang</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</body>
</html>