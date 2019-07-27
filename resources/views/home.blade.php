@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">User</th>
                            <th scope="col">Task</th>

                            </tr>
                        </thead>
                        <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <th scope="row">{{ $task->id }}</th>
                            <td>{{ $task->description }}</td>

                        <tr>
                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
