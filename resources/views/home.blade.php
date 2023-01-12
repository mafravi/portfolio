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
                    <il><a href="{{route('about.index')}}">SKILLS</a></il>
                    </ul>
                    <ul>
                    <il><a href="">BLOGS</a></il>
                    </ul>
                    
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">welcome {{ Auth::user()->name }}</div>

                <div class="card-body">
                   You can change the setting
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
