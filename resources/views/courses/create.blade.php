<h1>Create Course</h1>
<form method="POST" action="{{ route('courses.store') }}">
    @csrf
    <label>Title</label>
    <input type="text" name="title">
    <label>Description</label>
    <textarea name="description"></textarea>
    <button type="submit">Save</button>
</form>
