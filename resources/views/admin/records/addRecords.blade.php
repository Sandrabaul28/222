@extends('layouts.default')


@section('content')
<div class="col-10 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" >ADD RECORDS</h4>
                    <form class="forms-sample" enctype="multipart/form-data" method="POST" action="{{ route('records.store') }}" >
                      @csrf
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" style="background-color: whitesmoke; color: black; " >
                      </div>
                      <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description"class="form-control" id="description" placeholder="Description" style="background-color: whitesmoke; color:black;">
                      </div>
                      <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date"class="form-control" id="date" placeholder="Date" style="background-color: whitesmoke; color:black;">
                      </div>
                      <div class="row">
                        <div class="form-group ">
                          <label for="category" >Category</label>
                            <select type="text" name="category" class="form-control" id="category" placeholder="category" style="background-color: whitesmoke; color: black;">
                                <option value="1">CATEGORY1</option>
                                <option value="2">CATEGORY1</option>
                                <option value="3">CATEGORY1</option>
                                <option value="4">CATEGORY1</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12"></div>
                          <input type="file" name="image" class="form-control file-upload-info" style="background-color: whitesmoke; color:black;">
                        </div>
                      </div>
                      <div class="form-group" style="text-align: center;">
                      <button type="submit" class="btn btn-primary me-2" >Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
@endsection