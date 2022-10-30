<h1>Create a course:</h1>
<form id="course-form" method="POST">
    @csrf

    <label for="coursename">Course name:</label><br>
    <input type="text" id="coursename" name="name"><br>


    <label for="code">Course code:</label><br>
    <input type="text" id="codename" name="code"><br>


    <label for="etcs">ETCS Value:</label><br>
    <input type="number" id="etcs" name="etcs"><br>


    <label for="faculty">Faculty:</label><br>
    <select id="faculty" name="faculty">


        {{--
        $faculties = Faculty::all(); --this might work, taken from route on web.php
        @foreach($faculties as $faculty)
            <option value="{{$faculty['id']}}">{{$faculty['name']}}</option>
        @endforeach

        --}}


        <option value="1">Business</option>
        <option value="2">Engineering</option>
        <option value="3">Health Sciences</option>
        <option value="4">Humanities</option>
        <option value="5">Science</option>


    </select><br>

    <label for="describtion">Describtion:</label><br>
    <textarea id="describtion" name="describtion"></textarea>




    <br><br>
    <input type="submit" value="Submit">
</form>
