
<h1>Create a course:</h1>

<body>


<form id="course-form" action="{{ asset('/courses') }}" method="POST">
    @csrf

    <label for="coursename">Course name:</label><br>
    <input type="text" id="coursename" name="name"><br>


    <label for="code">Course code:</label><br>
    <input type="text" id="codename" name="code"><br>


    <label for="ects">ETCS Value:</label><br>
    <input type="number" id="ects" name="ects"><br>


    <label for="faculty">Faculty:</label><br>
    <select id="faculty" name="faculty">
        @foreach($faculties as $faculty)
            <option value="{{$faculty->id}}">{{ $faculty->name }}</option>
        @endforeach


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
    <textarea id="description" name="description"></textarea>




    <br><br>
    <input type="submit" value="Submit">
</form>

</body>
