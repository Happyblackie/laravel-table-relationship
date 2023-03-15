@extends('products.layout')
 
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Category Name</th>
      
    </tr>
  </thead>
  <tbody>
             @foreach ($products as $product)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $product->prodname }}</td>
                  <td>{{ $product->category->catname }}</td>
  
                </tr>
            @endforeach
  
  </tbody>
 
</table>


{{--  CREATE TABLE users 
    (
         id INT AUTO_INCREMENT PRIMARY KEY,
         username VARCHAR(255) NOT NULL,
         email VARCHAR(255) NOT NULL UNIQUE,
         password VARCHAR(255) NOT NULL
    );  --}}