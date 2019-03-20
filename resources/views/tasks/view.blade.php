@extends("layout")

@section("content")

<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>{{ $task->title }}</h1>
                <p>{{ $task->description }}</p>
                <a href="/" class="btn btn-link">On home page</a>
            </div>
        </div>
    </div>
</div>

@endsection