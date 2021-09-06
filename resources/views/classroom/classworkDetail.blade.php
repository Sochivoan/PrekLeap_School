<h1>{{ $classwork->title }}</h1>
<h2>{{ $classwork->instruction }}</h2>
<form action="{{ route('classwork.store') }}" method="POST">
    @csrf
    @foreach ($classworkDetail as $eachQuestion)
        <p>{{ $eachQuestion->question }}</p>
        <input name="questionID[]" type="hidden" value="{{ $eachQuestion->id }}">
        <input type="text" name="answer[]" placeholder="answer here"> <br> <br>
    @endforeach
    <input type="submit" value="submit" class="btn btn-success">
</form>