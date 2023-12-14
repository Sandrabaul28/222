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
              @foreach($records as $record)
                  <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->title }}</td>
                    <td>{{ $record->description }}</td>
                    <td>{{ $record->date }}</td>
                    <td>{{ $record->category }}</td>
                    <td>
                      <a href="{{ route('records.view', ['id'=> $record->id]) }}">View</a>
                      <a href="{{ route('records.delete', ['id'=> $record->id]) }}">Delete</a>
                      <a href="{{ route('records.edit', ['id'=> $record->id]) }}">Edit</a>
                    </td>
                    
                  </tr>
              @endforeach
            </tbody>
          </table>
          <div class="mt-4">{{ $records->links() }}</div>
        </div>
      </div>
    </div>
  </div>
@endsection