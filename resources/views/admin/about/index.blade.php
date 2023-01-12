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
                    <il><a href="{{route('about.index')}}">About</a></il>
                    </ul>
                    <ul>
                    <il><a href="">BLOGS</a></il>
                    </ul>
                    
                </div>

            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">About us  setting</div>

                <div class="card-body">
                <table id="customers">
  <tr>
    <th>title</th>
    <th>description</th>
 
    <th>link</th>
    <th>edite</th>
    <th>delete</th>
  </tr>
  @foreach($about as $item){
    <tr>
    
    <td>{{$item->title}}</td>
    
    <td>{{$item->description}}</td>
    
    <td>{{$item->link}}</td>
    <td><a href="{{route('about.edit',['id'=>$item->id])}}">Edit</a></td>
    <td><a href="{{route('about.destroy',$item->id)}}">Delete</a>
   
      
    </td>
  </tr>
  }
  @endforeach
  
  
</table>
<a href="{{route('about.create')}}" class="btn btn-success px-3 mt-3">About setting</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
