@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                    <div class="my-3">
                        <h1 class="mt-4 d-inline">Edit Item</h1>
                        <a href="{{route('backend.items.index')}}" class="btn btn-danger float-end" >Cancel</a>
                    </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.items.index')}}">Items</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.items.create')}}">Edit Item</a></li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit Items 
                            </div>
                            <div class="card-body">
                                <form action="{{route('backend.items.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        <table class="table table-bordered">
                                        <div class="mb-3">
                                        <label for="code_no" class="form-label">Code No</label>
                                        <input type="text" class="form-control @error('code_no') is-invalid @enderror" value="{{$item->code_no}}" id="code_no" name="code_no" placeholder="">
                                        @error('code_no')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                        <label for="name" class="form-label">Item Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}" id="name" placeholder="" name="name">
                                        @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input type="file" accept="image/*" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                                       
                                         @error('image')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{$item->price}}" id="price" name="price" >
                                        @error('price')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="mb-3">
                                        <label for="discount" class="form-label">Discount</label>
                                        <input type="text" class="form-control @error('discount') is-invalid @enderror" value="{{$item->discount}}" id="discount" name="discount">
                                        @error('discount')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="in_stock" class="form-label">InStock</label>
                                            <select class="form-select form-select-sm @error('in_stock') is-invalid @enderror" aria-label="in_stock" name="in_stock" id="in_stock">
                                            <option value="1" {{$item->in_stock ==1?'selected':''}}>Yes</option>
                                            <option value="0" {{$item->in_stock ==1?'selected':''}}>No</option>
                                            
                                            </select>
                                            @error('in_stock')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="category_id" class="form-label">Category</label>
                                            <select class="form-select form-select-sm @error('category_id') is-invalid @enderror" aria-label="category_id" name="category_id">
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{$item->category_id  == $category->id?'selected':''}}>{{$category->name}}</option>
                                            @endforeach
                                            </select>
                                            @error('category_id')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="2" name="description">{{$item->description}}</textarea>
                                        @error('description')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>
                                    </div>
                                   
                                    <button class="w-100 btn btn-primary" type="submit">Save</button>
                                    </div>
                                    
                                </form>
                                </div>
                                </table>
                         
                            </div> 
                        </div>
                    </div>

@endsection