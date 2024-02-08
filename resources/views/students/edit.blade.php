@extends('layout')

@section('content')
    <div class="container">
        <h1>Create Student Info </h1>
    </div>

    <div class="container">
        <form method="POST" action="{{ route('students.update', $student->id) }}">
            @csrf
            @method('PUT')


            <div>
                <label for="">Name:</label>
                <input type="text" class="form-control" name="std_name" placeholder="Student name"
                    value="{{ $student->std_name }}">
            </div> <br>

            <div>
                <label for="">Roll:</label>
                <input type="number" class="form-control" name="std_roll" placeholder="Roll"
                    value="{{ $student->std_roll }}">
            </div> <br>

            <div>
                <label for="">Adress:</label>
                <input type="text" class="form-control" name="std_adress" placeholder="Adress"
                    value="{{ $student->std_adress }}">
            </div> <br>

            <div>
                <input type="submit" class="btn btn-success" value="Save">
            </div>
        </form>
    </div>
@endsection
