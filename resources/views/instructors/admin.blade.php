@can('update', \App\Instructor::class)

    <div class="d-flex d-inline">
        <div class="mx-2">
            <a class="btn btn-secondary" href="/instructors/{{ $instructor->id }}/edit">Edit</a>
        </div>
        <div class="mx-2">
            <form action="/instructors/{{ $instructor->id }}" method="POST">
                @method('DELETE')
                @csrf

                <button class="btn btn-danger ml-4" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>

@endcan
