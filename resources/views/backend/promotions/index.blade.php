@extends('backend.master')

@section('main')
<div class="main-content">
    <div class="section__content section__content--p30">
      <div class="row">
          <div class="col-md-12">
              <!-- DATA TABLE -->
              <h3 class="title-5 m-b-35">data table</h3>

              <div class="table-responsive table-responsive-data2">
            @if( $promotions->count() > 0 )
            <table class="table table-data2">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Dicount</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày kết thúc</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($promotions as $promotion)
                        <tr class="tr-shadow">
                                <td></td>
                                <td><a href="#" class="text-primary">{{ $promotion->discount }}%</a></td>
                                <td>{{ $promotion->start_date }}</td>
                                <td>{{ $promotion->end_date }}</td>
                                <td>
                                    <div class="table-data-feature">
                                      <a href="{{ route('promotion.getEdit', $promotion->prom_id) }}">
                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Edit" >
                                          <i class="zmdi zmdi-edit"></i>
                                      </button>
                                      </a>
                                      <a href="{{ route('promotion.getDelete', $promotion->prom_id) }}" onclick="return confirm_delete('Bạn có chắc là muốn xóa không?')">

                                      <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" data-target="#delete_confirm.{{ route('promotion.getDelete', $promotion->prom_id) }}">
                                          <i class="zmdi zmdi-delete"></i>
                                      </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <blockquote>
                  <p>Chưa có món ăn nào để hiển thị.</p>
                </blockquote>
            @endif
      </div>
      </div>
    </div>
</div>
@endsection
