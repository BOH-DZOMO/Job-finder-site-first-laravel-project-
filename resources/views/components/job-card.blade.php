@props(["job"])
<x-panel class="flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8 font-bold space-y-2">
        <h3 class="font-bold text-2xl group-hover:text-blue-800 transition-colors: duration-300"><a href="{{ $job->url }}" target="_blank">{{$job->title}}</a></h3>
        <p class="text-sm mt-4">{{$job->schedule." - From ".$job->salary}}</p>
        <p class="text-sm mt-4 text-white/50">{{$job->work_location." - From ".$job->location}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="space-x-1">
            @foreach ($job->tags as $tag )
            <x-tag size="small" :tag="$tag" />            
            @endforeach
        </div>
        <x-employer-logo :width="42" :employer="$job->employer"></x-employer-logo>
    </div>
</x-panel>
