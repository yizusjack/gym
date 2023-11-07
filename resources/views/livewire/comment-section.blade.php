<div>
    @foreach ($comments as $comment)
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <tbody>
                        <br>
                        <tr>
                            <td>Usuario: {{ $comment->user->name }}</td>
                        </tr>
                        <tr>
                            @if ($editingCommentId === $comment->id)
                                <td>
                                    <textarea wire:model="editedComments.{{ $comment->id }}" class="form-control" rows="4"></textarea>
                                </td>
                            @else
                                <td>{{ $comment->comment_text }}</td>
                            @endif
                        </tr>
                        <tr>
                            <td>{{ $comment->created_at }}</td>
                            @if (auth()->id() === $comment->user->id)
                                <td>
                                    @if ($editingCommentId === $comment->id)
                                        <button wire:click="updateComment({{ $comment->id }})" class="btn btn-success">Guardar</button>
                                    @else
                                        <button wire:click="editComment({{ $comment->id }})" class="btn btn-primary">Editar</button>
                                        <button wire:click="deleteComment({{ $comment->id }})" class="btn btn-danger">Eliminar</button>
                                    @endif
                                </td>
                            @endif
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach

    <form wire:submit.prevent="submitComment">
        @csrf
        <div class="form-group">
            <textarea wire:model="content" class="form-control" rows="4" placeholder="Añadir comentario"></textarea>
            @error('content') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <br>
        <div class="row">
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </div>
    </form>
</div>