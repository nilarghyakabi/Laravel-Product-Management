<x-app-layout>
<div class="container py-5">
    <h2>ADD PRODUCT</h2>
<form action="{{route('product.create')}}" method="POST">
@csrf
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter product name" required>
            </div>
            <div class="form-group">
                <label for="description">Product Description</label>
                <textarea name="description" class="form-control" id="description" rows="3" placeholder="Enter product description" required></textarea>
            </div>

            <div class="form-group">
                <label for="price">Product price</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Enter product price" required>
            </div>

            <div class="form-group">
                <label for="quantity">Product Quantity</label>
                <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Enter product quantity" required>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Save</button>
</form>

</div>
</x-app-layout>