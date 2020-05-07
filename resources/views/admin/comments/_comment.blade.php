                            <div class="col-md-12">
                                <div class="card mb-4 shadow-sm">
                                    <div class="card-header">
                                        <span class="pl-2">{{ $comment->author }}</span>
                                        <span class="pl-2"><small class="text-muted"><i class="far fa-clock"></i> {{ $comment->created_at }}</small></span>
                                    </div>
                                    <div class="card-body">
                                        <div class="card-text">
                                            {{ $comment->text }}
                                        </div>
                                        <div class="float-right mt-3">
                                            <button type="submit" class="btn btn-outline-danger text-right" formaction="{{ route('admin.comments.destroy', $comment->id) }}" form="delete_comment_{{ $comment->id }}">Удалить</button>
                                            <form method="post" id="delete_comment_{{ $comment->id }}">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{ $comment->id }}">
                                            </form>
                                        </div>
                                        <div class="float-right mt-3 mr-1">
                                            <a href="{{ route('admin.comments.edit', $comment->id) }}" class="btn btn-outline-primary text-right"> Редактировать </a>
                                        </div>


                                    </div>
                                </div>
                            </div>