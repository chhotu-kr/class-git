@extends('homepages/base')
@section('chhotu')
<div class="container-fluid text-white py-4" style="background-image: radial-gradient( circle 976px at 51.2% 51%,  rgba(11,27,103,1) 0%, rgba(16,66,157,1) 0%, rgba(11,27,103,1) 17.3%, rgba(11,27,103,1) 58.8%, rgba(11,27,103,1) 71.4%, rgba(16,66,157,1) 100.2%, rgba(187,187,187,1) 100.2% );">
    <div class="container py-4">
        <div class="row">
            <div class="col-lg-4">
                <h3 class="text-white">Welcome in online class</h3>
                <p class="text-info">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis voluptatum deleniti possimus? Enim, dolor! Earum, beatae. Omnis quas provident vitae. Eius quia enim aut similique cupiditate quibusdam asperiores. Delectus, quos!</p>
                
            </div>
            
        </div>
        <a href="{{ route('video.calling') }}" class="btn btn-light btn-outline  text-dark float-end">video</a>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="h5 border-start border-secondary ps-2 border-5">Our Course</h2>
        </div>
    </div>
</div>
       <div class="container mt-3">
        <div class="row">
            
            @foreach ($homes as $item)
            <div class="col-2">
                <div class="card border-2">
                
                   <img src="{{asset('images/'.$item->course_cover)}}" alt="" class=" card-img-top img-fluid" style="height: 165px">
                   <div class="card-footer">
                       <h3 class="fs-bold mb-0 small">
                         <strong>{{$item->course_duration}}</strong>
                       </h3>
                   </div>
                   
                </div>
            </div>
                   
            @endforeach
                
       
      
    </div>
    <div class="row">
        @foreach ($contents as $con)
            
       
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                     
                        <iframe width="560" height="315" src="{{ $con->video_url }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                   
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


   
@endsection