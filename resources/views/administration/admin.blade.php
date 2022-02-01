@extends('layouts.app')

@section('title', 'Passengers')

@section('content')

  <h2>Users</h2>

  <table>

    <tr>
      <th>Id</th>
      <th>Nombre</th>
    </tr>

    @foreach($vuelos as $vuelo)

    

    <tr>
      
      <th>{{$vuelo->id}}</th>
      <th>{{$vuelo->name}}</th>

    </tr>

    

    @endforeach

  </table>



@endsection