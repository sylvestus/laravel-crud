<h1>{{$product->name}}</h1>
<form action="" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit"> delete</button>
</form>

<a href="/editProduct/{{$product->id}}"> edit</a>