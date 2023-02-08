@extends('layouts.app')


@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            Lista produse
        </div>
        <div class="panel-body">
            <div class="form-group">
                <div class="pull-right">
                    <a href="/products/create" class="btn btn-default">Add new product</a>
                </div>
            </div>
            <table class="table table-bordered table-stripped">
                <tr>
                    <th width="20">No</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Price</th>
                    <th width="300">Action</th>
                </tr>
    @if (count($products) > 0)
        @foreach ($products as $key => $product)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img src= "/images/{{$product->image}}" style="width: 10px"></td>
                            <td>{{ $product->price }}</td>
                            <td>
                                <a class="btn btn-success" href="{{route('products.show',$product->id) }}">Vizualizare</a>
                                <a class="btn btn-primary" href="{{route('products.edit',$product->id) }}">Modificare</a>
                                {{ Form::open(['method' => 'DELETE','route' =>
                               ['products.destroy', $product->id],'style'=>'display:inline']) }}
                                {{ Form::submit('Delete', ['class' => 'btn btndanger']) }}
                                {{ Form::close() }}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4">Nu exista sarcini!</td>
                    </tr>
                @endif
            </table>
            <!-- Introduce nr pagina -->
            {{$products->render()}}
        </div>
    </div>
@endsection

