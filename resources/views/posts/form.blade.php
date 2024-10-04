<div class="mb-3">
    <label for="title" class="form-label @if ($errors->has('title')) text-danger @endif">Titulo</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $posts->title) }}">
    @error('title')
        <div class="form-text text-danger help">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="body" class="form-label @if ($errors->has('body')) text-danger @endif">Contenido</label>
    <textarea class="form-control" name="body" id="body" rows="4">{{ old('body', $posts->body) }}</textarea><br>
    @error('body')
        <div class="form-text text-danger help">{{ $message }}&nbsp;<i class="bi bi-exclamation-diamond-fill"></i></div>
    @enderror
</div>
