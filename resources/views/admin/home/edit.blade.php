@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">
                    Website Setting
                </div>
                <div class="card-body">
                
                    <ul>
                        <il><a href="{{route('setting.index')}}">HOME</a></il>
                    </ul>
                    <ul>
                    <il><a href="">SKILLS</a></il>
                    </ul>
                    <ul>
                    <il><a href="">BLOGS</a></il>
                    </ul>
                    
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Home setting</div>

                <div class="card-body">
                     
                    <form action="{{route('setting.update', $home->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" value="{{$home->title}}" class="form-control" name="title">
                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Name</label>
                            <input type="text" value="{{$home->subject}}" class="form-control" name="subject">
                            @error('subject')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="">description</label>
                            <textarea type="text" value="{{$home->description}}" class="form-control" name="description">{{$home->description}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="">job</label>
                            <input type="text" value="{{$home->job}}" class="form-control" name="job">
                            @error('Job')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="">link</label>
                            <input type="text" value="{{$home->link}}" class="form-control" name="link">
                            @error('link')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                            <label for="">image</label>
                            <input type="file" class="form-control" name="image">
                            <p><img src="{{asset('admin/images/home/'.$home->image)}}" width="120"alt=""></p>
                            @error('image')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-4">
                           <button type="submit"   class="btn btn-success px-5">submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
