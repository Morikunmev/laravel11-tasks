<div>
    <h1>Esto es el componente de Livewire</h1>
    @foreach ($tasks as $task)
        <p class="mt-4 text-lg text-purple-800">
            {{ $task->title }}
        </p>
        <p>
            {{ $task->description }}
        </p>
    @endforeach
</div>
