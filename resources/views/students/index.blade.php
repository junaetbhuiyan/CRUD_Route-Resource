@extends('layout')

@section('content')
<style>
  
    .sameline{
        display: inline-block;
    }

</style>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Present Student</h1>
            </div>
            <div class="col align-self-center d-flex justify-content-end">
                <a class="btn btn-success" href="http://127.0.0.1:8000/students/create">Add Student</a>
            </div>
        </div>

        <table class="table table-bordered table-secondary">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Adress</th>
                    <th>Action</th>
                </tr>
            </thead>

            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->std_name }}</td>
                    <td>{{ $student->std_roll }}</td>
                    <td>{{ $student->std_adress }}</td>
                    <td>
                        <span class="sameline">
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a>
                        </span>
                        <span class="sameline">
                            <form action="{{ route('students.destroy', $student) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Delete">
                            </form>
                        </span>
                    </td>
                </tr>
            @endforeach
            
        </table>
    </div>

    @endsection
