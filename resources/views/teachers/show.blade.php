@extends('layout')
@section('content')


<div class="card">
    <div class="card-header">Teachers Page</div>
    <div class="card-body">


        <div class="card-body">
            <h5 class="card-text">Id : {{ $teachers->id }}</h5>
            <h5 class="card-title">Name : {{ $teachers->name }}</h5>
            <h5 class="card-text">Address : {{ $teachers->address }}</h5>
            <h5 class="card-text">Mobile : {{ $teachers->mobile }}</h5>
        </div>

        </hr>

    </div>
</div>