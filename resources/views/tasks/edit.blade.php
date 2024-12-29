<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Edit Task</h1>
                    <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="mt-4">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="title" class="block text-gray-700">Task Title</label>
                            <input type="text" id="title" name="title" 
                                   value="{{ old('title', $task->title) }}" 
                                   class="w-full rounded-lg border-gray-300 shadow-sm focus:ring focus:ring-blue-200" 
                                   placeholder="Enter task title" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-gray-700">Task Description</label>
                            <textarea id="description" name="description" 
                                      class="w-full rounded-lg border-gray-300 shadow-sm focus:ring focus:ring-blue-200" 
                                      placeholder="Enter task description" required>{{ old('description', $task->description) }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Update Task
                        </button>
                        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                            Cancel
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
