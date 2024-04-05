@extends('tareas')

@section('content')
  <div class="container w-25 border p-4">
  <form action="{{ route('todos')}}" method="POST">
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{session('success')}}<h6>        
    @endif
    @error('Nombre')
        <h6 class="alert alert-danger">{{$message}}<h6>  
    @enderror
    <div class="mb-3">
    <label for="Nombre" class="form-label">Agregar Tarea</label>
    <input type="text" name="Nombre" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Crear nueva tarea</button>
</form>
@foreach ($todos as $todo)
<div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('todos-edit', ['id' => $todo->id]) }}">{{ $todo->Nombre }}</a>
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('todos-destroy', [$todo->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
            
        @endforeach
  </div>
@endsection