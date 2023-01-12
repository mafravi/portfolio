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
                    <il><a href="{{route('about.index')}}">ABOUT</a></il>
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
                <table id="customers">
  <tr>
    <th>title</th>
    <th>about</th>
    <th>accuopation</th>
  
    <th>photo</th>
    <th>link</th>
    <th>edite</th>
    <th>delete</th>
  </tr>
  @foreach($home as $item){
    <tr>
    
    <td>{{$item->title}}</td>
    <td>{{$item->subject}}</td>
    <td>{{$item->description}}</td>
   
    
    <td><img src="{{ asset('admin/images/home/'. $item->image)}}" width="80" alt=""></td>
    <td>{{$item->link}}</td>
    <td><a href="{{route('setting.edit',['id'=>$item->id])}}">Edit</a></td>
    <td><a href="{{route('setting.destroy',$item->id)}}" >delete</a>
    <!-- <td><a href="{{route('setting.index',$item->id)}}" >display</a> -->
      
    </td>
  </tr>
  }
  @endforeach
  
</table>
<a href="{{route('setting.create')}}" class="btn btn-success px-3 mt-3">home setting</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
