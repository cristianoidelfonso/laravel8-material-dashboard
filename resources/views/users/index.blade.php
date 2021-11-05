@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])

@section('content')

 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Usuários</h4>
                        <p class="card-category"> Aqui você pode gerenciar usuários</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="#" class="btn btn-sm btn-primary">Add user</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Email</th>
                                        <th>Data de criação</th>
                                        <th class="text-right">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{\Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</td>
                                            <td class="td-actions text-right">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="#" data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    {{-- <div class="ripple-container"></div> --}}
                                                </a>

                                                <a rel="tooltip" class="btn btn-danger btn-link" href="#" data-original-title="" title="">
                                                    <i class="material-icons">delete</i>
                                                    {{-- <div class="ripple-container"></div> --}}
                                                </a>
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
