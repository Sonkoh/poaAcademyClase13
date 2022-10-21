@extends('index')
@section('content')
<div class="container">
    <h1>Hola!, {{ $user }}</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user["id"] }}</th>
      <td>{{ $user["name"] }}</td>
      <td>{{ $user["created_at"] }}</td>
      <td>{{ $user["updated_at"] }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>
@endsection
