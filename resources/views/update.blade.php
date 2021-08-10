@extends('master')
@section('title', 'Chỉnh sửa thông tin đại lý')
@section('content')
    <form method="post" action="{{route('agency.update', $agency->id)}}">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Mã Số Đại Lý</label>
                <input name="code" type="number" value="{{$agency}}" class="form-control" id="inputEmail4" readonly>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Tên Đại Lý</label>
                <input name="name" type="text" value="{{$agency}}" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Số Điện Thoại</label>
                <input name="phone" type="number" value="{{$agency}}" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Email</label>
                <input name="email" type="email" value="{{$agency}}" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Địa Chỉ</label>
            <textarea name="address" value="{{$agency}}" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="">Tên người quản lý</label>
            <input name="manager" type="text" value="{{$agency}}" class="form-control" id="inputAddress2"
                   placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <label for="inputState">Status</label>
            <select name="status" id="inputState" class="form-control">
                <option selected>{{$agency->status->name}}</option>
                @forelse($status as $stt)
                    <option value="{{$stt->id}}">{{$stt->name}}</option>
                @empty
                    <option>no data</option>
                @endforelse
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
@endsection
