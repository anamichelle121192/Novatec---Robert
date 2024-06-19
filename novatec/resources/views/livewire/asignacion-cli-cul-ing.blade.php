<div>
    <!-- <nav class="navbar navbar-expand-lg bg-body-tertiary flex-column">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img
                    src="https://intranet.gnovalty.com/Uploads/logosEmpresas/LOGOS_NOVALTY.png" alt="No hay"
                    width="250px" height="100px"></a>
        </div>
    </nav> -->
    <!-- BOTONES TIPO CLIENTE -->
    <div class="container botones-principales-cliente">
        <div class="row">
            <div class="col-4">
                <button id="btn-agroexportador" name="btn-agroexportador" type="button" class="btn btn-info">AGRO
                    EXPORTADOR</button>
            </div>
            <div class="col-4">
                <button id="btn-distribuidor" name="btn-distribuidor" type="button"
                    class="btn btn-light">DISTRIBUIDORs</button>
            </div>
            <div class="col-4">
                <button id="btn-productor" name="btn-productor" type="button" class="btn btn-light">PRODUCTOR</button>
            </div>
        </div>
    </div>

    <main>
        <!-- TITULO CLIENTE -->
        <div class="container titulo-cliente">
            <div class="row">
                <div class="col-12" style="display: flex; justify-content: center;">
                    <img src="assets/img/crear-cliente.png" alt="No hay" width="70px" height="70px">
                    <h1 id="titulo-crear-cliente" name="titulo-crear-cliente">CREAR CLIENTE</h1>
                </div>
            </div>
        </div>

        <form action="">
            <!-- GRUPO INFORMACION BASICA -->
            <div class="container clasificacion-cliente">
                <div class="row">
                    <!-- Columna "Clasificacion" -->
                    <div class="col-4">
                        <h4 id="titulo-clasificacion" name="titulo-clasificacion">CLASIFICACION</h4>
                        <hr>
                        <div class="mb-3" x-data="{fecha_actual: new Date().toLocaleDateString('es-ES')}">
                            <label for="input-fecha-registro" class="form-label">Fecha Registro:</label>
                            <input id="input-fecha-registro" name="input-fecha-registro" x-bind:value="fecha_actual"
                                type="text" class="form-control" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="input-estado" class="form-label">Estado:</label>
                            <input id="input-estado" name="input-estado" type="text" class="form-control" value="Activo"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label for="input-linea-negocio" class="form-label">Linea de negocio:</label>
                            <input id="input-linea-negocio" name="input-linea-negocio" type="text" class="form-control"
                                value="Agroindustria" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="input-tipo-cliente" class="form-label">Tipo de Cliente:</label>
                            <input id="input-tipo-cliente" name="input-tipo-cliente" type="text" class="form-control"
                                value="Agroexportador" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="input-segmentacion" class="form-label">Segmentacion:</label>
                            <input id="input-segmentacion" name="input-segmentacion" type="text" class="form-control"
                                value="Sin definir" readonly>
                        </div>
                        <div class="mb-3">
                            <!-- En este label no hace falta poner el "for" ya que se maneja otro de manera programatica para el input modificado y podria interferir en su funcionamiento -->
                            <label class="form-label">Logo de la empresa:</label>
                            <input id="input-logo-empresa" name="input-logo-empresa" type="file" class="input-de-robert"
                                id="input-modificado" accept="image/*" data-button="Examinar" data-empty="Sin archivos">
                        </div>
                    </div>
                    <!-- Columna factura/boleta -->
                    <div class="col-8">
                        <h4 id="titulo-informacion-factura" name="titulo-informacion-factura">INFORMACIÓN PARA LA
                            FACTURA/BOLETA</h4>
                        <hr>
                        <div class="mb-3">
                            <label for="input-pais" class="form-label">País:</label>
                            <input id="input-pais" name="input-pais" type="text" class="form-control" value="Perú"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label for="select-tipodoc" class="form-label">Tipo de documento:<small
                                    class="obligatorio">(*)</small></label>
                            <select name="select-tipodoc" id="select-tipodoc" class="form-select">
                                <option value="" selected>R.U.C</option>
                                <option value="">DNI</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="input-num-doc" class="form-label">N° de documento:<small
                                    class="obligatorio">(*)</small></label>
                            <div class="input-group mb-3">
                                <input id="input-num-doc" name="input-num-doc" type="text" class="form-control"
                                    value="20569874526" placeholder="Ingrese el número de identificación">
                                <button class="input-group-text btn btn-outline-secondary" type="button" id="btn-numdoc"
                                    name="btn-numdoc"><img src="assets/img/icono-sunat-removebg-preview.png" alt="26px"
                                        width="26px"></button>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label id="label-identificacion" for="input-razon-social" class="form-label">Razon
                                Social:</label>
                            <input id="input-razon-social" name="input-razon-social" type="text" class="form-control"
                                value="AGRICOLA CHAPI SAC" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="input-direccion" class="form-label">Dirección:<small
                                    class="obligatorio">(*)</small></label>
                            <input id="input-direccion" name="input-direccion" type="text" class="form-control"
                                value="CALLE DE PRUEBA - LIMA - LIMA - MIRAFLORES" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <!-- GRUPO "FINANCIAMIENTO" -->
            <div class="container financiamiento-cliente">
                <h4 id="titulo-financiamiento" name="titulo-financiamiento">FINANCIAMIENTO</h4>
                <hr>
                <div class="row">
                    <div class="col-12" style="text-align: center;">
                        <label class="form-label" for="grupo-dias-credito" style=" margin-right: 20px;">Dias de
                            Credito:</label>
                        <div class="btn-group" role="group" id="grupo-dias-credito">
                            @foreach($dias_credito as $key => $value)
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio{{ $key }}"
                                value="{{ $value }}" autocomplete="off" @if($key==1) checked @endif>
                            <label class="btn btn-outline-success" for="btnradio{{ $key }}">{{$value}}</label>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 40px;">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="select-tipo-moneda">Moneda:</label>
                        <select class="form-select" name="select-tipo-moneda" id="select-tipo-moneda">
                            <option value="">USD ($)</option>
                            <option value="">SOLES (S/.)</option>
                        </select>
                    </div>
                    <div class="col-6 mb-3">
                        <label for="input-linea-credito" class="form-label">Línea de crédito:</label>
                        <input type="text" class="form-control" placeholder="Monto de linea de crédito"
                            id="input-linea-credito" name="input-linea-credito">
                    </div>
                </div>
            </div>

            <!-- INFORMACIÓN DE CONTACTO(S) -->
            <div class="container informacion-contactos-cliente" x-data="{ count: 1 }">
                <div style="display: flex;">
                    <h4 id="titulo-informacion-contacto" name="titulo-informacion-contacto">INFORMACIÓN DE CONTACTO(S)
                    </h4>
                    <button id="btn-info-agregar" type="button" class="btn btn-success" style="margin-left: 15px;"
                        @click="count++"><i class="bi bi-plus-lg" style="color: white; "></i></button>
                </div>
                <hr>
                <div class="row">
                    <template x-for="i in count" :key="i">
                        <div class="col-4 contactos-adicionales" :id="'contactos-adicionales-' + i">
                            <div style="display: flex; justify-content: space-between;">
                                <h4 x-text="'CONTACTO N° ' + i"></h4>
                                <template x-if="count > 1 && i > 1 && count === i">
                                    <button :id="'btn-info-remover-' + i" type="button" class="btn btn-danger"
                                        style="margin-left: 15px;" @click="count--"><i class="bi bi-trash"
                                            style="color: white; "></i></button>
                                </template>
                            </div>
                            <hr>
                            <div class="mb-3">
                                <label :for="'input-nombre-contacto-' + i" class="form-label">Nombre(s) y
                                    Apellidos:<small style="color: red;">(*)</small></label>
                                <input type="text" class="form-control" :id="'input-nombre-contacto-' + i"
                                    :name="'input-nombre-contacto-' + i" placeholder="Nombre y Apellidos">
                            </div>
                            <div class="mb-3">
                                <label :for="'input-cargo-contacto-' + i" class="form-label">Cargo:<small
                                        style="color: red;">(*)</small></label>
                                <input type="text" class="form-control" :id="'input-cargo-contacto-' + i"
                                    :name="'input-cargo-contacto-' + i" placeholder="Cargo">
                            </div>
                            <div class="mb-3">
                                <label :for="'input-celular-contacto-' + i" class="form-label">Celular:<small
                                        style="color: #ffc000;">(**)</small></label>
                                <input type="text" class="form-control" :id="'input-celular-contacto-' + i"
                                    :name="'input-celular-contacto-' + i" placeholder="Celular">
                            </div>
                            <div class="mb-3">
                                <label :for="'input-correo-contacto-' + i" class="form-label">Correo:<small
                                        style="color: red;">(*)</small></label>
                                <input type="email" class="form-control" :id="'input-correo-contacto-' + i"
                                    :name="'input-correo-contacto-' + i" placeholder="Correo">
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- DATOS ADICIONALES -->
            <div class="container datos-adicionales-cliente">
                <div class="row">
                    <div class="col-12">
                        <h4 id="titulo-datos-adicionales" name="titulo-datos-adicionales">DATOS ADICIONALES</h4>
                        <hr>
                    </div>
                </div>
                <div x-data="{ count: 1 }">
                    <div class="row">
                        <div class="col-12">
                            <div style="display: flex;">
                                <h4 id="titulo-fundos" name="titulo-fundos">FUNDO(S)</h4>
                                <button id="btn-fundo-agregar" type="button" class="btn btn-success"
                                    style="margin-left: 15px;" @click="count++"><i class="bi bi-plus-lg"
                                        style="color: white; "></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- <hr> -->
                    <div class="row">
                        <template x-for="i in count" :key="i">
                            <div class="col-4 datos-fundo" :id="'datos-fundo-' + i">
                                <div style="display: flex; justify-content: space-between;">
                                    <h4 x-text="'Fundo N° ' + i"></h4>
                                    <template x-if="count > 1 && i > 1 && count === i">
                                        <button :id="'btn-fundo-remover-' + i" type="button" class="btn btn-danger"
                                            style="margin-left: 15px;" @click="count--"><i class="bi bi-trash"
                                                style="color: white; "></i></button>
                                    </template>
                                </div>
                                <hr>
                                <div class="mb-3">
                                    <label for="select-zona-fundo" class="form-label">Zona:<small
                                            style="color: red;">(*)</small></label>
                                    <select :name="'select-zona-fundo-' + i" :id="'select-zona-fundo-' + i"
                                        class="form-select" readonly>
                                        <option value="" selected disabled>-SELECCIONAR-</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="select-sector-fundo" class="form-label">Sector:</label>
                                    <select :name="'select-sector-fundo-' + i" :id="'select-sector-fundo-' + i"
                                        class="form-select" readonly>
                                        <option value="" selected disabled>-SELECCIONAR-</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="input-direccion-fundo" class="form-label">Dirección:</label>
                                    <input type="text" class="form-control" :id="'input-direccion-fundo-' + i"
                                        :name="'input-direccion-fundo-' + i" placeholder="Dirección">
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <div class="container botones-finales-cliente">
                <div class="row">
                    <div class="col-12" style="display: flex; flex-direction: column;">
                        <small style="color: red;">(*) Campo Requerido</small>
                        <small style="color: #ffc000;">(**) Mínimo llenar un campo de las dos opciones</small>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" style="display: flex; justify-content: center;">
                        <button style="margin-right: 15px;" id="btn-cerrar" name="btn-cerrar" type="button"
                            class="btn btn-outline-secondary btn-finales">Cerrar</button>
                        <button style="margin-left: 15px;" id="btn-guardar" name="btn-guardar" type="button"
                            class="btn btn-outline-primary btn-finales">Guardar</button>
                    </div>
                </div>
            </div>
        </form>
    </main>
</div>
