@extends('master/base')
@section('chhotu')
<div class="container mt-5">
    <div class="row">
        <div class="col-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="POST">
                        @csrf
                        <div class="mb-2">
                            <label>CatTitle</label>
                            <input type="text" name="cat_title" class="form-control @error('cat_title') is-invalid @enderror" value="{{old('cat_title')}}">
                            @error('cat_title')
                            <p class="text-danger small">{{$message}}</p>
                                
                            @enderror
                        </div>
                        <div class="mb-2">
                            <input type="submit" class="btn btn-secondary w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection