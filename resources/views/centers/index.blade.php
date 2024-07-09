<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
@extends('layouts.panel')
@section('title', 'Center')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Centros</h3>
                        <a href="{{ route('centers.create') }}" class="btn btn-primary">
                            <i class="fas fa-plus"></i> Nuevo centro
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
                                <th scope="col"><i class="fas fa-heading"></i> Direccion</th>
                                <th scope="col"><i class="fas fa-list-ol"></i> Slug</th>
                                <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de Registro</th>
                                <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($centers as $center)
                                <tr>
                                    <td>
                                        <span class="badge badge-pill badge-primary"> {{ $center->id }} </span>
                                    </td>
                                    <td>
                                        {{ $center->name }}
                                    </td>

                                    <td>
                                        {{ $center->description }}
                                    </td>

                                    <td>
                                        {{ $center->address }}
                                    </td>

                                    <td>
                                        {{ $center->slug }}
                                    </td>

                                    <td>
                                        {{ $center->created_at }}
                                    </td>
                                    <td style="white-space: nowrap; display: flex; align-items: center;">
                                        <a href="{{ route('centers.show', $center) }}" class="btn btn-primary btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-eye"></i> Mostrar
                                        </a>
                                        <a href="{{ route('centers.edit', $center) }}" class="btn btn-info btn-sm"
                                            style="margin-right: 5px;">
                                            <i class="fas fa-edit"></i> Editar
                                        </a>
                                        <form action="{{ route('centers.destroy', $center->id) }}" method="POST"
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
                        {{ $centers->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
