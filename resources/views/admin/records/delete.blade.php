@extends('layouts.default')


@section('content')
<div class="col-lg-12 grid-margin stretch-card">
      <div class="card-body">
        <div class="card">
                <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card">
                </div>
        </div>
    </div>
        <h4 class="card-title">{{ $title }}</h4>
        <div class="card">
                <div class="row">
                  <div class="col-lg-12 grid-margin stretch-card">
                    <a href="{{ route('records.addRecords')}}" class="btn btn-primary btn-rounded ">Add Records</a>
                </div>
        </div>
        <div class="table-responsive">
          <form action="{{ route('records.delete', ['id'=> $records->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title </th>
                <th>Description</th>
                <th>Date</th>
                <th>Category</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                  <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->title }}</td>
                    <td>{{ $record->description }}</td>
                    <td>{{ $record->date }}</td>
                    <td>{{ $record->category }}</td>
                    <td>
                      <a href="{{ route('records.allrecords') }}" class="btn btn-secondary">Cancel</a>
                    </td>
                  </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection