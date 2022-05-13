<div class=" mr-2 mt-2 ">
    <div class="rounded-md shadow-sm ">
        <label class="block text-sm font-medium text-gray-700" for="{{ $name }}">
            {{ $label }}
            <select id="{{ $name }}" class="rounded-lg border-transparent flex-1 appearance-none border border-gray-400 w-full py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent " name="{{ $name }}">
                <option value="">Seleccione</option>
                @foreach($options as $key => $option)
                <option value="{{ $key }}">{{ $option }}</option>
                @endforeach
            </select>
        </label>

    </div>
</div>
