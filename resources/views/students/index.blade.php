@extends('layouts.app')

@section('content')
<div class="container-fluid row">
    <div class="container-fluid col-md-4">
      <form method="POST" action="{{ url('/students/store') }}">
        @csrf
        <div class="card">
          <div class="card-header">
            <h3><i class="fa fa-plus"></i> Add Student</h3>
          </div>
          <div class="card-body">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" placeholder="" required>
                <br>
                <label for="email">Email</label>
                <input type="text" name="email" class="form-control" placeholder="" required>
                <br>
                <label for="initial_class">Initial Class</label>
                <input type="text" name="initial_class" class="form-control" placeholder="" required>
                <br>
                <label for="year">Year</label>
                <input type="text" name="year" class="form-control" placeholder="" required>
                <br>
                <input type="submit" class="btn btn-primary form-control" value="Save Student">
            </div>
          </div>
        </div>
      </form>
    </div>
    <br>
    <div class="container-fluid col-md-8">
      <div class="card">
        <div class="card-header">
          <h3>Students</h3>
        </div>
        <div class="card-body">
            @if(count($students) > 0)
            <table class="table table-striped">
              <thead>
                <th>Registration No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Initial Class</th>
                <th>Year</th>
              </thead>
              <tbody>
                @foreach($students as $student)
                  <tr>
                    <td>{{ $student->registration_no }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->initial_class }}</td>
                    <td>{{ $student->year }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
            @else
              <h5><i>No Students available!</i></h5>
            @endif
        </div>
      </div>
    </div>
</div>
@endsection