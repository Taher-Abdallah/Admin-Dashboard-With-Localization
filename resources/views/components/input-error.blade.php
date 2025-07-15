@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-danger']) }}>
        @foreach ((array) $messages as $message)
            <li class="text-sm text-danger">{{ $message }}</li>
        @endforeach
    </ul>
@endif
