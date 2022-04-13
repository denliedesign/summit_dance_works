<div class="form-group my-4">
    <label for="ageGroup">Age Group</label>
    <input id="ageGroup" type="text" class="form-control" name="ageGroup" value="{{ old('ageGroup') ?? $lesson->ageGroup }}">
    <div>{{ $errors->first('ageGroup') }}</div>
</div>

<div class="form-group my-4">
    <label for="length">Class Length</label>
    <input id="length" type="text" class="form-control" name="length" value="{{ old('length') ?? $lesson->length }}">
    <div>{{ $errors->first('length') }}</div>
</div>

<div class="form-group my-4">
    <label for="name">Class Name</label>
    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') ?? $lesson->name }}">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group my-4">
    <label for="description">Class Description</label>
    <textarea name="description" cols="30" rows="10" class="form-control" id="lesson-textarea">{{ old('description') ?? $lesson->description }}</textarea>
    <div>{{ $errors->first('description') }}</div>
</div>

<div class="form-group my-4">
    <label for="kit">Infokit Link</label>
    <input id="kit" type="text" class="form-control" name="kit" value="{{ old('kit') ?? $lesson->kit }}">
    <div>{{ $errors->first('kit') }}</div>
</div>

<div class="form-group">
    <label for="photo">Image</label>
    <input type="file" class="form-control-file" name="photo">
    <div>{{ $errors->first('photo') }}</div>
</div>

@csrf
