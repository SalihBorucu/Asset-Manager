@extends('master')
@section('content')
<div class="container vh-100">
    <div class="row h-100">
        <div class="col-md-6 mx-auto my-auto">
            <form method="post" action="/dashboard">
                @csrf
                <h1 class="text-center">Asset Management Dashboard</h1>
                    <div class="form-group">
                    <input type="text" name="username" class="form-control mb-2" placeholder="username">
                    <input type="password" name="password" class="form-control mb-4" placeholder="password">
                    <input type="submit" value="login" class="btn btn-primary w-100">
                    </div>
                </form>
        </div>
    </div>
</div>

@endsection



