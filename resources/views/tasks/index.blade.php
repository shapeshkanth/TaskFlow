<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Tasks</h1>
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Add Task</a>

                    @if ($tasks->isEmpty())
                        <p>No tasks available. <a href="{{ route('tasks.create') }}">Create a task</a>.</p>
                    @else
                        <ul class="list-group">
                            @foreach ($tasks as $task)
                                <li class="list-group-item">
                                    <h5>{{ $task->title }}</h5>
                                    <p>{{ $task->description }}</p>
                                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
