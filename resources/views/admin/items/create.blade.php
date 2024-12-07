@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                    <div class="my-3">
                        <h1 class="mt-4 d-inline">Items</h1>
                        <a href="{{route('backend.items.create')}}" class="btn btn-primary float-end" >Create Item</a>
                    </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Items</li>
                            <li class="breadcrumb-item active">Items Create</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Posts List
                            </div>
                            <div class="card-body">
                                        <table class="table table-bordered">
                                        <div class="mb-3">
                                        <label for="codeno" class="form-label">Code No</label>
                                        <input type="text" class="form-control" id="codeno" placeholder="">
                                        </div>

                                        <div class="mb-3">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="image" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="image" multiple>
                                        </div>
                                        </div>

                                        <div class="mb-3">
                                        <label for="price" class="form-label">Price</label>
                                        <input type="text" class="form-control" id="price" placeholder="">
                                        </div>

                                        <div class="mb-3">
                                        <label for="discount" class="form-label">Discount</label>
                                        <input type="text" class="form-control" id="discount" placeholder="">
                                        </div>

                                        <div class="col-md-12 mb-3">
                                            <label for="instock" class="form-label">InStock</label>
                                            <select class="form-select form-select-sm" aria-label="instock">
                                            <option selected>Yes</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                        </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select class="form-select form-select-sm" aria-label="category">
                                            <option selected>Choose Category</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            </select>
                                            </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" rows="2"></textarea>
                                        </div>
                                    </div>
                                    </form>
                                    <button class="w-100 btn btn-primary" type="button">Save</button>
                                    </div>
                                </div>
                                </table>
                         
                            </div> 
                        </div>
                    </div>

@endsection