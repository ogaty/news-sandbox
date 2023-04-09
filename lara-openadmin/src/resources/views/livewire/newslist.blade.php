<div>
    <select wire:change="handleChange(event.target.value)">
        <option value="0">aaa</option>
        <option value="1">bbb</option>
    </select>

    <button wire:click="onClick">button</button>
    <h1>
        {{ $status }}
    </h1>
    <ul>
        @foreach ($newsList as $newsData)
            <li>
                {{ link_to(route('news.show', $newsData->id), $newsData->title, ['class' => 'aaa']) }}
            </li>
        @endforeach
    </ul>

    <livewire:hello />
    <form>
        <input type="text" value="" wire:model="aaa">
        {{ $aaa }}
    </form>

    <form wire:submit.prevent="save">
        <input type="file" wire:model="photo" wire:change="save">

        @error('photo') <span class="error">{{ $message }}</span> @enderror

        <button type="submit">Save Photo</button>
    </form>

</div>
