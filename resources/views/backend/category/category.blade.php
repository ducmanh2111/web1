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
                            <label for="nf-email" class=" form-control-label">Them moi danh muc</label>
                            <input type="text" id="cat_name" name="cat_name" placeholder="Enter CategoryName...." class="form-control">
                            @if($errors->has('cat_name'))
                              <strong>{{$errors->first('cat_name')}}</strong>
                            @endif

                            <div class="" style="margin-top:30px">
                              <button class="au-btn au-btn-icon au-btn--green au-btn--small" name="addnew">
                                  <i class="zmdi zmdi-plus"></i>add item</button>
                            </div>
                        </div>
                        {{csrf_field()}}
                    </form>

                  </div>

              </div>
              <div class="table-responsive table-responsive-data2 ">
                  <table class="table table-data2">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Tool</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach($catlist as $cat)
                          <tr class="tr-shadow">

                              <td>{{$cat -> id}}</td>
                              <td class="desc">{{$cat -> cat_name}}</td>
                              <td>
                                  <div class="table-data-feature table-data-feature-custome">
                                      <a href="{{asset('admin/category/edit/'.$cat->id)}}">
                                      <button class=" item" data-toggle="tooltip" data-placement="top" title="Edit">
                                          <i class="zmdi zmdi-edit"></i>
                                      </button>
                                      </a>
                                      <a onclick="return confirm_delete('Bạn có chắc là muốn xóa không?')" href="{{asset('admin/category/delete/'.$cat->id)}}"  >
                                      <button class="item" data-toggle="modal" data-placement="top" title="Delete" data-target="#delete_confirm.{{asset('admin/category/delete/'.$cat->id)}}">
                                          <i class="zmdi zmdi-delete"></i>
                                      </button>
                                      </a>
                                  </div>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
              <!-- END DATA TABLE -->
          </div>
      </div>
    </div>
</div>
@endsection
