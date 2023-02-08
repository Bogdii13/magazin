@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Add new product</div>
        <div class="panel-body">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{ Form::open(array('route' => 'products.store','method'=>'POST')) }}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"
                       value="{{old('name') }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control"
                          rows="3">{{old('description') }}</textarea>
            </div>
                <div class="form-group">
                    <label for="description">Image</label>
                    <textarea name="image" class="form-control"
                              rows="3">{{old('image') }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <textarea name="price" class="form-control"
                              rows="3">{{old('price') }}</textarea>
                </div>
                <div class="form-group">
                    <input type="submit" value="Add new product" class="btn btn-info">
                    <a href="{{ route('products.index') }}" class="btn btndefault">Cancel</a>
                </div>
                {{ Form::close() }}
        </div>
    </div>
@endsection
