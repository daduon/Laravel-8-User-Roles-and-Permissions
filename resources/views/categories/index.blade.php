@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">
        <h2>Posts</h2>
        <div class="lead">
            <a href="{{ route('posts.create') }}" class="btn btn-primary btn-sm float-right">Add post</a>
        </div>
        
        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
          <tr>
             <th width="1%">No</th>
             <th>Name</th>
             <th width="3%" colspan="3">Action</th>
          </tr>
        </table>

        <div class="d-flex">
            {!! $posts->links() !!}
        </div>

    </div>
@endsection