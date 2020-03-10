<h1>{{ $picture->title }}</h1>
<form method="post" action="{{ route('pictures.destroy', $picture) }}">
    @csrf
    @method('delete')
    <img src="{{ route('pictures.show', $picture->id) }}"><br>
    <button type="submit">Destroy Me!</button>
</form>

