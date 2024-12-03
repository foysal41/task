@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <section class="section">
            <div class="section-header">
                <h1>Edit Task</h1>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                  <h4>Edit Task</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('task.update' , $task->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" placeholder="Enter task title" >
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4" placeholder="Enter task description" required> {{ $task->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control" required>
                                <option value="pending">Pending</option>
                                <option value="in-progress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>

                        <div class="form-group mt-4">
                            <button type="submit" class="btn btn-primary">Create Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection
