@extends('layouts.master')
@section('content')

<!-- legend -->
<div class="legend-container">
    <div class="legend">
        <h2>Legend:</h2>
        <ul>
            <li><strong>On time</strong>
                <ul>
                    <li><strong>1:</strong> On time</li>
                    <li><strong>0:</strong> Late</li>
                </ul>
            </li>
            <li><strong>Cancelled</strong>
                <ul>
                    <li><strong>1:</strong> Deleted</li>
                    <li><strong>0:</strong> Active</li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<!-- trains -->
<div class="container">
    <h2 class="text-black text-center pt-4">All trains</h2>
    <div class="row">
        @foreach ($trains as $train)
            <div class="col-md-4 mb-4">
                <x-card :train="$train" />
            </div>
        @endforeach
    </div>
</div>
@endsection
