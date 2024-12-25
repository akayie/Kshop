@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                    <div class="my-3">
                        <h1 class="mt-4 d-inline">Users</h1>
                        <a href="{{route('backend.users.create')}}" class="btn btn-primary float-end" >Create User</a>
                    </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.users.index')}}">Users</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.users.create')}}">Create User</a></li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Users List
                            </div>
                            <div class="card-body">
                                <form action="{{route('backend.users.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                        
                                    <div class="col-md-12 mb-3">
                                            <label for="name" class="form-label">User</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="" name="name">
                                            </select>
                                            @error('name')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="number" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" id="phone" name="phone" >
                                        @error('phone')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email" name="email" >
                                        @error('phone')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>
                                        <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="text" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}" id="password" name="password" >
                                        @error('password')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                    <div class="col-md-12 mb-3">
                                        <label for="profile" class="form-label">Profile</label>
                                        <input type="file" accept="profile/*" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile">
                                       
                                         @error('profile')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="role" class="form-label">Role</label>
                                            <input type="text" class="form-control @error('role') is-invalid @enderror" id="role" placeholder="" name="role">
                                            </select>
                                            @error('role')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
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