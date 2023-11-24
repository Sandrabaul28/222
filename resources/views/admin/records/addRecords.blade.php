@extends('layouts.default')


@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" >ADD RECORDS</h4>
                    <form class="forms-sample" method="POST" action="{{ route('records.store') }}">
                      @csrf
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title">
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Description">
                      </div>
                      <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" id="date" placeholder="Date">
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12"></div>
                          <input type="file" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" placeholder="Category">
                      </div>
                      <button type="submit" class="btn btn-primary me-2" >Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
@endsection