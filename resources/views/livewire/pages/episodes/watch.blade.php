<?php

use Livewire\Volt\Component;
use Livewire\Volt\{mount};
use App\Models\Course;
use App\Models\Episode;

new class extends Component {


    public $theEpisode;

    public function mount(Course $course,Episode $episode)
    {
        $this->theCourse = $course;

        if(isset($episode->id)){
            $this->theEpisode = $episode;
        } else {
            $this->theEpisode = $course->episodes->first();
        }
        // dd($this->theEpisode);
        // $this->theEpisode = Episode::find($episode['id']);
    }

}; ?>

<div>
    {{ $this->theEpisode->title }}
    {{ $this->theEpisode->length_in_minutes }} min.
    {{ $this->theEpisode->description }}
    {{ $this->theEpisode->vimeo_id }}

    <div class="relative pt-[56.25%]">
        <iframe src="https://player.vimeo.com/video/{{ $this->theEpisode->vimeo_id }}"
            frameborder="0"
            allow="autoplay; fullscreen; picture-in-picture"
            class="absolute top-0 left-0 w-full h-full"
        ></iframe>
    </div>


</div>
