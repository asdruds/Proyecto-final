@extends('layouts.plantilla')

@section('title','Create')

<h2>Add new course</h2>

<form class="course-form" action="{{ route('courses.store') }}" method="post">

@csrf

<label for="title">Title:</label>
<input type="text" id="title" name="title">

<label for="description">Description:</label>
<textarea id="description" name="description"></textarea>

<label for="language">Language:</label>
<input type="text" id="language" name="language">

<label for="difficulty">Difficulty:</label>
<select id="difficulty" name="difficulty">
        <option value="Beginner">Beginner</option>
        <option value="Intermediate">Intermediante</option>
        <option value="Advanced">Advanced</option>
</select>

<label for="instructor">Instructor:</label>
<input type="text" id="instructor" name="instructor">

<label for="email">Email:</label>
<input type="text" id="email" name="email">

<input type="submit" value="Add Course">

</form>

@section('anotherContent','Más información de la página create')