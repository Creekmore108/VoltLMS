<?php

use Livewire\Volt\Component;
use function Livewire\Volt\{mount};
use App\Models\Course;
use App\Models\Episode;

new class extends Component {

    public $theCourse;
    // public $title;
    // public $description;
    // public $tagline;
    // public $episodes;


    public function mount(Course $course)
    {
        $this->theCourse = Course::find($course['id'])->load('episodes');
        // dd($this->theCourse);
    }
}; ?>

<div class="bg-slate-200 border rounded-lg p-4">
    <div class="bg-white text-sm p-4 rounded-lg border">
    {{ $this->theCourse->title }}
        <br>
    {{ $this->theCourse->tagline }}
    <div class="flex items-center gap-2">
        {{ $theCourse->episodes->count() }} episodes<br>
        <span class="inline-flex items-center align-middle gap-2">
            <x-heroicon-o-clock />
            {{ $theCourse->episodes->sum('length_in_minutes') }}
            min.
        </span>
        <br>
        <span class="inline-flex items-center align-middle gap-2">
            <x-heroicon-o-calendar />
            {{ $theCourse->created_at->diffForHumans() }}
        </span>
    </div>
</div>
<div class="bg-white text-sm p-4 rounded-lg border">
    {{ $this->theCourse->description }}
</div>
<div class="bg-white text-sm p-4 rounded-lg border">
    Episodes:
    @foreach ($this->theCourse->episodes as $episode)
    <div class="border rounded-lg mb-4">
        <div class="flex items-center gap-2 p-4">
            <a class="font-bold text-2xl" href="/course/{{ $theCourse->id}}/episode/{{$episode->id}}">
        <x-heroicon-o-play-circle />
        {{ $episode->title}}<br>
        </a>
        <x-heroicon-o-clock />
        {{ $episode->length_in_minutes }} min.
        </div>

    </div>
    @endforeach
</div>

</div>
