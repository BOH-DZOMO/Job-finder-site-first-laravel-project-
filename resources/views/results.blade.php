<x-app-layout>
    <x-page-heading>Results</x-page-heading>
    <div class="space-y-6">
        @foreach ($jobs as $job)
            <x-job-card-wide :job="$job" />
        @endforeach
    </div>
</x-app-layout>
