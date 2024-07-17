<div>
@if($showToolbar)
        <x-task-status :status="request()->get('status')" />
    @else
        <a href="{{ route('task.index') }}"> All tasks </a>
    @endif
</div>