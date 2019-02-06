@extends('layout.app')

@section('body')
    <div class="container p-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form action="{{ route('gists.update', $gist) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="card-body card-body-test">
                            <h2 class="text-uppercase mt-5">Edit <b>#{{ $gist->id }}</b></h2>
                            <hr>
                            <h3>Name</h3>
                            <input type="text" class="form-control" name="name" value="{{ $gist->name }}">
                            <h3>Content</h3>
                            <textarea name="content" id="content" class="form-control">{{ $gist->content }}</textarea>
                        </div>
                        <div class="card-footer text-center justify-content-center">
                            <button class="btn btn-outline-success btn-lg pl-5 pr-5">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
          var myCodeMirror = CodeMirror.fromTextArea(document.getElementById('content'), {
            lineNumbers: true,
            readOnly: false,
            theme: 'monokai',
            mode: 'ruby',
            lineWrapping: true,
            styleActiveLine: true,
            matchBrackets: true,
            viewportMargin: Infinity
          });
        });
    </script>
@endsection
