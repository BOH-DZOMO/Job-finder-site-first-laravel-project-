<x-app-layout>
    <x-page-heading>Log In</x-page-heading>
    <x-forms.form method="POST" action="/login">
        <x-forms.input label="Email" name="email" type="email" />
        <x-forms.input label="Password" name="password" type="password" />

        <x-forms.divider></x-forms.divider>
        <a href="{{ url('/auth/google/redirect') }}" 
   class="inline-flex items-center px-4 py-2 bg-blue-600 text-white rounded shadow hover:bg-blue-700">
    <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg"
     alt="Google logo"
     style="width: 20px; height: 20px; margin-right: 10px;">
    Sign up with Google
</a>

        <x-forms.divider></x-forms.divider>
        <x-forms.button>Log in</x-forms.button>
    </x-forms.form>

</x-app-layout>
