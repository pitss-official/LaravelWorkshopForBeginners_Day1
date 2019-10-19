@extends('layout')

@section('content')
<h1>Customers</h1>
<label>Enter customer name: </label>
<br>
<form action="customers" method="post">
    @csrf
    <input type="text" name="name">
    <br>
    <button type="submit">click here</button>

</form>

<ul>

    @foreach($anything as $customer)
        <li>{{$customer->name}}</li>
    @endforeach

</ul>
@endsection
