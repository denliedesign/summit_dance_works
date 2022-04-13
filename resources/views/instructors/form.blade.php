<div class="container py-5 mb-5 bg-teal text-white rounded shadow font-syne" style="font-size: 30px;">

<!-- FORM -->
<form action="/instructors" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" name="image">
{{--            <div>{{ $errors->first('image') }}</div>--}}
        </div>
    </div>

    <div class="form-group">
        <label for="firstName">First Name</label>
        <input id="firstName" type="text" class="form-control" name="firstName"
               value="{{ old('firstName', $instructor->firstName) }}">
{{--        <div>{{ $errors->first('firstName') }}</div>--}}
    </div>

    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input id="lastName" type="text" class="form-control" name="lastName"
               value="{{ old('lastName', $instructor->lastName) }}">
{{--        <div>{{ $errors->first('lastName') }}</div>--}}
    </div>

    <div class="form-group">
        <label for="title">Title</label>
        <input id="title" type="text" class="form-control" name="title"
               value="{{ old('title', $instructor->title) }}">
{{--        <div>{{ $errors->first('title') }}</div>--}}
    </div>

    <div class="form-group">
        <label for="bio">Bio</label>
        <textarea name="bio" cols="30" rows="10" class="form-control"
                  id="text-textarea">{{ old('bio', $instructor->bio) }}</textarea>
{{--        <div>{{ $errors->first('bio') }}</div>--}}
    </div>

    @csrf
    <div class="d-flex justify-content-around mt-2">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
<!-- END FORM -->

</div>
