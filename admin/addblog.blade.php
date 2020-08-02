@extends('admin.layout.master')
@section('content')

<div class="content-wrapper">
<div class="container">
  <div class="row mt-5">
    <div class=" offset-col-2 col-md-8">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add blog</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInput1">blog title</label>
                    <input type="text" class="form-control" id="exampleInput1" placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput2">blog detail</label>
                    <input type="text" class="form-control" id="exampleInput2" placeholder=" Enter Blog detail">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">blog image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

          </div>
  </div>
</div>
</div>

@endsection