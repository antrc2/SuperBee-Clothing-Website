@extends('layouts.app')

@section('title',"Dnah sahcs danh mục")
@section('content')
<div class="container">
    <h2>Danh sách danh mục</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm danh mục</a>
</div>
<table class="table table-bordered">
<thead>
    <tr>
        <th>TD</th>
        <th>Tên danh mục</th>
        <th>Trạng thái</th>
        <th>Hành động</th>
    </tr>
</thead>
<tbody>
    @foreach ($categories as $category):
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        <td>{{$category->status}}</td>
        <td>
            <a href="" class="btn btn-warning">Sửa</a>
            <a href="" class="btn btn-danger">Xóa</a>
        </td>
    </tr>
    @endforeach
</tbody>
</table>
@endsection