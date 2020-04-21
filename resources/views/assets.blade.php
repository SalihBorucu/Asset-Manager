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
    <table class="table">
        <thead>
            <tr>
                <td>Asset #</td>
                <td>Name</td>
                <td>Manufacturer</td>
                <td>Type</td>
                <td>Assigned To</td>
                <td>Location</td>
                <td>Issues</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>HP Zbook 17 G6</td>
                <td>HP</td>
                <td>Laptop</td>
                <td>
                    <a href="/user/38">Sam Bevan</a>
                </td>
                <td>
                    <a href="/location/1">Head Office</a>
                </td>
                <td>7 (2 open / 5 closed)</td>
                <td>
                    <a href="/asset-view">View</a>
                    <a href="#">Create Ticket</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection