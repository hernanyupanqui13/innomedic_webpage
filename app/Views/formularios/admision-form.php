<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="stylesheet" href="styles.css">-->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

<style>
body {
    margin: 5px;
    padding: 5px;
}

.simple_row {
    display: flex;
}

.grid-3  {
    display: grid;
    grid-template-columns: repeat(3, auto);
}

.yes_no-item {
    display: grid;
    grid-template-columns: 0fr max-content 1fr min-content min-content 3fr;
    margin-left: 15px;
}

.yes_no-item .yes_no_question {
    grid-column: 2/3;
}

.yes_option {
    grid-column: 4/5;
}

.no_option {
    grid-column: 5/6;
}
</style>

</head>
<body>
    <form>
        <section>
            <h2>Datos del Paciente</h2>
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="dni-ipt">DNI</label>
                        <div class="simple_row">
                            <input type="text" name="dni" class="form-control" id="dni-ipt" placeholder="">
                            <button type="button" id="buscar-dni-btn" class="btn btn-secondary">Buscar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="apellido_paterno-ipt">Nombres</label>
                        <input type="text" class="form-control" name="nombres" id="nombres-ipt" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="apellido_paterno-ipt">Apellido Paterno</label>
                        <input type="text" class="form-control" name="apellido_paterno" id="apellido_paterno-ipt" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="apellido_materno-ipt">Apellido Materno</label>
                        <input type="text" class="form-control" name="apellido_materno" id="apellido_materno-ipt" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="fecha_nacimiento-ipt">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento-ipt" placeholder="Password">
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Sexo</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo-ipt" id="masculino-rb" value="masculino">
                            <label class="form-check-label" for="masculino-rb">Masculino</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="sexo-ipt" id="femenino-rb" value="femenino">
                            <label class="form-check-label" for="femenino-rb">Femenino</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="peso-ipt">Peso</label>
                        <input type="text" class="form-control" name="peso" id="peso-ipt" placeholder="Ingrese peso en Kg">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="talla-ipt">Talla</label>
                        <input type="text" class="form-control" name="talla" id="talla-ipt" placeholder="Ingrese talla en metros">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Raza o Etnia</label>
                        <select class="form-select" name="raza" id="raza-ipt" aria-label="Default select example">
                            <option selected>Seleccione una opcion</option>
                            <option value="mestizo">Mestizo</option>
                            <option value="afrodescendiente">Afrodescendiente</option>
                            <option value="andino">Andino</option>
                            <option value="asiatico descendiente">Asiatico descendiente</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="numero_telef-ipt">Numero de Telefono</label>
                        <input type="text" class="form-control" name="numero_telef" id="numero_telef-ipt" placeholder="Ingrese numero telefonico">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="residencia-text-ipt">Direccion de residencia actual</label>
                        <input type="text" class="form-control" name="residencia-text" id="residencia-text-ipt" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="residencia-departamento-ipt">Departamento</label>
                        <input type="text" class="form-control" name="residencia-departamento" id="residencia-departamento-ipt" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="residencia-provincia-ipt">Provincia</label>
                        <input type="text" class="form-control" name="residencia-provincia" id="residencia-provincia-ipt" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="residencia-distrito-ipt">Distrito</label>
                        <input type="text" class="form-control" name="residencia-distrito" id="residencia-distrito-ipt" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label>¿Eres migrante?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="es_migrante" id="si_migrante-rb">
                        <label class="form-check-label" for="si_migrante-rb">
                        Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="es_migrante" id="no_migrante-rb" checked>
                        <label class="form-check-label" for="no_migrante-rb">
                        No
                        </label>
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="pais_origen-ipt">¿Cual es tu pais de origen?</label>
                        <input type="text" class="form-control" name="pais_origen" id="pais_origen-ipt" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <label>Datos de la empresa e que labora</label>
                <div class="col-6">
                    <div class="form-group">
                        <label for="dni-ipt">RUC</label>
                        <div class="simple_row">
                            <input type="text" name="empresa-ruc" class="form-control" id="empresa-ruc-ipt" placeholder="">
                            <button type="button" id="buscar-ruc-btn" class="btn btn-secondary">Buscar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="empresa-razon_social-ipt">Razon Social</label>
                        <input type="text" class="form-control" name="empresa-razon_social" id="empresa-razon_social-ipt" placeholder="">
                    </div>
                </div>
            </div>
        </section>
        <br><br>
        <section>
            <h2>Antecedentes Epidemiologicos y Patologicos</h2>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="inicio_sintomas-date-ipt">Fecha de inicio de sintomas</label>
                        <input type="date" class="form-control" name="inicio_sintomas-date" id="inicio_sintomas-date-ipt" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="inicio_aislamiento-date-ipt">Fecha de inicio de aislamiento</label>
                        <input type="date" class="form-control" name="inicio_aislamiento-date" id="inicio_aislamiento-date-ipt" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label>¿Es Asintomatico?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="si_asintomatico" id="si_asintomatico-rb">
                        <label class="form-check-label" for="si_asintomatico-rb">
                        Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="no_asintomatico" id="no_asintomatico-rb" checked>
                        <label class="form-check-label" for="no_asintomatico-rb">
                        No
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <label>Lugar probable de infeccion</label>
                <div class="col">
                    <div class="form-group">
                        <label for="residencia-departamento-ipt">Departamento</label>
                        <input type="text" class="form-control" name="residencia-departamento" id="residencia-departamento-ipt" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="residencia-provincia-ipt">Provincia</label>
                        <input type="text" class="form-control" name="residencia-provincia" id="residencia-provincia-ipt" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="residencia-distrito-ipt">Distrito</label>
                        <input type="text" class="form-control" name="residencia-distrito" id="residencia-distrito-ipt" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Sintomas</label>
                    <div class="grid-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-1-cb">
                            <label class="form-check-label" for="flexCheckDefault">
                            Tos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-2-cb">
                            <label class="form-check-label" for="sintoma-2-cb">
                                Dolor de Garganta
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-3-cb">
                            <label class="form-check-label" for="sintoma-3-cb">
                                Congestion Nasal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-4-cb">
                            <label class="form-check-label" for="sintoma-4-cb">
                                Dificultad Respiratoria
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-5-cb">
                            <label class="form-check-label" for="sintoma-5-cb">
                                Fiebre
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-6-cb">
                            <label class="form-check-label" for="sintoma-6-cb">
                                Escalofrios
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-7-cb">
                            <label class="form-check-label" for="sintoma-7-cb">
                                Malestar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-8-cb">
                            <label class="form-check-label" for="sintoma-8-cb">
                                Diarrea
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-9-cb">
                            <label class="form-check-label" for="sintoma-9-cb">
                                Nauseas/Vomitos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-10-cb">
                            <label class="form-check-label" for="sintoma-10-cb">
                                Cefalea
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-11-cb">
                            <label class="form-check-label" for="sintoma-11-cb">
                                Anostia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-12-cb">
                            <label class="form-check-label" for="sintoma-12-cb">
                                Ageustia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-13-cb">
                            <label class="form-check-label" for="sintoma-13-cb">
                                Dolor de oido
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-14-cb">
                            <label class="form-check-label" for="sintoma-14-cb">
                                Irritabilidad/confusion
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="sintomas" id="sintoma-15-cb">
                            <label class="form-check-label" for="sintoma-15-cb">
                                Dolor (Marque todos los que aplican)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="otros" name="sintomas" id="sintoma-16-cb">
                            <label class="form-check-label" for="sintoma-16-cb">
                                Otros
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Signos</label>
                    <div class="grid-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-1-cb">
                            <label class="form-check-label" for="signo-1-cb">
                            Exudado faringeo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-2-cb">
                            <label class="form-check-label" for="signo-2-cb">
                                Inyeccion conjuntivial
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-3-cb">
                            <label class="form-check-label" for="signo-3-cb">
                                Convulsion
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-4-cb">
                            <label class="form-check-label" for="signo-4-cb">
                                Disnea/taquipnea
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-5-cb">
                            <label class="form-check-label" for="signo-5-cb">
                                Auscultacion pulmonar anormal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-6-cb">
                            <label class="form-check-label" for="signo-6-cb">
                                Halazgos anormales en radiografia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-7-cb">
                            <label class="form-check-label" for="signo-7-cb">
                                Halazgos anormales en ecografia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-8-cb">
                            <label class="form-check-label" for="signo-8-cb">
                                Halazgos anormales en tomografia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-9-cb">
                            <label class="form-check-label" for="signo-9-cb">
                                Halazgos anormales en RMN
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-10-cb">
                            <label class="form-check-label" for="signo-10-cb">
                                Otros
                            </label>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Condiciones de comorbilidad o factores de riesgo</label>
                    <div class="grid-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-1-cb">
                            <label class="form-check-label" for="signo-1-cb">
                                Embarazo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-2-cb">
                            <label class="form-check-label" for="signo-2-cb">
                                Enfermedad Cardiovascular
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-3-cb">
                            <label class="form-check-label" for="signo-3-cb">
                                Diabetes
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-4-cb">
                            <label class="form-check-label" for="signo-4-cb">
                                Enfermedad Hepatica
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-5-cb">
                            <label class="form-check-label" for="signo-5-cb">
                                Enfermedad Cronica Neurologica o Neuromuscular
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-6-cb">
                            <label class="form-check-label" for="signo-6-cb">
                                Obesidad
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-7-cb">
                            <label class="form-check-label" for="signo-7-cb">
                                Tuberculosis
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-8-cb">
                            <label class="form-check-label" for="signo-8-cb">
                                Post parto/aborto(&leq; 6 semanas o 42 dias))
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-9-cb">
                            <label class="form-check-label" for="signo-9-cb">
                                Inmunodeficiencia (incluye VIH)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-10-cb">
                            <label class="form-check-label" for="signo-10-cb">
                                Enfermedad renal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-11-cb">
                            <label class="form-check-label" for="signo-11-cb">
                                Enfermedad Pulmonar Cronica
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-12-cb">
                            <label class="form-check-label" for="signo-12-cb">
                                Asma
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-13-cb">
                            <label class="form-check-label" for="signo-13-cb">
                                Cancer
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-14-cb">
                            <label class="form-check-label" for="signo-14-cb">
                                Otros
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="apellido_paterno-ipt">Fecha de cumplicion de embarazo</label>
                        <input type="date" class="form-control" name="apellido_paterno" id="apellido_paterno-ipt" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Signos</label>
                    <div class="grid-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-1-cb">
                            <label class="form-check-label" for="signo-1-cb">
                            Exudado faringeo
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-2-cb">
                            <label class="form-check-label" for="signo-2-cb">
                                Inyeccion conjuntivial
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-3-cb">
                            <label class="form-check-label" for="signo-3-cb">
                                Convulsion
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-4-cb">
                            <label class="form-check-label" for="signo-4-cb">
                                Disnea/taquipnea
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-5-cb">
                            <label class="form-check-label" for="signo-5-cb">
                                Auscultacion pulmonar anormal
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-6-cb">
                            <label class="form-check-label" for="signo-6-cb">
                                Halazgos anormales en radiografia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-7-cb">
                            <label class="form-check-label" for="signo-7-cb">
                                Halazgos anormales en ecografia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-8-cb">
                            <label class="form-check-label" for="signo-8-cb">
                                Halazgos anormales en tomografia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-9-cb">
                            <label class="form-check-label" for="signo-9-cb">
                                Halazgos anormales en RMN
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="signo-10-cb">
                            <label class="form-check-label" for="signo-10-cb">
                                Otros
                            </label>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label>Ocupacion </label>
                    <div class="grid-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-1-cb">
                            <label class="form-check-label" for="ocupacion-1-cb">
                                Trabajador de Salud
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-2-cb">
                            <label class="form-check-label" for="ocupacion-2-cb">
                                Policia
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-3-cb">
                            <label class="form-check-label" for="ocupacion-3-cb">
                                Militar
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-4-cb">
                            <label class="form-check-label" for="ocupacion-4-cb">
                                Estudiante
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-5-cb">
                            <label class="form-check-label" for="ocupacion-5-cb">
                                Medico
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-6-cb">
                            <label class="form-check-label" for="ocupacion-6-cb">
                                Enfermero(a)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-7-cb">
                            <label class="form-check-label" for="ocupacion-7-cb">
                                Obstera
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-8-cb">
                            <label class="form-check-label" for="ocupacion-8-cb">
                                Laboratorista
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-9-cb">
                            <label class="form-check-label" for="ocupacion-9-cb">
                                Tecnico en Enfermeria
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" name="signos" id="ocupacion-10-cb">
                            <label class="form-check-label" for="ocupacion-10-cb">
                                Otros
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <label>Lugar de Trabajo </label>
                <div class="col">
                    <div class="form-group">
                        <label for="trabajo-lugar-ipress-ipt">IPRESS</label>
                        <input type="text" class="form-control form-control-sm" name="trabajo-lugar-ipress" id="trabajo-lugar-ipress-ipt" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="trabajo-lugar-departamento-ipt">Departamento</label>
                        <input type="text" class="form-control form-control-sm" name="trabajo-lugar-departamento" id="trabajo-lugar-departamento-ipt" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="trabajo-lugar-provincia-ipt">Provincia</label>
                        <input type="text" class="form-control form-control-sm" name="trabajo-lugar-provincia" id="trabajo-lugar-provincia-ipt" placeholder="">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="trabajo-lugar-distrito-ipt">Distrito</label>
                        <input type="text" class="form-control form-control-sm" name="trabajo-lugar-distrito" id="trabajo-lugar-distrito-ipt" placeholder="">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <h2>Ficha de Sintomatologia Covid 19</h2>
            <div class="row">
                <div class="col">
                    <label>Marque si presenta alguno de los siguientes factores de riesgo</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-1-cb">
                        <label class="form-check-label" for="factor_rzg-1-cb">
                            Edad mayor de 65 años
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-2-cb">
                        <label class="form-check-label" for="factor_rzg-2-cb">
                            Hipertension Arterial No Controlada
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-3-cb">
                        <label class="form-check-label" for="factor_rzg-3-cb">
                            Enfermedades Cardiovasculares Graves
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-4-cb">
                        <label class="form-check-label" for="factor_rzg-4-cb">
                            Cancer
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-5-cb">
                        <label class="form-check-label" for="factor_rzg-5-cb">
                            Diabetes Mellitus
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-6-cb">
                        <label class="form-check-label" for="factor_rzg-6-cb">
                            Asma Bronquial Moderada o Grave
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-7-cb">
                        <label class="form-check-label" for="factor_rzg-7-cb">
                            Enfermedad Pulmonar Cronica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-8-cb">
                        <label class="form-check-label" for="factor_rzg-8-cb">
                            Enfermedad Renal Cronica
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-9-cb">
                        <label class="form-check-label" for="factor_rzg-9-cb">
                            Enfermedad o tratamiento Inmunosupresor
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" name="factores-rzg" id="factor_rzg-10-cb">
                        <label class="form-check-label" for="factor_rzg-10-cb">
                            Obesidad con IMC de 40 a mas
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div>¿En los ultimos 14 dias calendario ha tenido alguno de los siguientes sintomas?</div>
                <div class="col yes_no-item">
                    <div class="yes_no_question">Sensacion de alza termina o fiebre</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-1" id="ultimos_sintomas-1-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-1-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-1" id="ultimos_sintomas-1-no-rb" value="no">
                        <label class="form-check-label" for="ultimos_sintomas-1-no-rb">No</label>
                    </div>

                    <div class="yes_no_question">Disminucion o Perdida del gusto</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-2" id="ultimos_sintomas-2-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-2-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-2" id="ultimos_sintomas-2-no-rb" value="no">
                        <label class="form-check-label" for="ultimos_sintomas-2-no-rb">No</label>
                    </div>

                    <div class="yes_no_question">Disminucion o perdida del olfato</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-3" id="ultimos_sintomas-3-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-3-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-3" id="ultimos_sintomas-3-no-rb" value="no">
                        <label class="form-check-label" for="ultimos_sintomas-3-no-rb">No</label>
                    </div>

                    <div class="yes_no_question">Tos, estornudos o dificultad para respirar</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-4" id="ultimos_sintomas-4-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-4-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-4" id="ultimos_sintomas-4-no-rb" value="no">
                        <label class="form-check-label" for="ultimos_sintomas-4-no-rb">No</label>
                    </div>

                    <div class="yes_no_question">Expectoracion o flema amarilla o verdosa</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-5" id="ultimos_sintomas-5-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-5-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-5" id="ultimos_sintomas-5-no-rb" value="no">
                        <label class="form-check-label" for="ultimos_sintomas-5-no-rb">No</label>
                    </div>

                    <div class="yes_no_question">Malestar general, dolor de cabeza</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-6" id="ultimos_sintomas-6-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-6-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-6" id="ultimos_sintomas-6-no-rb" value="no">
                        <label class="form-check-label" for="ultimos_sintomas-6-no-rb">No</label>
                    </div>

                    <div class="yes_no_question">Diarrea</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-7" id="ultimos_sintomas-7-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-7-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-7" id="ultimos_sintomas-7-no-rb" value="no">
                        <label class="form-check-label" for="ultimos_sintomas-7-no-rb">No</label>
                    </div>

                    <div class="yes_no_question">Nauseas y vomitos</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-8" id="ultimos_sintomas-8-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-8-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-8" id="ultimos_sintomas-8-no-rb" value="no">
                        <label class="form-check-label" for="ultimos_sintomas-8-no-rb">No</label>
                    </div>

                    <div class="yes_no_question">Contacto con persona(s) con sospecha de un caso de COVID-19</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-9" id="ultimos_sintomas-9-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-9-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-9" id="ultimos_sintomas-9-no-rb" value="no">
                        <label class="form-check-label" for="ultimos_sintomas-9-no-rb">No</label>
                    </div>
                    
                    <div class="yes_no_question">Esta tomando alguna medicacion (detallar cual o cuales)</div>
                    <div class="form-check form-check-inline yes_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-10" id="ultimos_sintomas-10-si-rb" value="si">
                        <label class="form-check-label" for="ultimos_sintomas-10-si-rb">Si</label>
                    </div>
                    <div class="form-check form-check-inline no_option">
                        <input class="form-check-input" type="radio" name="ultimos_sintomas-10" id="ultimos_sintomas-10-no-rb" value="no">
                        <label class="form-check-label" for="x-10-no-rb">No</label>
                    </div>
                </div>
            </div>
        </section>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    <script src="app/Views/formularios/admision-form-script.js"></script>
    <!--
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    -->
    
</body>
</html>