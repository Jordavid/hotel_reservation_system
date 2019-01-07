@extends('layouts.app')

@section('content')
<div class="row">
        <div class="medium-12 large-12 columns">
          <h4>Clients/Booking</h4>
          <div class="medium-2  columns">BOOKING FOR:</div>
          <div class="medium-2  columns"><b>{{$client->title}}. {{$client->name}} {{$client->last_name}}</b></div>
          <form action="" method="post">
          {{ csrf_field() }}
            <div class="medium-1  columns">FROM:</div>
            <div class="medium-2  columns"><input name="dateFrom" value="{{$from}}" type="text" class="datepicker" /></div>
            <div class="medium-1  columns">TO:</div>
            <div class="medium-2  columns"><input name="dateTo" value="{{$to}}" type="text" class="datepicker" /></div>
            <div class="medium-2  columns"><input class="button" type="submit" value="SEARCH" /></div>
          </form>
  
          <table class="stack">
            <thead>
              <tr>
                <th width="200">Room</th>
                <th width="200">Availability</th>
                <th width="200">Action</th>
              </tr>
            </thead>
            <tbody>
              @if ($from && $to)
              @if ($rooms->count() == 0)
              <tr>
                  <td colspan="3" style="color: red; text-align: center;"><h3>Sorry, We couldn't find any Available Room For this time Frame.</h3></td>
              </tr>
                
              @endif
                  
              @foreach ($rooms as $room)
                
              <tr>
                  <td>{{$room->name}}</td>
                  <td>
                    <div class="callout success">
                        <h7>Available</h7>
                    </div>
                  </td>
                  <td>
                    <a class="hollow button warning" href="/book/room/{{$client->id}}/{{$room->id}}/{{$from}}/{{$to}}">BOOK NOW</a>
                  </td>
               </tr>

              @endforeach
              @endif
             
                    
              </tbody>
          </table>
        </div>
      </div>
@endsection