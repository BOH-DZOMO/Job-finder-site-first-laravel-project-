<x-app-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs">
        <x-forms.input name="title" label="Title" placeholder="CEO"></x-forms.input>
        <x-forms.input name="salary" label="Salary" placeholder="500,000 XAF"></x-forms.input>
        <x-forms.input name="location" label="Location" placeholder="Yaounde"></x-forms.input>
         <x-forms.select label="Work Location" name="work_location">
            <option value="" selected>Select an Option</option>
            <option value="On-Site">On-Site</option>
            <option value="Remote">Remote</option>
        </x-forms.select>
        <x-forms.select label="Schedule" name="schedule">
            <option value="" selected>Select an Option</option>
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
        </x-forms.select>
        <x-forms.checkbox label="Feature (Costs Extra)" name="featured">

        </x-forms.checkbox>
        <x-forms.input name="url" label="URL" placeholder="https://acne.com/jobs/ceo-wanted"></x-forms.input>
        <x-forms.input name="tags" label="Tags (Space seperated)" placeholder="laracast, devops, education"></x-forms.input>
        

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form> 
</x-app-layout>
