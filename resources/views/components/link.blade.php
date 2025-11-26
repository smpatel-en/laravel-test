@props(["active" => false, "type" => "a"])

@if ($type === "a")
    <a
        {{ $attributes }}
        class="{{ $active ? "underline" : "" }} text-blue-500"
    >
        {{ $slot }}
    </a>
@else
    <button
        {{ $attributes }}
        class="{{ $active ? "underline" : "" }} text-blue-500"
    >
        {{ $slot }}
    </button>
@endif
