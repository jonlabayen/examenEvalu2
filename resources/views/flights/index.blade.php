@extends('layouts.app')

@section('title', 'Flights')

@section('content')

  <h2>Coming flights:</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>Date</th>
      <th>Origin</th>
      <th>Destiny</th>
      <th>Available Seats</th>
    </tr>

    @foreach($vuelos as $vuelo)

    <form action="/listaVuelos/editar/{{$vuelo->id}}" method="post">
      @csrf

    @if($fechaAsc < $vuelo->date)

    <tr>
      
      <th>{{$vuelo->id}}</th>
      <th>{{$vuelo->name}}</th>
      <th>{{$vuelo->date}}</th>
      <th>{{$vuelo->origin}}</th>
      <th>{{$vuelo->destiny}}</th>
      <th>{{$vuelo->available_seats}}</th>
      <th><input type="text" name="asientos"></th>
      <th><button type="submit">Reservar</button></th>

    </tr>

    @endif

    </form>

    @endforeach

  </table>

@endsection