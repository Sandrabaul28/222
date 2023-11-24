@extends('layouts.default')


@section('content')
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">{{ $title }}</h4>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title </th>
                <th>Description</th>
                <th>Date</th>
                <th>Files</th>
                <th>Category</th>
              </tr>
            </thead>
            <tbody>
              @foreach($records as $record)
                  <tr>
                    <td>{{ $record->id }}</td>
                    <td>{{ $record->title }}</td>
                    <td>{{ $record->description }}</td>
                    <td>{{ $record->date }}</td>
                    <td>{{ $record->files }}</td>
                    <td>{{ $record->category }}</td>
                    <td><a href="{{ route('records.view', ['id' => $records->id]) }}">View</a></td>
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