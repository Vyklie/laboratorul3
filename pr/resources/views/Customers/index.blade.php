<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title', 'Page Title')
 

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        <p>{{ $message }}</p>
    </div> 
@endif
<a href="{{ route('customers.create') }}">Create new Customer</a>
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Action</th> 
        </tr>
    </thead>
    <tbody>
        @forelse ($customers as $customer)
        <tr>
            <td>{{ $customer->first_name }}</td>
            <td>{{ $customer->last_name }}</td>
            <td>
                <a href="{{ route('customers.show', $customer->id) }}">View</a>
                <a href="{{ route('customers.edit', $customer->id) }}">Edit</a>
                <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button  type="submit">Remove</button>
                </form>
            </td> 
        </tr> 
        @empty
            
        @endforelse
        
    </tbody> 
</table>
@endsection