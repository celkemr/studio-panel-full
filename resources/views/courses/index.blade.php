<h1>Courses</h1>
<ul>
    @foreach($courses as $course)
        <li>{{ $course->title }}</li>
    @endforeach
</ul>
<a href="{{ route('courses.create') }}">Add New Course</a>
