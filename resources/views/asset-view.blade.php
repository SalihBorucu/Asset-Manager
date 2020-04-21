@extends('master')
@include('navbar')
@section('content')

<div id="main">
        <h1>HP Zbook 17 G6</h1>
        <div id="actions">
            <a href="#">Edit</a>
            <a href="#">View Audit</a>
            <a href="#">Create Ticket</a>
        </div>
        <div id="info" class="mb-3">
            <div>
                <span>Manufacturer:</span>
                <span>HP</span>
            </div>
            <div>
                <span>Type:</span>
                <span>Laptop</span>
            </div>
            <div>
                <span>Allocated To:</span>
                <span>
                    <a href="./user/38">Sam Bevan</a>
                </span>
            </div>
            <div>
                <span>Purchase Date:</span>
                <span>05/02/2019</span>
            </div>
            <div>
                <span>Purchase Price:</span>
                <span>£2378.85</span>
            </div>
            <div>
                <span>Location:</span>
                <span>
                    <a href="./location/1">Head Office</a>
                </span>
            </div>
            <div>
                <span>Asset Tag:</span>
                <span>586</span>
            </div>
            <div>
                <span>Last PAT Test:</span>
                <span>26/06/2019</span>
            </div>
            <div>
                <span>Description:</span>
                <span>HP Z Book with 17" full HD screen. 32GB RAM. Intel core i7 processor. 256GB SSD + 1Tb HDD. No DVD
                    drive.</span>
            </div>
        </div>
        <asset-view>
        </asset-view>
    </div>


</table>
@endsection

