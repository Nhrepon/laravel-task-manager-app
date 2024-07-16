<div>
<select id='taskStatus' onChange="filterStatus()" class="bg-gray-50 border border-gray-300 p-2 m-2">
        <option value="all" @if ($status == 'all') selected @endif>All</option>
        <option value="completed" @if ($status == 'completed') selected @endif>Completed</option>
        <option value="pending" @if ($status == 'pending') selected @endif>Pending</option>
    </select>
</div>

<script>
    function filterStatus(){
        let status = document.getElementById('taskStatus').value;
        if(status == 'all'){
            //window.location.href = "/task";
            location.href = "{{route('task.index')}}";
        } else {
            window.location.href = "/task?status=" + status;
            //window.location.href = "{{route('task.index')}}?status=" + status;
        }
    }
</script>