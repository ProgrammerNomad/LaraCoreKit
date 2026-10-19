<div>
    <form wire:submit="save">
        {{ $this->form }}

        <div class="mt-6">
            @foreach ($this->getFormActions() as $action)
                {{ $action }}
            @endforeach
        </div>
    </form>
</div>
