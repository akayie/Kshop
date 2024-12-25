@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
                    <div class="my-3">
                        <h1 class="mt-4 d-inline">Edit User</h1>
                        <a href="{{route('backend.users.index')}}" class="btn btn-primary float-end" >Cancel</a>
                    </div>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.users.index')}}">Users</a></li>
                            <li class="breadcrumb-item"><a href="{{route('backend.users.create')}}">Edit User</a></li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Edit users
                            </div>
                            <div class="card-body">
                                <form action="{{route('backend.users.update',$user->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <table class="table table-bordered">  
                                    <div class="col-md-12 mb-3">
                                            <label for="name" class="form-label">User</label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="" name="name" value="{{$user->name}}">
                                            </select>
                                            @error('name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="profileprofile-tab" data-bs-toggle="tab" data-bs-target="#profileprofile-tab-pane" type="button" role="tab" aria-controls="profileprofile-tab-pane" aria-selected="true">Profile</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="new_profile-tab" data-bs-toggle="tab" data-bs-target="#new_profile-tab-pane" type="button" role="tab" aria-controls="new_profile-tab-pane" aria-selected="false">New Profile</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                                <img src="{{$user->profile}}" alt="" class="w-25 h-25 my-3">
                                                <input type="hidden" name="profile" id="" value="{{$user->profile}}">
                                            </div>
                                            <input type="file" accept="profile/*" class="form-control @error('profile') is-invalid @enderror" id="profile" name="profile" value="{{old('profile')}}">
                                       
                                             @error('image')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                             @enderror
                                    </div>

                                    <div class="col-md-12 mb-3">
                                            <label for="user_id" class="form-label">Role</label>
                                            <select class="form-select form-select-sm @error('user_id') is-invalid @enderror" aria-label="user_id" name="user_id">
                                            <option value="">Choose Role</option>
                                            @foreach($users as $user)
                                                <option value="{{$user->id}}" {{$user->user_id == $user->id?'selected':''}}>{{$user->role}}</option>
                                            @endforeach
                                            </select>
                                            @error('user_id')
                                        <div class="invalid-feedback">{{$message}}</div>
                                        @enderror
                                        </div>

                                    <div> 
                                        <button class="w-100 btn btn-warning mt-5" type="submit">Update</button>
                                    </div>
                                    
                                </form>
                            </div>
                                </table>
                         
                            </div> 
                        </div>
                    

@endsection