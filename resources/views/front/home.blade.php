<div class="home">
        <div class="container">
            <div class="row min-vh-100 align-items-center">
                <div class="col-lg-8">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                     {{ session()->get('message') }}
                     </div>
                @endif
               
               
                    <div class="home-text">
                        <h1>{{$home->title}}</h1>
                        <h2>{{$home->subject}}</h2>
                        <td><img src="{{ asset('admin/images/home/'. $home->image)}}" width="100" alt=""></td>
                        <h4>{{$home->job}}</h4>
                        <p>{{$home->description}}</p>
                        <a href="{{$home->link}}" class="btn btn-danger">About me</a>
                    </div>
                </div>
                <div class="col-lg-4 home-img min-vh-100">
                    
                </div>
            </div>
        </div>
      </div>