<form action="/addProduct" method="POST">
    @csrf
    <label for="name">Name:</label>
<input type="text" name="name" id="name">
<label for="description">Description:</label>
<input type="text" name="description" id="description">
<label for="price">Price:</label>
<input type="number" name="price" id="price">
<button type="submit"> submit</button>
</form>