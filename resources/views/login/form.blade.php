
<div class="mb-3">
    <label for="name" class="form-label @if ($errors->has('name')) text-danger @endif">Nombre:</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
    @error('name')
        <div class="form-text text-danger help">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label @if ($errors->has('email')) text-danger @endif">E-Mail:</label>
    <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}">
    @error('email')
        <div class="form-text text-danger help">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="password" class="form-label @if ($errors->has('password')) text-danger @endif">Contraseña:</label>
    <input type="password" class="form-control" name="password" id="password" value="{{ old('password') }}">
    @error('password')
        <div class="form-text text-danger help">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label for="password_confirmation" class="form-label @if ($errors->has('password_confirmation')) text-danger @endif">Confirmar contraseña:</label>
    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="">
    @error('password_confirmation')
        <div class="form-text text-danger help">{{ $message }}</div>
    @enderror
</div>