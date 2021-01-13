@php
    $consoles = App\Http\Controllers\BookController::showConsoles();
@endphp
<style>
    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .newbookd {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
@php

@endphp

<div class="newbookd">

    <p style = "color:blue">{{session('bookmsg')}}</p>
    <form action="newBooking" method = "post">
        @csrf
        <label for="console">Select Console</label>
        <select id="console" name="console" required>
            @foreach($consoles as $console)

            <option value="{{$console->id}}">{{$console->name}}</option>

            @endforeach
        </select>
        <label for="chairs">No of players</label>
        <select id="chairs" name="chairs" required>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            <option value="4">Four</option>
        </select>
        <label for="starttime"><strong>Note: </strong>Charges 40₹/hr Inc. Tax</label><br />
        <label for="starttime">From</label>
        <input type="time" id="starttime" name="starttime" placeholder="Starting Time" required>
        <label for="endtime">to</label>
        <input type="time" id="endtime" name="endtime" placeholder="End Time" required>
        <label for="date">On</label>
        <input type="date" id="date" name="date" placeholder="Date">

<br /><label for="date">Special request</label><br />
        <textarea id="spreq" name="spreq" rows="" cols="" placeholder="Any special request" required></textarea>




        <input type="submit" value="Submit">
    </form>
</div>

