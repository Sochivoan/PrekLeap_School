
@foreach ($questions as $question)
        <p>Question : {{$question->question }}</p> <br>
        @foreach ($answers as $answer)
            @if ($question->id === $answer->q_id)
                <p>Answer : {{$answer->answer}}</p> <br>
            @endif
        @endforeach
@endforeach
