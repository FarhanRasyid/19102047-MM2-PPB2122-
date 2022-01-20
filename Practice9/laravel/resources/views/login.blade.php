<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Data Mahasiswa</title>
    </head>
    <body>
        <div class="container mt-3">
            <div class="row">
                <div class="col-12">
                    <div class="py-4 d-flex justify-content-end align-items-center">
                        <h2 class="mr-auto">Login</h2>
                    </div>
                    @if(session()->has('pesan'))
                    <div class="alert alert-success">
                    {{ session()->get('pesan') }}
                    </div>
                    @endif
                    <form action="{{ route('login.process') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nim">Username</label>
                            <input type="text"
                            class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}">
                            @error('username')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Daftar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>