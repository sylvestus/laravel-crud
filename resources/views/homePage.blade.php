@foreach ($products as $item)

<h5>
    <a href="/singleProduct/{{$item->id}}"> {{$item->name}}</a>
  
   {{$item->description}}
   {{$item->price}}
</h5>
   
      
   @endforeach

   <a href="/addProductform">Add item</a>