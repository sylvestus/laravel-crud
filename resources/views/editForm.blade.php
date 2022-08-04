<form action="/updateProduct/{{$product->id}}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
<input type="text" name="name" value="{{$product->name}}" id="name">
<label for="description">Description:</label>
<input type="text" name="description" value="{{$product->description}}" id="description">
<label for="price">Price:</label>
<input type="number" name="price" value="{{$product->price}}" id="price">
<button type="submit"> submit</button>
</form>