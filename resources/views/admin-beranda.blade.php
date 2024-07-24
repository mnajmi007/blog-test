<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin | Blog Test</title>
    @include('cdn/cdn')
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                    <a class="nav-link" href="/admin-login">Masuk</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/admin-register">Daftar</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/post-admin">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link logout" href="#">Logout</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-12">
                <div class="row">
                    @foreach($post as $p)
                        <div class="col-md-12" style="margin-bottom:15px">
                            <div class="card">
                                <div class="card-body">
                                    <span><i>{{ $p->username }}</i></span>
                                    <h5><b>{{ $p->title }}</b></h5>
                                    <p>{{ $p->content }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>    
        </div>
    </div>
</body>
</html>