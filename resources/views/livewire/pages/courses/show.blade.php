<?php

use Livewire\Volt\Component;
use App\Models\Course;

new class extends Component {
    public function with(): array
    {
        return [
            'courses' => Course::with('episodes')->get(),
        ];
        // dd($this->courses);
    }
}; ?>

<div class="bg-slate-200 border rounded-lg p-4">

    @foreach ($courses as $course)
        <div class="bg-white text-sm p-4 rounded-lg border">
            <span class="inline-flex items-center align-middle gap-2">
                <x-heroicon-o-film />
                <a class="font-bold text-2xl" href="{{ route('episodes.show', $course) }}">{{ $course->title }} </a>
            </span>
            <br>
            {{ $course->tagline }} <br>
            {{-- {{ $course->description}} <br> --}}
            <div class="flex items-center gap-2">
                {{ $course->episodes->count() }} episodes<br>
                <span class="inline-flex items-center align-middle gap-2">
                    <x-heroicon-o-clock />
                    {{ $course->episodes->sum('length_in_minutes') }}
                    min.
                </span>
                <br>
                <span class="inline-flex items-center align-middle gap-2">
                    <x-heroicon-o-calendar />
                    {{ $course->created_at->diffForHumans() }}
                </span>
            </div>
            {{-- <div>
                <x-button positive>Start Watching</x-button>
            </div> --}}
            <br>
        </div>
    @endforeach

</div>
