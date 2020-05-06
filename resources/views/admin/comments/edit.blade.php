@extends('layouts.admin')

@section('header')
@include('admin._common._header')
@endsection

@section('content')
<main role="main" class="flex-shrink-0 bg-light">
    <div class="container mt-4">
        <div class="row">

            <!-- content -->
            <div class="col-md-8">
                <!-- form -->
                <div class="mt-10 mb-4" style="font-size:21px; font-weight:500;">Редактированиие комментария</div>
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <div class="card-text">
                            <form action="{{ route('admin.comments.update', $comment) }}" method="POST">
                                @csrf
                                @method('patch')
                                <div class="form-group">
                                    <label>Автор</label>
                                    <input type="text" name="author" value="{{ old('author', $comment->author) }}" class="form-control @error('author') is-invalid @enderror" placeholder="Автор">
                                    @error('author')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Комментарий</label>
                                    <textarea name="text" class="form-control @error('text') is-invalid @enderror" rows="5">{{ old('text', $comment->text) }}</textarea>
                                    @error('text')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" name="button" class="btn btn btn-outline-primary">Редактировать</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /form -->
            </div>
            <!-- content -->

            <!-- aside -->
            <div class="col-md-4">
                @include('admin._common._aside')
            </div>
            <!-- /aside -->

        </div>

    </div>
    @endsection

    @section('footer')
    @include('admin._common._footer')
    @endsection
</main>