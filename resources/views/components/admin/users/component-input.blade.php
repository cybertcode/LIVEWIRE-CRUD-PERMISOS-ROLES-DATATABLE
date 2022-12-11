<div class="relative mr-2 mt-2">
    <label for="{{ $name }}" class="block text-sm font-medium text-gray-700">{{ $label }}</label>
    <input type="{{ $type }}" wire:model="{{ $name }}" id="{{ $name }}" name="name"
        class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent "
        placeholder="{{ $placeholder }}" />
    @if ($errors->has($name))
    <small class="text-red-600">{{ $errors->first($name) }}</small>
    @endif
</div>
{{-- <hr /> --}}
