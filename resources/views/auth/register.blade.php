@extends('base')

@section('content')
    <form method="POST" class="w-50">
        @csrf
        <div class="form-group m-1">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name">
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group m-1">
            <label for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname">
            @error('surname')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group m-1">
            <label for="patronymic">Patronymic</label>
            <input type="text" class="form-control" id="patronymic" name="patronymic">
            @error('patronymic')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group m-1">
            <label for="exampleInputEmail1">Login</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="login">
            @error('login')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group m-1">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            @error('email')
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
        <div class="form-group m-1">
            <label for="password_confirmation">Password Repeat</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
            @error('password_confirmation')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rules">
            <label class="form-check-label" for="exampleCheck1">Rules</label>
            @error('rules')
            <p class="text-danger">{{$message}}</p>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary m-1">Авторизоваться</button>
    </form>
@endsection
