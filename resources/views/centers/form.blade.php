<h6 class="heading-small text-muted mb-4">Datos del Centro</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Agregar un Nombre" value="{{ old('name', $center->name) }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="description">Descripcion</label>
            <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Agregar una descripcion" value="{{ old('description', $center->description) }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="address">Direccion</label>
            <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Agregar una Direccion" value="{{ old('address', $center->address) }}">
        </div>
    </div>
</div>

<hr class="my-4" />
<!-- Contenido -->
<h6 class="heading-small text-muted mb-4">Guardar</h6>
<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Registrar
        </button>
    </div>
</div>
