<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat konten blog | Blog Test</title>
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
                        <h4 class="text-center"><b>Buat Blog</b></h4>
                        <form action="/store-author" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" placeholder="Isi judul blog...">
                                @if($errors->has('title'))
                                    <div class="text-danger">
                                        {{ $errors->first('title')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content" placeholder="Konten blog...."></textarea>
                                @if($errors->has('content'))
                                    <div class="text-danger">
                                        {{ $errors->first('content')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block">Post sekarang</button>
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