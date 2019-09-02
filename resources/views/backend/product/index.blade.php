@extends('backend.master')

@section('main')
<div class="main-content">
    <div class="section__content section__content--p30">
      <div class="row">
          <div class="col-md-12">
              <!-- DATA TABLE -->
              <h3 class="title-5 m-b-35">data table</h3>

              <div class="table-responsive table-responsive-data2">
                @if($products -> count() > 0)
                  <table class="table table-data2">
                      <thead>
                          <tr>
                              <th>id</th>
                              <th>name</th>
                              <th>Avatar</th>
                              <th>Promotion</th>
                              <th>Price</th>
                              <th>Category</th>
                              <th>description</th>
                              <th>Tool</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($products as $product)
                          <tr class="tr-shadow">
                              <td class="desc">{{$product -> pro_id}} </td>
                              <td>{{$product -> pro_name}}</td>
                              <td>
                                <img src="{{url('/storage/'.$product->pro_image)}}" alt="" width="100px">
                              </td>
                              <td class="desc">{{$product->promotion}}%</td>
                              <td class="desc">{{number_format($product -> pro_price,0,',','.')}}</td>
                              <!-- <td>2018-09-27 02:12</td> -->
                              <td>
                                  <span class="status--process">{{$product->cat_name}}</span>
                              </td>
                              <td>{{$product->pro_description}}</td>
                              <td>
                                  <div class="table-data-feature">
                                      <a href="{{asset('admin/product/edit/'.$product->pro_id)}}">
                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" >
                                          <i class="zmdi zmdi-edit"></i>
                                      </button>
                                      </a>
                                      <a href="{{asset('admin/product/delete/'.$product->pro_id)}}" onclick="return confirm_delete('Bạn có chắc là muốn xóa không?')">

                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" data-target="#delete_confirm.{{asset('admin/product/delete/'.$product->pro_id)}}">
                                          <i class="zmdi zmdi-delete"></i>
                                      </button>
                                    </a>
                                  </div>
                              </td>
                          </tr>
                          <tr class="spacer"> </tr>
                          @endforeach
                      </tbody>
                  </table>
                  @else
                    <blockquote cite="">
                      <p>Chưa có sp nào để hiển thị.</p>
                    </blockquote>
                  @endif
              </div>
              <!-- END DATA TABLE -->
          </div>
      </div>
    </div>
</div>
@endsection
