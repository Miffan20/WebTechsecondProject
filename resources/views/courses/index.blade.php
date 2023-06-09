@extends('master')

@section('content')


    <div class="container mt-4">
        <div class="row">
            <div class="col-4">
                <ul class="list-group">

                    @foreach($faculties as $faculty)
                        <li class="list-group-item">{{ $faculty->name }}</li>
                    @endforeach

                </ul>
                <div class="mt-3 d-grid">
                    <a href="/courses/create" class="btn btn-success" id="create-course">Create Course</a>
                </div>
            </div>
            @foreach($courses as $course)
            <div class="col">
                <div class="row gap-3">
                    <div class="card course">
                        <div class="card-body">
                            <h5 class="card-title">{{$course->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$course->faculty->name}}</h6>
                            <p class="card-text">{{$course->description}}</p>
                            <a href="{{ route('courses.show', $course->id) }}" class="card-link course-details">Details</a>
                        </div>
                    </div>
                    @endforeach
                    <div class="card course">
                        <div class="card-body">
                            <h5 class="card-title">Kinematisk Spektroskopi</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Faculty of Science</h6>
                            <p class="card-text">Spicy jalapeno cupim lorem cillum tongue non pork loin beef boudin ut. Short loin reprehenderit eiusmod ham tenderloin non picanha aliqua nulla jowl jerky. In occaecat biltong ullamco tongue, cow exercitation dolor doner pork belly aute qui sausage. Adipisicing voluptate tempor chicken corned beef ullamco officia cow, bacon filet mignon veniam sed ad tongue. Shank mollit andouille labore pig voluptate. Bresaola sed laborum sirloin consequat spare ribs pork in consectetur velit ut. Turducken tongue bacon mollit.</p>
                            <a  href="{{ route('courses.show', 1) }}" class="card-link course-details">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
