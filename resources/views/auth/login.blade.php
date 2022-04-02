@extends('base')

@section('content')
    <form method="POST" class="w-50">
        @csrf
        <div class="form-group m-1">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="login">
            @error('login')
                <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group m-1">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            @error('password')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        @error('errorLogin')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <button type="submit" class="btn btn-primary m-1">Авторизоваться</button>
    </form>
@endsection
