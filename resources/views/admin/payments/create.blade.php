@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                    <div class="my-3">
                        <h1 class="mt-4 d-inline">Payments</h1>
                        <a href="{{route('backend.payments.create')}}" class="btn btn-primary float-end" >Create Payments</a>
                    </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Payments</li>
                            <li class="breadcrumb-item active">Payments Create</li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Payment List
                            </div>
                            <div class="card-body">
                                <form action="{{route('backend.payments.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        
                                    <div class="col-md-12 mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <select class="form-select form-select-sm" aria-label="name" name="name">
                                            <option selected>Choose Payment</option>
                                            @foreach($payments as $payment)
                                            <option value="{{$payment->name}}">{{$payment->name}}</option>
                                            @endforeach
                                            </select>
                                    </div>

                                        <div class="col-md-12 mb-3">
                                        <label for="logo" class="form-label">Logo</label>
                                        <input class="form-control" type="file" id="logo" name="logo">
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