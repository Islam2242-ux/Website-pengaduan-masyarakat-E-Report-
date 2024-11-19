@extends('layouts.user')

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">

<style>
    body{
        background: rgb(90, 90, 255);
    }
    .btn-purple{
        background: #133E87;
        width: 100%;
        color: #fff;
        border-radius: 20px;
    }
    .card-body{
        background: #4A628A;
        width: 100%;
        color: #fff;
    
    }
    .card-body .text-center{
        background: #133E87;
        width: 100%;
        color: #fff;
        border-radius: 20px;
    }
    .btn{
        background: #133E87;
        width: 100%;
        color: #fff;
        border-radius: 20px;
    }
</style>
@endsection

@section('title','Register Page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <h2 class="text-center text-white mb-0 mt-5">Rehub</h2>
            <p class="text-center text-white mt-5">E-Report Hub</p>
            <div class="card mt-5">
                <div class="card-body">
                    <h2 class="text-center mb-5">Create Account</h2>
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="number" name="nik" placeholder="nik" class="form-control">                           
                        </div>
                        <div class="form-group">                           
                            <input type="text" name="nama" placeholder="Your name" class="form-control">                            
                        </div>
                        <div class="form-group">                
                            <input type="text" name="username" placeholder="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="telp" placeholder="Phone number" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-purple">Register</button>
                        <hr>
                        <a href="{{route('ereporthub.index')}}"  class="btn btn-warning text-white mt-3" style="width: 100%;">Back To Home</a>
                    </form>
                </div>
            </div>
            @if(Session::has('pesan'))
            <div class="alert alert-danger mt-5">
            {{Session::has('pesan')}}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection