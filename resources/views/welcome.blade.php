<x-layout>
    HOME PAGE 

    <ul>
        @foreach($jobs as $job)
            <li>
                {{ $job->title - $job->salary }}
            </li>
        @endforeach
    </ul>
</x-layout>