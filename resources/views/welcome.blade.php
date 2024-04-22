<x-layout>
    HOME PAGE 

    <ul>
        @foreach($jobs as $job)
            <li>
                {{ $job->title}}  - pays {{ $job->salary }} per year.
            </li>
        @endforeach
    </ul>

    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>