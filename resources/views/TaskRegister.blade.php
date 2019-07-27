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

                    <!-- <form action="http://localhost:8000/api/task" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="id_user">User id</label>
                            <input type="text" name="id_user" class="form-control" id="id_user" placeholder="Enter user id">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" id="description" placeholder="Description">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> -->

                    <form method="post" action="http://localhost:8000/api/task">
                        <div class="form-group">
                            @csrf
                            <label for="name">Id del Usuario:</label>
                            <input type="text" class="form-control" name="id_user"/>
                        </div>
                        <div class="form-group">
                            <label for="price">Description de la tarea:</label>
                            <input type="text" class="form-control" name="description"/>
                        </div>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
