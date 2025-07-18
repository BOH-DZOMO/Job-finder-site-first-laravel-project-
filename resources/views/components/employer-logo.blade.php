@props(["employer","width"=> 90])
@php
    if ($width==42) {
        $classes = "rounded-4xl h-[42px] object-cover";
    }
    else {
        $classes = "rounded-xl h-[90px] object-cover";
    }
    
@endphp
{{-- <img src="https://picsum.photos/seed/{{ rand(0, 100000) }}/{{$width}}" alt="" class={{ $classes }}> --}}


<img src="{{ asset('storage/' .$employer->logo) }}" alt="" class="{{ $classes }}" width="{{ $width }}">

