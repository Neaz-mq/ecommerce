@extends('backend.master')

@section('content')

<h2> Create Category</h2>

<form action="{{route('category.store')}}" method="post">
  <div class="form-group">
    <label for="name"> Enter category name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter category name">
    
  </div>
  <div class="form-group">
    <label for="des">Description</label>
    <textarea class="form-control" name="description" id="des" placeholder="Enter description" ></textarea>
   
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection