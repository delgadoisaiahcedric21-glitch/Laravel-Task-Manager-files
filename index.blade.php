@extends('layouts.app')

@section('title', 'My Tasks')

@section('content')
<div class="topbar">
    <div>
        <h1>My Tasks</h1>
        <div class="muted">Keep track of your daily school and personal tasks.</div>
    </div>
    <a class="btn btn-primary" href="{{ route('tasks.create') }}">+ Add New Task</a>
</div>

<div class="stats">
    <div class="stat">
        <span class="muted">Total Tasks</span>
        <strong>{{ $tasks->count() }}</strong>
    </div>
    <div class="stat">
        <span class="muted">Pending</span>
        <strong>{{ $pendingCount }}</strong>
    </div>
    <div class="stat">
        <span class="muted">Completed</span>
        <strong>{{ $completedCount }}</strong>
    </div>
</div>

<div class="card table-wrap">
    @if($tasks->isEmpty())
        <p class="muted">No tasks yet. Click <strong>Add New Task</strong> to create your first task.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Task</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Due Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td><strong>{{ $task->task_name }}</strong></td>
                    <td>{{ $task->description ?: 'No description' }}</td>
                    <td>
                        <span class="badge {{ strtolower($task->status) }}">
                            {{ $task->status }}
                        </span>
                    </td>
                    <td>{{ $task->due_date->format('M d, Y') }}</td>
                    <td>
                        <div class="actions">
                            <form action="{{ route('tasks.toggleStatus', $task) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success" type="submit">
                                    {{ $task->status === 'Pending' ? 'Complete' : 'Set Pending' }}
                                </button>
                            </form>
                            <a class="btn btn-secondary" href="{{ route('tasks.edit', $task) }}">Edit</a>
                            <form action="{{ route('tasks.destroy', $task) }}" method="POST"
                                  onsubmit="return confirm('Delete this task?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
