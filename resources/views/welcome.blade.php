<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pharmacy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>
  <body>
        <section>
            <div class="container py-5">
                <div class="row">
                    <div class="col-md-5">
                                    @if(session()->has('succes'))
                <div class="alert alert-success">
                    {{ session()->get('succes') }}
                </div>
            @endif
                                    <div class="card p-3">
                            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb -3">
                                    <label for="">Patient Name:</label>
                                    <input type="text" name="name" id="" class="form-controll" value="{{old('name')}}">
                                    @error('name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                  <div class="mb -3">
                                    <label for="">Email Address:</label>
                                    <input type="text" name="email" id="" class="form-controll" value="{{old('email')}}" >
                                     @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                 <div class="mb -3">
                                    <label for="">file</label>
                                    <input type="file" name="image" id="" class="form-controll">
                                     @error('image')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="mb -3">
                                    <button type="submit">submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
  </body>
</html>