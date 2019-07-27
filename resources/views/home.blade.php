@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h1>Todas las tareas</h1>
                    <a href="taskRegister" class="btn btn-success">Agregar tareas</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">Id de usuario</th>
                            <th scope="col">Tareas</th>
                            <th scope="col">Eliminar</th>

                            </tr>
                        </thead>
                        <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <th scope="row">{{ $task->id }}</th>
                            <td>{{ $task->description }}</td>
                            <td>
                                <!-- <a href="task/{{ $task->id }}" class="btn btn-danger">Eliminar</a> -->
                                <!-- <form method="delete" action="http://localhost:8000/api/task/{{ $task->id }}">
                                    @ csrf
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form> -->
                                <form class="deleteForm" method="post" action="http://localhost:8000/api/task/{{$task->id}}">
                                    <input type="submit" class="btn btn-danger" />
                                </form>
                            </td>

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
