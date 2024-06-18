@props(['job'])

<x-panel class="flex gap-x-6">
    <div>
        <x-employer-logo></x-employer-logo>
    </div>

    <div class="flex-1 flex flex-col">
        <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

        <div class="py-1 font-bold">
            <h3 class="font-bold text-lg mt-3 group-hover:text-blue-600 text-xl font-bol">
                <a href="{{ $job->url }}" target="_blank">
                    {{ $job->title }}
                </a>
            </h3>
            <p class="text-sm text-gray-400 mt-4">{{ $job->salary }}</p>
        </div>
    </div>

    <div>

        @foreach ($job->tags as $tag)
            <x-tag :$tag />
        @endforeach

    </div>
</x-panel>
