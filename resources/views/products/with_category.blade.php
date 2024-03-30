@extends('layouts.app')

@section('content')
<h1 class="text text-primary">product avec le catogiry 3</h1>

<table class="table table-striped">
    <thead>
        <tr>
            <th>name</th>
            <th> prix</th>
            <!-- <th>category_id</th> -->
          
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)

        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->prix }}</td>
            <!-- <td>{{ $product->category_id }}</td> -->
       
        </tr>
        @endforeach
    </tbody>
</table>
<!-- <ul>
    @foreach($products as $product)
    <li>{{$product->name}}-{{$product->prix}} </li>
    @endforeach
</ul> -->

@endsection