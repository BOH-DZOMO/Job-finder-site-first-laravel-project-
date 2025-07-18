@php
    $classes = "p-4 bg-white/5 rounded-2xl flex border border-transparent hover:border-blue-800 group transition-colors: duration-300"
@endphp
<div {{ $attributes->merge(["class"=>$classes])}}>
  {{ $slot }}
</div>