@props(["job"])
<x-panel class="gap-x-6">
    <div>
        <x-employer-logo :employer="$job->employer"></x-employer-logo>

    </div>
    <div class="flex-1 flex flex-col">
        <a class="self-start text-sm text-gray-400" href="#">{{$job->employer->name}}</a>
        <h3 class="text-xl font-bold mt-3  group-hover:text-blue-800 transition-colors: duration-300"><a href="{{ $job->url }}" target="_blank">{{$job->title}}</a></h3>
        <p class="text-sm font-bold text-gray-400 mt-auto">{{$job->schedule." - From ".$job->salary}}</p>
    </div>

    <div class="flex flex-col">
        <div>
            @foreach ($job->tags as $tag )
        <x-tag  :tag="$tag" />         
        @endforeach
        </div>
        <div class="mt-auto space-x-2 flex justify-around items-center">
            <p class="text-center text-sm font-bold text-gray-400  ">{{$job->work_location}}</p>
            <p class="text-center text-sm font-bold text-gray-400 ">{{$job->location}}</p>
        </div>
        
    </div>
</x-panel>
