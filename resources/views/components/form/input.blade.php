@props(['name'])

<x-form.field>
    <x-form.label name="{{ $name }}"/>

    <input
        type="text"
        name="{{ $name }}"
        id="{{ $name }}"
        class="form-control"
        {{ $attributes(['value' => old($name)]) }}
    />

    <x-form.error name="{{ $name }}"/>
</x-form.field>
