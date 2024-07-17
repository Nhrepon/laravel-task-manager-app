<div>
    <div class="mt-10 p-5 border">
        <div class="w-full flex">
            <div class="">
                <a href="{{ route('task.show', $task) }}">
                    <h3 class="text-4xl text-bold my-3">{{ $task->id }}. {{ $task->title }}</h3>
                </a>
                <p class="">{{ $task->description }}</p>
                
            </div>

            <p class=" ">{{ $task->status }}</p>
        </div>

        <div class="flex items-center justify-between py-2">
            <p>{{ \Carbon\Carbon::parse($task->due_date)->diffForHumans() }}</p>
            <form action="{{ route('task.update', $task) }}" method="POST">
                @method('PATCH')
                @csrf

            <input type="hidden" name="status" value="{{ $task->status == 'completed' ? 'pending' : 'completed' }}">

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Mark as {{ $task->status == 'completed' ? 'pending' : 'completed' }}
            </button>
            </form>
        </div>
    </div>
</div>