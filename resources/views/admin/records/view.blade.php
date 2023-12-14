@extends('layouts.default')

@section('content')
	<div class="content-wrapper" style="background-color: grey;">
      <div class="page-header">
        <h3 class="page-title">
          <span class="page-title-icon bg-warning text-white me-2"  >
            <a href="{{ route('records.allrecords')}}" class="btn mdi mdi-home"></a>
          </span> {{ $pagetitle }}
        </h3>
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
           <!--  <li class="breadcrumb-item active" aria-current="page">
              <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
            </li> -->
          </ul>
        </nav>
      </div>
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        	 <div class="card">
              <div class="card-body">
                <h4 class="card-title">Book</h4>
                	<div class="form-group">
                		<label>Title:</label>
                		<h4>{{ $record->title }}</h4>
                	</div>
                	<div class="form-group">
                		<label>Description:</label>
                		<h4>{{ $record->description }}</h4>
                	</div>
                	<div class="form-group">
                		<label>Date:</label>
                		<h4>{{ $record->date }}</h4>
                	</div>
                	<div class="form-group">
                		<label>Category:</label>
                		<h4>{{ $record->category }}</h4>
                	</div>
                	<div class="form-group">
                		<label>Image:</label>
                		<div class="image">
                			<img style="width: 50%;" src="/{{ $record->img }}">
                		</div>
                	</div>
              </div>
            </div>
      	</div>
      </div>
  </div>
@endsection
