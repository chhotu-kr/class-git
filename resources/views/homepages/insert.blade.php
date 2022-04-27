@extends('homepages/base')
@section('chhotu')
<div class="container mt-4">
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <h1 class="ms-3">Insert Course</h1>
                <div class="card-body">
                    <form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label>CourseTitle</label>
                        <input type="text" name="course_title" class="form-control @error('course_title') is-invalid @enderror" value="{{old('course_title')}}">
                        @error('course_title')
                        <p class="text-danger small">{{$message}}</p>
                            
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>CourseCategory</label>
                        <select name="category_id" class="form-select">
                            @foreach ($category as $item)
                                <option value="{{$item->id}}">{{$item->cat_title}}</option>
                            @endforeach
                        </select>
                      
                        @error('category_id')
                        <p class="text-danger small">{{$message}}</p>
                            
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>CourseDescription</label>
                        <textarea name="course_description"   rows="5" class="form-control @error('course_description') is-invalid @enderror" value="{{old('course_description')}}"></textarea>
                        @error('course_description')
                        <p class="text-danger small">{{$message}}</p>
                            
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>CourseCover</label>
                        <input type="file" name="course_cover" class="form-control @error('course_cover') is-invalid @enderror" value="{{old('course_cover')}}">
                        @error('course_cover')
                        <p class="text-danger small">{{$message}}</p>
                            
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label>CourseDuration</label>
                        <input type="text" name="course_duration" class="form-control @error('course_duration') is-invalid @enderror" value="{{old('course_duration')}}">
                        @error('course_duration')
                        <p class="text-danger small">{{$message}}</p>
                            
                        @enderror
                    </div>
                    <div class="mb-3">
                      <input type="submit" name="send" class="btn btn-success w-100">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection