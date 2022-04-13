<div class="col-sm">
    <img src="{{ asset('/storage/' . $lesson->photo) }}" alt="dance class photo" class="img-fluid">
    <p class="lead mb-0">{{ $lesson->name }}</p>
    <p>{{ $lesson->length }}</p>
    <p>{{ $lesson->description }}</p>
    <p>{{ $lesson->kit }}</p>


    @can('update', \App\Lesson::class)
        <div class="mb-2 d-flex align-items-center">
            <div><a href="/lessons/{{ $lesson->id }}/edit">Edit Lesson</a></div>
            <div class="mx-3">
                <form action="/lessons/{{ $lesson->id }}" method="POST">
                    @method('DELETE')
                    @csrf

                    <button class="btn btn-danger ml-4" type="submit">Delete</button>
                </form>
            </div>
        </div>
        <hr>
    @endcan
</div>
