@extends('layout')

@section('content')


    <div class="row">

        <div class="col-lg-12 col-lg">
            
            <form action="{{ route('todos.save',['id' => $todo->id]) }}" method="post">

            <!--never forget your crsf field is a must  -->
            {{ csrf_field() }}
            
            <input type="text" class="form-control input-lg" name="todo" value="{{ $todo->todo }}" placeholder="Create a new todo">

            </form>

        </div>

    </div>

@stop
    