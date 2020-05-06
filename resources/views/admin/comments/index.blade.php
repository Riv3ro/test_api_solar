@extends('layouts.admin')

@section('header')
@include('admin._common._header')
@endsection

@section('content')
<main role="main" class="flex-shrink-0 bg-light">
    <div class="container mt-4">
        <div class="row">
            <!-- content -->
            <div id="comments" class="col-md-8">
                @if ($comments->isNotEmpty())
                <div class="row">
                    <ul>
                        @foreach($comments as $comment)
                        <li>
                            @include('admin.comments._comment', ['comment' => $comment])
                        </li>
                        @if($comment->answers->isNotEmpty())
                        <ul>
                            @foreach ($comment->answers as $commentAnswer)
                            @include('admin.comments._answers', ['comment_answer' => $commentAnswer])
                            @endforeach
                        </ul>
                        @endif
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            <!-- /content  -->

            <!-- aside -->
            <div class="col-md-4">
                @include('admin._common._aside')
            </div>
            <!-- /aside -->

        </div>

        <!-- pagination -->
        <div class="text-left">
            <hr class="my-4">
            {{ $comments->links() }}
        </div>
        <!-- /pagination -->
    </div>
    @endsection

    @section('footer')
    @include('admin._common._footer')
    @endsection
</main>