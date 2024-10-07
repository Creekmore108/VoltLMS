<?php

use Livewire\Volt\Component;
use App\Models\Course;

new class extends Component {
    public function with(): array
    {
        return [
            'courses' => Course::paginate(3),
        ];
    }
}; ?>

<div class="bg-white border">
    <div class="mx-auto max-w-7xl py-4 sm:px-32 sm:py-32 lg:px-8">
        <div class="text-center">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-6xl">Start Your Journey Into Learning
                About Trusts</h1>
            <p class="mt-6 mb-6 text-lg leading-8 text-gray-600">Dive into our library of courses designed for all skill
                levels..</p>
        </div>

        <div
            class="relative overflow-hidden bg-white px-2 pt-16 shadow-2xl sm:rounded-3xl sm:px-16 md:pt-24 lg:flex lg:gap-x-2 lg:px-2 lg:pt-0">

            <div class="text-gray-600 text-sm  w-full">
                <div class="bg-white   py-3 flex  w-full border-b">
                    {{-- gap about search --}}
                </div>

                <nav class="bg-white  px-4 py-2 flex items-center justify-between w-full border-b">
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <input type="text" class="ml-10 rounded bg-white text-black w-72 px-3 py-1 "
                                placeholder="Search...">
                            <div class="absolute top-0 right-0">
                                <div class="px-2 py-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="black" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="courses-container group relative flex items-top justify-evenly px-8 gap-4 py-4 w-full mb-4 mt-4">
                    @foreach ($courses as $course)
                        <div class="bg-white px-2 py-5 w-1/3 sm:px-6 border rounded-lg ">

                                <div class="min-w-0 flex mt-4 mb-4">
                                    <p class=" text-gray-800">
                                        {{ $course->title }}
                                    </p>
                                </div><div class="mb-4">
                                    <p class=" font-thin text-sm text-gray-700/70">
                                        {{ $course->tagline }}
                                    </p>
                                </div>
                                <div class="mb-4">
                                    <div class="items-evenly">
                                        <span class="inline-flex ">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h1.5C5.496 19.5 6 18.996 6 18.375m-3.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-1.5A1.125 1.125 0 0 1 18 18.375M20.625 4.5H3.375m17.25 0c.621 0 1.125.504 1.125 1.125M20.625 4.5h-1.5C18.504 4.5 18 5.004 18 5.625m3.75 0v1.5c0 .621-.504 1.125-1.125 1.125M3.375 4.5c-.621 0-1.125.504-1.125 1.125M3.375 4.5h1.5C5.496 4.5 6 5.004 6 5.625m-3.75 0v1.5c0 .621.504 1.125 1.125 1.125m0 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m1.5-3.75C5.496 8.25 6 7.746 6 7.125v-1.5M4.875 8.25C5.496 8.25 6 8.754 6 9.375v1.5m0-5.25v5.25m0-5.25C6 5.004 6.504 4.5 7.125 4.5h9.75c.621 0 1.125.504 1.125 1.125m1.125 2.625h1.5m-1.5 0A1.125 1.125 0 0 1 18 7.125v-1.5m1.125 2.625c-.621 0-1.125.504-1.125 1.125v1.5m2.625-2.625c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125M18 5.625v5.25M7.125 12h9.75m-9.75 0A1.125 1.125 0 0 1 6 10.875M7.125 12C6.504 12 6 12.504 6 13.125m0-2.25C6 11.496 5.496 12 4.875 12M18 10.875c0 .621-.504 1.125-1.125 1.125M18 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m-12 5.25v-5.25m0 5.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125m-12 0v-1.5c0-.621-.504-1.125-1.125-1.125M18 18.375v-5.25m0 5.25v-1.5c0-.621.504-1.125 1.125-1.125M18 13.125v1.5c0 .621.504 1.125 1.125 1.125M18 13.125c0-.621.504-1.125 1.125-1.125M6 13.125v1.5c0 .621-.504 1.125-1.125 1.125M6 13.125C6 12.504 5.496 12 4.875 12m-1.5 0h1.5m-1.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M19.125 12h1.5m0 0c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h1.5m14.25 0h1.5" />
                                          </svg>
                                          <div class="text-gray-400 text-xs ml-2 mr-6">{{ $course->id}} episodes</div>

                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-5 w-5 text-gray-400">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                          </svg>
                                          <div class="text-gray-400 text-xs ml-2">{{ $course->id}} in minutes </div>
                                        </span>
                                    </div>
                                </div>
                                <div class="relative mt-8">
                                    {{-- href="{{ route('parties.show', $listeningParty) }}" --}}
                                    <button onclick="window.location.href='/courses'" class="bg-blue-500 inline-flex hover:bg-blue-700 text-xs text-center items-center justify-center w-full text-white font-bold h-8  px-2 border border-blue-700 rounded-lg">
                                        Start watching
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                          </svg>
                                      </button>
                                </div>
                        </div>
                    @endforeach
                </div> <!-- end of courses-container -->
                <nav class="bg-white  px-4 py-3 flex items-center justify-between w-full border-t">
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <div>{{ $courses->links() }} </div>

                        </div>
                    </div>

                </nav>

            </div>
        </div>

    </div>
</div>
