
<h1>Edit course: {{$key->name}}</h1>

<body>


<form id="course-form" action="{{ asset('/courses/'.$key->id)  }}" method="POST">
    @csrf
    @method('PUT')

    <label for="coursename">Course name:</label><br>
    <input type="text" id="coursename" name="name" value="{{$key->name}}"><br>


    <label for="code">Course code:</label><br>
    <input type="text" id="codename" name="code" value="{{$key->code}}"><br>


    <label for="ects">ETCS Value:</label><br>
    <input type="number" id="ects" name="ects" value="{{$key->ECTS}}"><br>


    <label for="faculty">Faculty:</label><br>
    <select id="faculty" name="faculty">
        @foreach($faculties as $faculty)

                @if(old('faculty_id', $key->faculty_id)==$faculty->id)
                <option value={{$faculty->id}} selected > {{$faculty->name}}</option>
            @else
                <option value={{$faculty->id}} > {{$faculty->name}}</option>
            @endif


        @endforeach

        {{--Only thing needed is to default the select value to the correct faculty id--}}


        {{--
                 Attempt 1:

                @foreach($faculties as $faculty)
                    <option value="{{$faculty->id}}">{{ $faculty->name }}</option>
                @endforeach


                 attempt 2:
                        $faculties = Faculty::all(); --this might work, taken from route on web.php
                        @foreach($faculties as $faculty)
                            <option value="{{$faculty['id']}}">{{$faculty['name']}}</option>
                        @endforeach




                <option value="1">Faculty of Business and Social Sciences</option>
                <option value="2">Faculty of Engineering</option>
                <option value="3">Faculty of Health Sciences</option>
                <option value="4">Faculty of Humanities</option>
                <option value="5">Faculty of Science</option>
            --}}

    </select><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description">{{$key->description}}</textarea> {{--It was a function space here, that fucked it up!!!--}}




    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
