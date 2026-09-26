@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
<div class="card">
    <h1>Edit Task</h1>
    <p class="muted">Update the information for this task.</p>

    <form action="{{ route('tasks.update', $task) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="task_name">Task Name</label>
            <input id="task_name" name="task_name" value="{{ old('task_name', $task->task_name) }}" required>
            @error('task_name') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description', $task->description) }}</textarea>
            @error('description') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" required>
                <option value="Pending" {{ old('status', $task->status) === 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Completed" {{ old('status', $task->status) === 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>
            @error('status') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input id="due_date" type="date" name="due_date"
                   value="{{ old('due_date', $task->due_date->format('Y-m-d')) }}" required>
            @error('due_date') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button class="btn btn-primary" type="submit">Update Task</button>
        <a class="btn btn-secondary" href="{{ route('tasks.index') }}">Cancel</a>
    </form>
</div>
@endsection
