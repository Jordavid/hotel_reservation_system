@extends('layouts.app')

@section('content')
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Reservations</h4>

        <table class="stack">
          <thead>
            <tr>
              <th width="200">ROOM</th>
              <th width="200">Name</th>
              <th width="200">DATES</th>
              <th width="200">Action</th>
            </tr>
          </thead>
          
          <tbody>
                <tr>
                  <td>{{$reservation->room_id}}</td>
                  <td>{{$room->name}}</td>
                  <td>From {{$reservation->date_in}} To {{$reservation->date_out}}</td>
                  <td>Cancel</td>
                </tr>
        </tbody>
        </table>
      </div>
    </div>
@endsection