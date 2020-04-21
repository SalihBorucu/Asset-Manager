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

    <dashboard-table></dashboard-table>

    
</div>
@endsection