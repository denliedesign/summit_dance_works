<div class="container">

    @can('update', \App\Lesson::class)
        <p class="text-center"><a href="/lessons/create">Create New Lesson</a></p>
    @endcan

    <div class="separate-new-group">
        <h2 class="font-weight-bold">2 and under “Intro To Dance” Program</h2>
        <div class="row">
            @foreach($lessons as $lesson)
                @if($lesson->ageGroup == "1")
                    @include('lesson-info')
                @endif
            @endforeach
        </div>
    </div>
    <div class="separate-new-group">
        <h2 class="font-weight-bold">3 Yr Old & Pre-k “Kidlets” Program</h2>
        @foreach($lessons as $lesson)
            @if($lesson->ageGroup == "2")
                @include('lesson-info')
            @endif
        @endforeach
    </div>
    <div class="separate-new-group">
        <h2 class="font-weight-bold">Kindergarten & 1st Grade “Kidance” Program</h2>
        @foreach($lessons as $lesson)
            @if($lesson->ageGroup == "3")
                @include('lesson-info')
            @endif
        @endforeach
    </div>
    <div class="separate-new-group">
        <h2 class="font-weight-bold">2nd-4th Grade “Beginning Building” Program</h2>
        @foreach($lessons as $lesson)
            @if($lesson->ageGroup == "4")
                @include('lesson-info')
            @endif
        @endforeach
    </div>
    <div class="separate-new-group">
        <h2 class="font-weight-bold">5th Grade & Older “Focus Rising” Program</h2>
        @foreach($lessons as $lesson)
            @if($lesson->ageGroup == "5")
                @include('lesson-info')
            @endif
        @endforeach
    </div>
    <div class="separate-new-group">
        <h2 class="font-weight-bold">Graded Technique Program</h2>
        @foreach($lessons as $lesson)
            @if($lesson->ageGroup == "6")
                @include('lesson-info')
            @endif
        @endforeach
    </div>

</div>
