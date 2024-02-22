<h2>Nieuw recept aanmaken</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/recipes">
    @csrf
    <input 
        id="title"
        name="title"
        type="text"
        placeholder="Titel"
        maxlength="255"
        value="{{ old('title') }}">
    <textarea
        id="instructions"
        name="instructions"
        placeholder="Instructies">{{ old('instructions') }}</textarea>
    <input
        id="external_url"
        name="external_url"
        type="string"
        placeholder="Externe link"
        maxlength="255"
        value="{{ old('external_url') }}">
    <label for="tested">Getest?</label>
    <input
        id="tested"
        name="tested"
        type="checkbox"
        value="1"
        {{ old('tested') ? 'checked="checked"' : '' }}>
    <input
        type="submit"
        value="Aanmaken"/>
</form>