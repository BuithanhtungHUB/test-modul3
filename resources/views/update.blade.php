@extends('master')
@section('title', 'Chỉnh sửa thông tin đại lý')
@section('content')
    <div class="container-fluid">
        <form method="post" action="{{route('agency.update', $agency->id)}}">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Mã Số Đại Lý</label>
                    <input name="code" type="number" value="{{$agency->code}}" class="form-control" id="inputEmail4"
                           readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Tên Đại Lý</label>
                    <input name="name" type="text" value="{{$agency->name}}"
                           class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Số Điện Thoại</label>
                    <input name="phone" type="text" value="{{$agency->phone}}"
                           class="form-control @error('phone') is-invalid @enderror">
                    @error('phone')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input name="email" type="email" value="{{$agency->email}}"
                           class="form-control @error('email') is-invalid @enderror">
                    @error('email')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="inputAddress">Địa Chỉ</label>
                    <input name="address" type="address" value="{{$agency->address}}"
                           class="form-control @error('address') is-invalid @enderror">
                    @error('address')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-group col-md-12">
                    <label for="">Tên người quản lý</label>
                    <input name="manager" type="text" value="{{$agency->manager}}"
                           class="form-control @error('manager') is-invalid @enderror">
                    @error('manager')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="form-row col-md-12">
                    <label for="inputState">Status</label>
                    <select name="status" id="inputState" class="form-control">
                        <option value="{{$agency->status->id}}" selected>{{$agency->status->name}}</option>
                        @forelse($status as $stt)
                            <option value="{{$stt->id}}">{{$stt->name}}</option>
                        @empty
                            <option>no data</option>
                        @endforelse
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Cập Nhật</button>
        </form>
    </div>
@endsection
