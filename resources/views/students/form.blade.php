<h6 class="heading-small text-muted mb-4">Datos del Estudiante</h6>
<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                    placeholder="Agregar un Nombre" value="{{ old('name', $student->name) }}">
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="last_name">Apellido</label>
            <input type="text" id="last_name" name="last_name" class="form-control form-control-alternative"
                placeholder="Agregar un Apellido" value="{{ old('last_name', $student->last_name) }}">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="age">Edad</label>
            <input type="number" id="age" name="age" class="form-control form-control-alternative"
                placeholder="Agregar una Edad" value="{{ old('age', $student->age) }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="gender">Genero</label>
            <input type="text" id="gender" name="gender" class="form-control form-control-alternative"
                placeholder="Agregar un Genero" value="{{ old('gender', $student->gender) }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="email">Correo Electronico</label>
            <input type="text" id="email" name="email" class="form-control form-control-alternative"
                placeholder="Agregar un Correo Electronico" value="{{ old('email', $student->email) }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="phone">Numero de Telefono</label>
            <input type="text" id="phone" name="phone" class="form-control form-control-alternative"
                placeholder="Agregar un Numero de Telefono" value="{{ old('phone', $student->phone) }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="address">Direccion</label>
            <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Agregar una Direccion" value="{{ old('address', $student->address) }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="marital_status">Estado Civil</label>
            <input type="text" id="marital_status" name="marital_status" class="form-control form-control-alternative"
                placeholder="Agregar un Estado Civil" value="{{ old('marital_status', $student->marital_status) }}">
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="form-group">
            <label class="form-control-label" for="identification_card">Cedula</label>
            <input type="text" id="identification_card" name="identification_card" class="form-control form-control-alternative"
                placeholder="Agregar una Cedula" value="{{ old('identification_card', $student->identification_card) }}">
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
