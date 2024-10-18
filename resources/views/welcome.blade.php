<x-landing-layout>
    <div class="max-w-md mx-auto">
        <img src="{{ asset('images/notmichal.png') }}" alt="Michal Unfiltered" class="w-32 h-32 rounded-full mx-auto">
        <h1 class="mt-4 text-5xl font-semibold text-center mx-auto">Not the version you see on LinkedIn</h1>
        <p class="mt-4 text-center">
            Tech, startups, and the occasional dad joke. Honest, unfiltered, and a little messy. Building, failing, and
            learning in public.
        </p>
    </div>

    <div class="flex justify-center mt-12">
        <x-dad-joke :joke="$joke" />
    </div>
</x-landing-layout>
