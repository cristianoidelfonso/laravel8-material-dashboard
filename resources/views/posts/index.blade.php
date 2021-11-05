@extends('layouts.app', ['activePage' => 'posts', 'titlePage' => __('CRUD de Post')])

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Tabela Simples</h4>
                        <p class="card-category">Listagem de posts</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary">Criar Post</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>ID</th>
                                    <th>TITLE</th>
                                    <th>CONTENT</th>
                                    <th>CREATED</th>
                                    <th class="text-center">ACTIONS</th>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>{{ $post->id }}</td>
                                            <td>{{ $post->title }}</td>
                                            <td>{{ $post->content }}</td>
                                            <td>{{\Carbon\Carbon::parse($post->created_at)->format('d/m/Y')}}</td>
                                            <td class="text-center">
                                                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning"><i class="material-icons">edit</i></a>
                                                    <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
