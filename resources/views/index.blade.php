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
    <hr>

    <!-- trains -->
    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-auto">
                <h2 class="text-white text-center py-2 px-4 bg-success rounded">All trains</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <x-card :trains="$trains" />
            </div>
        </div>
    </div>
    </div>
@endsection