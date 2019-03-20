@extends("layout")

@section("content")

<div class="wrapper">

    @include("errors")
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Edit Task - {{ $task->id }} </h1>
                {!! Form::open(["route" => ["tasks.update", $task->id], "method" => "PUT"]) !!}
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ $task->title }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content:</label>
                        <textarea name="description" id="" cols="30" rows="10" id="content" class="form-control" >{{ $task->description }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection