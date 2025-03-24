@props(['train'])

<div class="card mb-3">
    <div class="card-body">
        <h4 class="card-title">{{ $train->company }}</h4>
        <p class="card-text"><strong>Departure Station:</strong> {{ $train->departure_station }}</p>
        <p class="card-text"><strong>Arrival Station:</strong> {{ $train->arrival_station }}</p>
        <p class="card-text"><strong>Departure Time:</strong> {{ $train->departure_time }}</p>
        <p class="card-text"><strong>Arrival Time:</strong> {{ $train->arrival_time }}</p>
        <p class="card-text"><strong>Train Code:</strong> {{ $train->train_code }}</p>
        <p class="card-text"><strong>Total Carriage:</strong> {{ $train->total_carriage }}</p>
        <p class="card-text"><strong>On Time:</strong> {{ $train->on_time ? '1' : '0' }}</p>
        <p class="card-text"><strong>Cancelled:</strong> {{ $train->cancelled ? '1' : '0' }}</p>
    </div>
</div>