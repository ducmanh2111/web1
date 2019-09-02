@extends('backend.master')

@section('main')
<div class="main-content">
    <div class="section__content section__content--p30">
      <div class="col-lg-9">
          <div class="card">
              <div class="card-header">
                  <strong>Add new</strong> Promotion
              </div>
              <div class="card-body card-block">
            @if (session('status'))
                    <div class="au-alert-success">
                      <strong>{{session('status')}}</strong>
                    </div>
                    {{ session('status') }}
                </div>
            @endif
            <form action=" {{ route('promotion.getAdd') }}" enctype="multipart/form-data" method="POST">
                {{ csrf_field() }}
                <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                  <label>Discount</label>
                  <input type="number" class="form-control" name="discount" placeholder="" value="{{ old('discount') }}">
                  @if($errors->has('discount'))
                    <span class="help-block">{{ $errors->first('discount') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Ngày bắt đầu</label>
                  <input type="date" class="form-control" name="start_date" placeholder="Nhập ngày bắt đầu" value="{{ old('start_date') }}">
                </div>
                <div class="form-group">
                  <label>Ngày kết thúc</label>
                  <input type="date" class="form-control" name="end_date" placeholder="Nhập ngày kết thúc" value="{{ old('end_date') }}">
                </div>
                    <button type="submit" class="btn btn-success" data-loading-text="<i class='fa fa-cog fa-spin fa-fw'></i> Processing...">Thêm mới</button>
            </form>
      </div>
      </div>
      </div>
    </div>
</div>
@endsection
