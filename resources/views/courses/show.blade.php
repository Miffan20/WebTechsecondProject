@extends('master')

@section('title')
        {{$key->name}}

@endsection
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-8">
                <h1 class="display-6">{{$key->name}}</h1>
                <p class="h4 text-secondary">{{$key->code}} - {{$key->ECTS}} ECTS</p>
                <p>{{$key->description}}</p>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="card-header">
                        {{$key->faculty->name}} ({{$key->faculty->code}})
                    </div>
                    <div class="card-body">

                        <p class="card-text">{{$key->faculty->description}}</p>
                    </div>
                </div>
                <div class="mt-3 d-grid gap-3">
                    <a href="{{ route('courses.edit', $key->id) }}" class="btn btn-primary" id="edit-course">Edit course</a>
                    <form>
                        <button type="submit" class="btn btn-danger w-100" id="delete-course">Delete course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

