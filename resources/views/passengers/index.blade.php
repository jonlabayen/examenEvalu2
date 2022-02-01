@extends('layouts.app')

@section('title', 'Passengers')

@section('content')

  <h2>Flights</h2>

  <form action="/passengersList" method="get">
    @csrf

 <select name="vueloDropdown" class="form-control">
  <option>Selecciona vuelo</option>
  @foreach($vuelos as $vuelo)

      <option value="{{ $vuelo->id }}">
         {{ $vuelo->name }}
      </option>

  
  @endforeach
</select>

<select name="vueloDropdown" class="form-control">
  <option>Selecciona avion</option>
  @foreach($aviones as $avion)

      <option value="{{ $avion->id }}">
         {{ $avion->name }}
      </option>

  
  @endforeach
</select>

<button type="submit">Submit</button>

</form>

  <h2>Passengers</h2>




  <table>
    <tr>
      <th>Name</th>
      <th>Lastname</th>
      <th>Ticket acquisition date</th>
    </tr>



    


  </table>



@endsection
