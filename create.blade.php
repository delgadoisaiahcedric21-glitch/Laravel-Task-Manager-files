@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
<div class="card">
    <h1>Add Task</h1>
    <p class="muted">Create a new task for your list.</p>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="task_name">Task Name</label>
            <input id="task_name" name="task_name" value="{{ old('task_name') }}" required>
            @error('task_name') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description">{{ old('description') }}</textarea>
            @error('description') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" required>
                <option value="Pending" {{ old('status') === 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Completed" {{ old('status') === 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>
            @error('status') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input id="due_date" type="date" name="due_date" value="{{ old('due_date') }}" required>
            @error('due_date') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button class="btn btn-primary" type="submit">Save Task</button>
        <a class="btn btn-secondary" href="{{ route('tasks.index') }}">Cancel</a>
    </form>
</div>
@endsection
