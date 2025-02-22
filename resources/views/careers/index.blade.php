<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
</div>

@extends('layouts.panel')
@section('title', 'Career')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Centros</h3>
                        <a href="{{ route('careers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Carrera
                        </a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                                <th scope="col"><i class="fas fa-heading"></i> Nombre</th>
                                <th scope="col"><i class="fas fa-heading"></i> Descripcion</th>
                                <th scope="col"><i class="fas fa-heading"></i> Duracion</th>
                                <th scope="col"><i class="fas fa-list-ol"></i> Slug</th>
                                <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($careers as $career)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary"> {{ $career->id }} </span>
                                    </td>
                                    <td>
                                        {{ $career->name }}
                                    </td>

                                    <td>
                                        {{ $career->description }}
                                    </td>

                                    <td>
                                        {{ $career->duration }}
                                    </td>

                                    <td>
                                        {{ $career->slug }}
                                    </td>

                                    <td>
                                        {{ $career->created_at }}
                                    </td>
                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('careers.show', $career) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('careers.edit', $career) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('careers.destroy', $career->id) }}" method="POST"
                                            style="display: inline-block; margin: 0; display: flex; align-items: center;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i> Eliminar
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer py-4">
                    <nav aria-label="..." class="d-flex flex-wrap justify-content-center justify-content-lg-start">
                        {{ $career->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
