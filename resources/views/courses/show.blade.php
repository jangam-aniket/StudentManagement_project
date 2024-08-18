@extends('layout')
@section('content')


<div class="card">
    <div class="card-header">Courses Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-text">Id : {{ $courses->id }}</h5>
            <h5 class="card-title">Name : {{ $courses->name }}</h5>
            <h5 class="card-text">Syllabus : {{ $courses->syllabus }}</h5>
            <h5 class="card-text">Duration : {{ $courses->duration }}</h5>
        </div>

        </hr>

    </div>
</div>