@extends('layout.app')

@section('body')
    <div class="position-relative overflow-hidden p-md-5 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Discover gists</h1>
            <p class="lead font-weight-normal">
                Gist: instantly share code, notes, and snippets.
                <br>
                With gists, you can share single files, parts of files, and full applications with other people. Directories can't be shared.
            </p>
            <a class="btn btn-outline-success btn-lg pl-5 pr-5" href="{{ route('gists.create') }}">Create</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>

    <div class="container p-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-uppercase p-4">
                        <h1 class="text-center ">Latest gists</h1>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Link</th>
                                <th>Updated at</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($gists as $gist)
                                <tr>
                                    <td><a href="{{ route('gists.show', $gist) }}">#{{ $gist->id }}</a></td>
                                    <td><a href="{{ route('gists.show', $gist) }}">{{ str_limit($gist->name, 50) }}</a></td>
                                    <td>                                        <button class="btn btn-outline-primary btn-sm btn-copy" data-clipboard-text="{{ route('gists.show', $gist) }}">Copy</button>
                                         <a href="{{ route('gists.show', $gist) }}">{{ route('gists.show', $gist) }} </a>
                                    </td>
                                    <td>{{ $gist->updated_at->diffForHumans() }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $gists->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
      new ClipboardJS('.btn-copy');
    </script>
@endsection
