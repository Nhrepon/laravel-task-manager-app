<x-layout>
    <div class="text-center mt-3">
        <h1 class="text-5xl my-2" >Task Manager</h1>
        <h2 class="text-2xl my-2">Total task: {{ $tasks->count() }}</h2>
    </div>
    <hr/>

    <x-task-status :status="request()->get('status')" />

    @foreach ($tasks as $task)
    <!-- <x-task :task="$task" /> -->
    <x-task :$task />
    @endforeach
</x-layout>