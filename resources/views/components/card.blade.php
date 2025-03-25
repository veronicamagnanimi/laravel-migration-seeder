@props(['trains'])

<table class="table table-bordered text-center">
    <thead>
        <tr>
            <th scope="col">Company</th>
            <th scope="col">Departure Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Departure Time</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Train Code</th>
            <th scope="col">Total Carriage</th>
            <th scope="col">On Time</th>
            <th scope="col">Cancelled</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $index => $train)
            <tr class="{{ $index % 2 == 0 ? 'table-success' : '' }}">
                <td>{{ $train->company }}</td>
                <td>{{ $train->departure_station }}</td>
                <td>{{ $train->arrival_station }}</td>
                <td>{{ $train->departure_time }}</td>
                <td>{{ $train->arrival_time }}</td>
                <td>{{ $train->train_code }}</td>
                <td>{{ $train->total_carriage }}</td>
                <td>{{ $train->on_time ? '1' : '0' }}</td>
                <td>{{ $train->cancelled ? '1' : '0' }}</td>
            </tr>
        @endforeach
    </tbody>
</table>