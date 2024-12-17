@extends('layouts.admin')
@section('content')

<div class="container-fluid px-4">
                    <div class="my-3">
                        <h1 class="mt-4 d-inline">Categories</h1>
                        <a href="{{route('backend.categories.create')}}" class="btn btn-primary float-end" >Create Category</a>
                    </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.categories.index')}}">Categories</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.categories.create')}}">Create Category</a></li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Categories List
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No.</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php 
                                            $i=1;
                                        @endphp
                                       @foreach($categories as $category)
                                       <tr>
                                        <tdtd>
                                        <td>{{$i++}}</td>
                                        <td>{{$category->name}}</td> 
                                        <td><img src="{{$category->image}}" class="w-25 h-25"/></td>                                 
                                        <td>
                                             <a href="" class="btn btn-sm btn-warning">Edit</a>
                                             <a href="" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                        </tr>
                                        @endforeach
                                   </tbody>
                                </table>
                                {{$categories->links()}}
                            </div>
                        </div>
                    </div>
@endsection