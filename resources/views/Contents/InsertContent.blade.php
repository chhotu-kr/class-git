@extends('Contents/dashboard')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="card" style="background-color: #FFFF00" >
                    <h1 class="ms-3  border-bottom border-3 border-danger">InsertContents</h1>
                    <div class="card-body">
                        <form action="{{route('contentInsert')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label>Author</label>
                                <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value="{{old('author')}}">
                                @error('author')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Date Of Publish</label>
                                <input type="date" name="date_of_publish" class="form-control @error('date_of_publish') is-invalid @enderror" value="{{old('date_of_publish')}}">
                                @error('date_of_publish')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>    
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea rows="5" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}"></textarea>
                                @error('description')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>VideoUrl</label>
                                <input type="text" name="video_url" class="form-control @error('video_url') is-invalid @enderror" value="{{old('video_url')}}">
                                @error('video_url')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Topic </label>
                                <select name="topic_id" class="form-select">
                                    @foreach ($topics as $item)
                                        <option value="{{ $item->id}}">{{$item->topic_title}}</option>
                                    @endforeach
                                </select>
                                @error('topic_id')
                                    <p class="text-danger small">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection