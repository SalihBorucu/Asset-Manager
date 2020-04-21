@extends('master')
@include('navbar')
@section('content')
<div id="main">
    <h1>Asset Register</h1>
    <form method="get">
        <input type="text"  class="form-control" name="q" />
        <button class="btn btn-primary mt-2">search</button>
    </form>
    <button type="button" class="btn btn-primary mb-3" onclick="javascript:void(0)">New Asset</button>
    
    <asset-table></asset-table>
</div>
@endsection