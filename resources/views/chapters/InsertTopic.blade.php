@extends('chapters/base')
@section('chhotu')
<div class="container mt-5">
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card" style="background-color:#CCCCFF;">
                <h3 class="fs-bold py-1  ms-3">Insert Topic</h3>
                <div class="card-body">
                    
                    <form action="{{route('topic.store')}}" method="POST">
                           @csrf
                        <div class="mb-3">
                           <label>Topic_title</label>
                           <input type="text" name="topic_title" class="form-control @error('topic_tittle') is-invalid @enderror" value="{{old('topic_title')}}">
                           @error('topic_title')
                               <p class="text-danger small">{{$message}}</p>
                           @enderror
                       </div>
                        
                        <div class="mb-3">
                           <label>CourseId</label>
                           <select name="home_id" id="" class="form-select">
                               @foreach($Topics as $item)
                                   <option value="{{$item->id}}">{{$item->course_title}}</option>
                               @endforeach
                           </select>
                           @error('home_id')
                               <p class="text-danger small">{{$message}}</p>
                           @enderror
                       </div>
                       <div class="mb-3">
                           <input type="submit" class="btn btn-success w-100">
                       </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection