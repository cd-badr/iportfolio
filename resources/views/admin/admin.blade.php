@extends('layouts.index')


@section('content')

<h1>Dashboard</h1>




<form action="{{ route("admin.update",  $homes) }}" method="POST">
    @csrf
    @method("PUT")
    
    
        <h1>{{ $homes->name }}</h1>
    
        <input autofocus value="" name="name" type="text"
            placeholder="insert name" required>
        <input value="" name="age" type="number" placeholder="insert age"
            required>
        <input value="" name="birthday" type="date" placeholder="birthdqye"
            required>
        <input type="text" name="website" placeholder="website">

        <input type="number" name="phone" placeholder="phone">

        <input type="text" name="city" placeholder="city">

        <input type="text" name="degree" placeholder="degree">

        <input type="email" name="email" placeholder="email">

        <input type="text" name="freelance" placeholder="freelance">
        
        <button>Update</button>
    </form>




@endsection