@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                   Setting
                </div>
                <div class="card-body">
              
                    <ul>
                        <il><a href="{{route('setting.index')}}">HOME</a></il>
                    </ul>
                    <ul>
                    <il><a href="{{route('about.index')}}">about</a></il>
                    </ul>
                    <ul>
                    <il><a href="">BLOGS</a></il>
                    </ul>
                    
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">About editing</div>

                <div class="card-body">
                     
                    <form action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" value="{{$about->title}}" class="form-control" name="title">
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                       
                        <div class="form-group mt-4">
                            <label for="">description</label>
                            <input type="text" value="{{$about->description}}" class="form-control" name="description">
                            @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="">link</label>
                            <input type="text" value="{{$about->link}}" class="form-control" name="link">
                            @error('link')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                       
                        <div class="form-group mt-4">
                           <button type="submit" class="btn btn-success px-5">submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
