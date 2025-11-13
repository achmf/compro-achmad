@extends('admin.layouts.app')
@section('content')
    <div class="card">
        <div class='card-header'>
            <h5>{{ $title ?? '' }}</h5>
        </div>
        <div class='card-body'>
            <form action="{{ route('blog.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">
                        Category
                    </label>
                    <select name="category_id" id="" class="form-control">
                        <option value="">Choose One</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Title
                    </label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">
                        Content
                    </label>
                    <input type="text" name="content" id="summernote" class="form-control" placeholder="Enter content">
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
