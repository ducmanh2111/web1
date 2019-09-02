@extends('backend.master')

@section('main')
<div class="main-content">
    <div class="section__content section__content--p30">
      <div class="col-lg-9">
          <div class="card">
              <div class="card-header">
                  <strong>Add new</strong> Product
              </div>
              <div class="card-body card-block">
                @if(session('status'))
                  <div class="au-alert-success">
                    <strong>{{session('status')}}</strong>
                  </div>
                @endif
                  <form action="" method="post" enctype="multipart/form-data" class="">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="select" class=" form-control-label">Category</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="category" id="category" class="form-control">
                              @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Name Product</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="pro_name" placeholder="Text" class="form-control">
                          </div>
                          @if($errors->has('pro_name'))
                              {{ $errors->first('pro_name') }}
                          @endif
                      </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="number-input" class=" form-control-label">Price Product</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="number" id="pro_price" name="pro_price" placeholder="Price..." class="form-control">
                          </div>
                          @if($errors->has('pro_price'))
                            <span>{{ $errors->first('pro_price') }}</span>
                          @endif
                      </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="file-input" class=" form-control-label">Image Product</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <input type="file" id="id="file-input"" name="pro_image"  class="form-control-file">
                          </div>
                          @if($errors->has('pro_image'))
                            <span>{{ $errors->first('pro_image') }}</span>
                          @endif
                      </div>

                        <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="textarea-input" class=" form-control-label">Description Product</label>
                          </div>
                          <div class="col-12 col-md-9">
                              <textarea name="pro_description" id="editor1" rows="8" cols="80"></textarea>
                          </div>
                          @if($errors->has('pro_description'))
                            <span>{{ $errors->first('pro_description') }}</span>
                          @endif
                        </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label for="select" class=" form-control-label">discount</label>
                          </div>
                              <div class="col-12 col-md-9">
                                  <input type="number" id="promotion" name="promotion" placeholder="...%..." class="form-control">
                              </div>
                          </div>
                      <div class="row form-group">
                          <div class="col col-md-3">
                              <label class=" form-control-label">Featured</label>
                          </div>
                          <div class="col col-md-9">
                              <div class="form-check-inline form-check">
                                  <label for="inline-radio1" class="form-check-label ">
                                      <input type="radio" id="inline-radio1" name="pro_featured" value="1" class="form-check-input">Co
                                      <input type="radio" id="inline-radio1" name="pro_featured" value="0" class="form-check-input">No

                                  </label>

                              </div>
                          </div>
                      </div>
                      <div class="" style="margin-top:30px; " >
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small" name="addnew">
                            <i class="zmdi zmdi-plus"></i>add item</button>
                      </div>
                      {{ csrf_field() }}

                  </form>
              </div>

          </div>

      </div>
    </div>
</div>
@endsection
