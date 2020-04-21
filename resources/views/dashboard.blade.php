@extends('master')
@include('navbar')
@section('content')
<div id="main">
    <div id="statsBar" class="d-flex justify-content-between ">
        <div class="card px-4 py-3">
            <h2>Open Issues</h2>
            <p>80</p>
        </div>
        <div class="card px-4 py-3">
            <h2>Open This Week</h2>
            <p>17</p>
        </div>
        <div class="card px-4 py-3">
            <h2>Approaching SLA</h2>
            <p>15</p>
        </div>
        <div class="card px-4 py-3">
            <h2>Closed This Week</h2>
            <p>23</p>
        </div>
    </div>
    <div id="pastSLA" class="mt-3">
        <h2>Issues past SLA (6)</h2>
        <table class="table">
            <thead>
                <tr>
                    <td>Ticket #</td>
                    <td>Issue Title</td>
                    <td>Asset</td>
                    <td>Reported By</td>
                    <td>Assigned To</td>
                    <td>Actions</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>56</td>
                    <td>Excessive fan noise</td>
                    <td>
                        <a href="./asset-view.html">
                            HP Zbook 17 G6
                        </a>
                    </td>
                    <td>
                        <a href="./user/38">
                            Sam Bevan
                        </a>
                    </td>
                    <td>
                        <a href="./user/307">
                            Sylvia Finley
                        </a>
                    </td>
                    <td>
                        <a href="./ticket/56">
                            View
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection