<form wire:submit="save">
    <div class="mb-3">
        <label class="form-label">Usuario</label>
        <input type="email" wire:model="user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" @error('user') style="border-color: var(--bs-form-invalid-border-color);" @enderror>
        <div>@error('user') <div class="invalid-feedback" style="display:block;">{{ $message }}</div> @enderror</div>
    </div>
    <div class="mb-4">
        <label for="exampleInputPassword1" class="form-label">Clave</label>
        <input type="password" wire:model="password" class="form-control" id="exampleInputPassword1" @error('password') style="border-color: var(--bs-form-invalid-border-color);" @enderror>
        <div>@error('password') <div class="invalid-feedback" style="display:block;">{{ $message }}</div> @enderror</div>
    </div>
    <div class="d-flex align-items-center justify-content-between mb-4">
        <!-- <div class="form-check">
            <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label text-dark" for="flexCheckChecked">Remeber this Device</label>
        </div> -->
        <a class="text-primary fw-medium" href="/recuperar-clave">¿Olvidó su contraseña?</a>
    </div>
    <button class="btn btn-primary w-100 py-8 mb-4 rounded-2">Acceder</button>
    <!-- <div class="d-flex align-items-center justify-content-center"><p class="fs-4 mb-0 fw-medium">New to Modernize?</p><a class="text-primary fw-medium ms-2" href="./authentication-register.html">Create an account</a></div> -->
    @if ($successMessage)
    <div class="alert {{ $class }} alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        <div class="{{ $icon }}" role="status">
                        <span class="visually-hidden">Loading...</span>
                      </div> &nbsp; &nbsp; {{ $successMessage }}
    </div>
@endif
</form>