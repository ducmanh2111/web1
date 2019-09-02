@extends('backend.master')
@section('main')
<div class="main-content">
    <div class="section__content section__content--p30">
      <div class="row">
          <div class="col-md-12">
              <!-- DATA TABLE -->
              <h3 class="title-5 m-b-35">Danh muc san pham </h3>

              <div class="table-data__tool">

                  <div class="table-data__tool-right">
                    @if(session('status'))
                      <div class="au-alert-success">
                        <strong>{{session('status')}}</strong>
                      </div>
                    @endif
                    <form action="" method="post" class="">
                        <div class="form-group">
                            <label for="nf-email" class=" form-control-label">Sua danh muc</label>
                            <input type="text" id="cat_name" name="cat_name" placeholder="Enter CategoryName...." class="form-control" value="{{$cat -> cat_name}}">
                            @if($errors->has('cat_name'))
                              <strong>{{$errors->first('cat_name')}}</strong>
                            @endif
                            <div class="" style="margin-top:30px">
                              <button class="au-btn au-btn-icon au-btn--green au-btn--small" name="addnew">
                                  <i class="zmdi zmdi-plus"></i>change item</button>
                                  <a href="{{asset('admin/category')}}">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small"style="background :red" name="addnew">
                                    <i class="zmdi zmdi-plus"></i>Cancel</button>
                                  </a>
                            </div>

                        </div>
                        {{csrf_field()}}
                    </form>

                  </div>

              </div>

              <!-- END DATA TABLE -->
          </div>
      </div>
    </div>
</div>
@endsection
