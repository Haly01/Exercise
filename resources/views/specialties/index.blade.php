<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
</div>
@extends('layouts.panel')
@section('title', 'Specialty')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Centros</h3>
                        <a href="{{ route('specialty.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nueva Especialidad
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
                                <th scope="col"><i class="fas fa-heading"></i> Tipo de Especialidad</th>
                                <th scope="col"><i class="fas fa-list-ol"></i> Slug</th>
                                <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($specialties as $specialty)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary"> {{ $specialty->id }} </span>
                                    </td>
                                    <td>
                                        {{ $specialty->name }}
                                    </td>

                                    <td>
                                        {{ $specialty->description }}
                                    </td>

                                    <td>
                                        {{ $specialty->type_specialty }}
                                    </td>

                                    <td>
                                        {{ $specialty->slug }}
                                    </td>

                                    <td>
                                        {{ $specialty->created_at }}
                                    </td>
                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('specialties.show', $specialty) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('specialties.edit', $specialty) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('specialties.destroy', $specialty->id) }}" method="POST"
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
                        {{ $specialties->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
