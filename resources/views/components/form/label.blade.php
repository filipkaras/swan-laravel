@props(['name'])

<label class="form-label" for="{{ $name }}">{{ ucwords(str_replace('_', ' ', $name)) }}</label>
