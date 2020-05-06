<li>
    @include('admin.comments._comment', ['comment' => $comment])
</li>
@if ($comment_answer->answers->isNotEmpty())
<ul>
    @foreach ($comment_answer->answers as $commentAnswer)
    @include('admin.comments._answers', ['comment_answer' => $commentAnswer])
    @endforeach
</ul>
@endif