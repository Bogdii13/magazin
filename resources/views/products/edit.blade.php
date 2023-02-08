@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading"> Change informations about products</div>
        <div class="panel-body">
            <!—exista inregistrari in tabelul product 
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Eroare:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!—populez campurile formularului cu datele aferente din tabela product -->
            {!! Form::model($product, ['method' => 'PATCH','route' =>['products.updates', $product->id]]) !!}
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control"
                       value="{{$product->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control"
                          rows="3">{{ $product->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <textarea name="image" class="form-control"
                          rows="3">{{ $product->image }}</textarea>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <textarea name="price" class="form-control"
                          rows="3">{{ $product->price }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Save" class="btn btn-info">
                <a href="{{route('products.index') }}" class="btn btndefault">Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
