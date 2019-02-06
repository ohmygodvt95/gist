@extends('layout.app')

@section('body')
    <div class="container p-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body card-body-test">
                        <h3 class="text-uppercase mt-5">{{ $gist->name }}</h3>
                        <h3><a href="{{ route('gists.show', $gist) }}">{{ route('gists.show', $gist) }}</a>
                            <button class="btn btn-outline-primary btn-sm btn-copy" data-clipboard-text="{{ route('gists.show', $gist) }}">Copy</button></h3>
                        <small clasS="text-muted">{{ $gist->updated_at->diffForHumans() }}</small>
                        <hr>
                        <div>
                            <pre><code class="ruby">{{ $gist->content }}</code></pre>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('gists.edit', $gist) }}" class="btn btn-outline-success pull-right">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
      $(document).ready(function () {
        hljs.initHighlightingOnLoad();
        new ClipboardJS('.btn-copy');
      });
    </script>
@endsection
