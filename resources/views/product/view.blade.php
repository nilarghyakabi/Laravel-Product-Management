<x-app-layout>
    <div class="container py-5">
    <h2 class="mb-4">Product List</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Available Quantity</th>
                @if(Auth::user()->usertype === 'admin')
                <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{$product->name }}</td>
                <td>{{$product->description }}</td>
                <td>{{$product->price }}</td>
                <td>{{$product->quantity}}</td>
                @if(Auth::user()->usertype === 'admin')
                    <td><a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm">Edit</a>
                
                        <a href="{{route('product.delete',$product->id)}}" class="btn btn-primary btn-sm">Delete</a>

                    </td>
                @endif
            </tr>
            @endforeach
        </tbody>
</table>
@if(Auth::user()->usertype === 'admin')
   <div class="mt-4">
    <a href="{{route('product.form')}}" class="btn btn-success">Add Product</a>
</div>
@endif
</div>
</x-app-layout>