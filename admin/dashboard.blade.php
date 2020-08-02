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
                    <label for="exampleInput1">Aboutme</label>
                    <input type="text" class="form-control" id="exampleInput1" placeholder="About me">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput2">About blog</label>
                    <input type="text" class="form-control" id="exampleInput2" placeholder=" About blog">
                  </div>
                   
                  <div class="form-group">
                    <label for="exampleInput3">skills</label>
                    <input type="text" class="form-control" id="exampleInput4" placeholder=" Skills">
                  </div>
                  <div class="form-group">
                    <label for="exampleInput4">Side project</label>
                    <input type="text" class="form-control" id="exampleInput5" placeholder=" Side project">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">About image</label>
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