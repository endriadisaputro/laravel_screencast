@csrf
<div class="w-full mb-5">
    <x-label for="name" :value="__('Name')" />
    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
    @error('name')
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
<div class="w-full mb-5">
    <x-label for="price" :value="__('Price')" />
    <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('name')" required />
    @error('price')
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
<div class="w-full mb-5">
    <x-label for="description" :value="__('Description')" />
    <x-textarea name="description" id="description">{{ old('description') }}</x-textarea>
    @error('description')
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
<div class="w-full mb-5">
    <input type="file" name="thumbnail" id="thumbnail">
    @error('thumbnail')
    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
    @enderror
</div>
<x-button>{{ $submit }}</x-button>