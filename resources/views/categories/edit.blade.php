@extends('layouts.app')
@section('title','Thêm danh mục')
@section("content")
<div class="card-header">
    <h4>Sửa danh mục</h4>
</div>
<div class="card-body">
    <form action="{{ route('categories.update') }}" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
                <select name="status" id="">
                    <option value="1" {{ $category->status == 1 ? 'selected' : "" }}  >Hoạt động</option>
                    <option value="0" {{$category->status  == 1 ? 'selected' : "" }}>Tạm dừng</option>
                </select>
            
        </div>
    </form>
</div>
@endsection