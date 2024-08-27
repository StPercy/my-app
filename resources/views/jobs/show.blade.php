</html><x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job->title }}</h2>  
    <!-- Access via $job['title'] as array keys, but $job->title as property is more common-->

    <p>
        This job pays {{ $job->salary }} per year.
    </p>

    <p class="mt-6">
        <x-button href="/jobs/{{ $job['id'] }}/edit">Edit Job</x-button> <!-- Access via $job->id as property -->
    </p>
</x-layout>