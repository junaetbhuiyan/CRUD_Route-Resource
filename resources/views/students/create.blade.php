@extends('layout')
@section('content')

    <div class="container">
        <h1>Create Student Info </h1>
    </div>

    <div class="container">
        <form action="{{ route('students.store') }}" method="POST"> 
            @csrf
            @method('POST')

            <div>
                <label for="">Name:</label>
                <input type="text" class="form-control" name="std_name" placeholder="Student name">
            </div> <br>

            <div>
                <label for="">Roll:</label>
                <input type="number" class="form-control" name="std_roll" placeholder="Roll">
            </div> <br>

            <div>
                <label for="">Adress:</label>
                <input type="text" class="form-control" name="std_adress" placeholder="Adress">
            </div> <br>

            <div>
                <input type="submit" class="btn btn-success" value="Save">
            </div>
        </form>
    </div>
@endsection