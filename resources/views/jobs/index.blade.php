{{-- fix the recent job issue --}}
<x-app-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job </h1>
            {{-- <form action="" class="mt-6">
                <input type="text" name="" id="" placeholder="I'm looking for..."
                    class="rounded-xl px-5 py-4 bg-white/5 border-white/25 w-full max-w-xl focus:outline-none focus:ring-2 focus:ring-blue-800 border-2 focus:border-red-600">
            </form> --}}
            <x-forms.form action="/search" class="mt-6mm">
                <x-forms.input name="q" placeholder="Web Developer..."></x-forms.input>
            </x-forms.form>
        </section>
        <section class="pt-10">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-6">
                @foreach ($featuredJobs as $job )
                <x-job-card :job="$job" />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-2">
                @foreach ($tags as $tag )
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job )
                <x-job-card-wide :job="$job" /> 
                @endforeach
            </div>
        </section>
    </div>
</x-app-layout>
