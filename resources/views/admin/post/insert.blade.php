@extends('layouts.app')

@section('content')





<div class="container">
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif
    <form action = "/create" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <div class="form-group">
            <label for="formGroupExampleInput">Post Title</label>
            <input type="text" name="title" class="form-control" id="formGroupExampleInput" placeholder="Enter Post Title">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Post Sub Title</label>
            <input type="text" name="sub-title" class="form-control" id="formGroupExampleInput2" placeholder="Enter Post Sub Title">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Post Description</label>
            {{--<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">--}}
            <textarea class="form-control" name="description" placeholder="Enter description......."></textarea>
        </div>
        <div class="form-group">
            {{--<input type = 'submit' value = "Add post"/>--}}
            <button type="submit" class="btn btn-primary">Add post</button>
        </div>
    </form>
</div>

@endsection