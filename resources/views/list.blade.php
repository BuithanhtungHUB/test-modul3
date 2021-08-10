@extends('master')
@section('title', 'List Agency')
@section('content')
    <div class="container-fluid ">
        <a href="{{route('agency.create')}}" class="btn btn-success">Thêm mới đại lý</a>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col">Mã số đại lý</th>
                <th scope="col">Tên đại lý</th>
                <th scope="col">Điện thoại</th>
                <th scope="col">Email</th>
                <th scope="col">Địa chỉ</th>
                <th scope="col">Tên người quản lý</th>
                <th scope="col">Trạng Thái</th>
                <th scope="col">Chức năng</th>
            </tr>
            </thead>
            <tbody>

            @forelse($agencies as $key=>$agency)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{$agency->code}}</td>
                <td>{{$agency->name}}</td>
                <td>{{$agency->phone}}</td>
                <td>{{$agency->email}}</td>
                <td>{{$agency->address}}</td>
                <td>{{$agency->manager}}</td>
                <td>{{$agency->status->name}}</td>
                <td><a href="" class="btn btn-infor">Edit</a></td>
                <td><a href="" class="btn btn-danger" onclick="return confirm('Bạn có muốn xóa đại lý này không?')">Delete</a></td>
            </tr>
            @empty
            <tr>
                <td colspan="10">No data</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </div>
@endsection
