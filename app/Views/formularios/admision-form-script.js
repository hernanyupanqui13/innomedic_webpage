
// Buscar DNI
const buscar_dni_btn = document.getElementById("buscar-dni-btn");
buscar_dni_btn.addEventListener("click", async function() {
    
    const dni = document.querySelector("#dni-ipt").value;
    let dni_obj = await buscarDni(dni);
    document.querySelector("#nombres-ipt").value = dni_obj.nombres;
    document.querySelector("#apellido_paterno-ipt").value = dni_obj.apellidoPaterno;
    document.querySelector("#apellido_materno-ipt").value = dni_obj.apellidoMaterno;

});

// Buscar RUC
const buscar_ruc_btn = document.querySelector("#buscar-ruc-btn");
buscar_ruc_btn.addEventListener("click", async function (){
    const ruc = document.querySelector("#empresa-ruc-ipt").value;

    let ruc_data = await buscarRuc(ruc);

    document.querySelector("#empresa-razon_social-ipt").value = ruc_data.razonSocial;
});


// Iniciando el formulario con las formulas necesarias
loadAutocompleteOptions(`./Formularios/getAllCountries`
    , "#pais_origen-ipt"
);
loadLocationInputs();
loadMigrationInputs();
initDependentQuestion("contacto-directo-question");
initDependentQuestion("sintomas-question");

//Inicializando todas las preguntas de clase otros_input
[...document.querySelectorAll(".otros_input")].forEach(element => {
    console.log(element.id)
    initOtrosQuestion(element.id);
});







const main_form = document.forms[0];
// Enviando el formulario
main_form.addEventListener("submit", async (e) => {
    
    if (!main_form.checkValidity()) {
        e.preventDefault()
        e.stopPropagation()
    } else {
        e.preventDefault()
        const formData = new FormData(main_form);
        let x = await fetch(`${window.location.origin}/Formularios/registerAnswers`, {
            method: "post",
            mode: "no-cors",
            body: formData
            })
            .then(r => r.text())
            .catch(error => {
                console.log(error);
            }
        );

        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: true,
        })
        .then( () => {
            window.location = `${window.location.origin}/Formularios/QRcode`;
        })


    }

    main_form.classList.add('was-validated')
    
    
}, true);







/*
---------------------------------------------------------------------------------------------------------
FUNCIONES
---------------------------------------------------------------------------------------------------------
*/

/* Funcion que inicializa las preguntas dependientes del formualrio. Hace visibles o invisibles preguntas dependientes (slaves)
dependiendo de la respuesta a otra pregunta (master) */
function initDependentQuestion(questionId) {
    const question = document.querySelector(`#${questionId}`);
    console.log(question);

    const slave =  question.querySelector(".dependent-slave");
    console.log(slave);

    const activeSlavesArray = [...question.querySelectorAll(".activeTrigger")];
    const inactiveSlavesArray = [...question.querySelectorAll(".inactiveTrigger")];


    for (let oneMaster of activeSlavesArray) {
        oneMaster.addEventListener("change", () => {
            console.log("activing");
            if(oneMaster.checked) {
                slave.classList.add("dependent-slave-active");
                [...slave.querySelectorAll("input")].forEach(element => {
                    element.setAttribute("required", "true");
                });;
                
            }
        });
    }

    for (let oneMaster of inactiveSlavesArray) {
        oneMaster.addEventListener("change", () => {
            console.log("inactive");
            if(oneMaster.checked) {
                slave.classList.remove("dependent-slave-active");
                [...slave.querySelectorAll("input")].forEach(element => {
                    element.removeAttribute("required", "true");
                });;
            }
        });
    }

}



/*
Funcion que carga los datos de autocompletado a todas las inputs dentro de la clase location-ipts
No devuelve nada
*/
function loadLocationInputs() {
    const locationIpts = [...document.querySelectorAll(".location-ipts")];
    console.log(locationIpts);
    for(let locationItem of locationIpts) {
        const departamento = locationItem.querySelector(".location-departamento");
        const provincia = locationItem.querySelector(".location-provincia");
        const distrito = locationItem.querySelector(".location-distrito");
        
        loadAutocompleteOptions(`./Formularios/getAllDepartments`, departamento);
        
        departamento.addEventListener("change", () => {
            loadAutocompleteOptions(
                `./Formularios/getProvincias/${departamento.value}`
                , provincia
            );
        });
        
        provincia.addEventListener("change", () => {
            loadAutocompleteOptions(
                `./Formularios/getDistritos/${provincia.value}`
                , distrito
            );
        });
    }
}


/*
Funcion que añade logica a la parte de migrante o no y su pais de origien
No devuelve nada
*/
function loadMigrationInputs() {
    const es_migrante = document.querySelector("#si_migrante-rb");
    const no_es_migrante = document.querySelector("#no_migrante-rb");
    const pais_origen = document.querySelector("#pais_origen-ipt");
    
    es_migrante.addEventListener("change", () => {
        console.log("cambie");
        if(es_migrante.checked) {
            pais_origen.removeAttribute("disabled");
            pais_origen.setAttribute("required", true);
        }
    });
    
    no_es_migrante.addEventListener("change", () => {
        if(no_es_migrante.checked) {
            pais_origen.value = "";
            pais_origen.setAttribute("disabled", true);
        }
    });    
}



async function buscarRuc(ruc_number) {
    let response = await $.ajax({
        data: { "nruc" : ruc_number},
        type: "POST",
        dataType: "json",
        url: `${window.location.origin}/public/dni-peru-consult/ruc-consult.php?v=121/`
    })
    .done((data)=> {
        return data;
    });

    console.log(response);

    return response;

}


async function loadCountryOptions(HTMLselector) {
    var data = await fetch(`${window.location.origin}/Formularios/getAllCountries`)
        .then(r => r.json())
        .then(response => { // Data form: [{name: "country"},{...},{...}]
            console.log(response)
            return response;
        }
    );

    $(HTMLselector).autocomplete({
        source: data
    });

}


async function loadDepartmentOptions(HTMLselector) {
    var data = await fetch(`${window.location.origin}/Formularios/getAllDepartments`)
        .then(r => r.json())
        .then(response => {
            console.log(response)
            return response;
        }
    );

    $( HTMLselector ).autocomplete({
        source: data
    });

}


async function loadAutocompleteOptions(url, htmlSelector) {
    const data = await fetch(url)
    .then(r => r.json())
    .then(response => {
        console.log(response);
        return response;
    });


    $( htmlSelector ).autocomplete({
        source: data
    });
}


async function buscarDni(dni_number) {
    let dni_data = await fetch(`${window.location.origin}/public/dni-peru-consult/entry_point.php?dni=${dni_number}`)
        .then(response=> response.json());

    return dni_data;
}


function initOtrosQuestion(inputId) {

    // Creando la entradade texto extra
    const triggerElement = document.querySelector(`#${inputId}`);
    const parentElement = triggerElement.parentNode;
    parentElement.innerHTML += `<input type="text" class="extraInput inactive">`;


    // Hacer aparecer el la entrada de texto extra
    document.querySelector(`#${inputId}`).addEventListener("change", event => {
        event.stopPropagation();

        const extraInput = parentElement.querySelector(".extraInput");

        if (!event.target.checked) {                // Checkbox desactivado
            extraInput.classList.add("inactive");
            extraInput.classList.remove("active");
            extraInput.value = "";
            event.target.value = "";
        } else {                                    // Checkbox activado 
            extraInput.classList.add("active");
            extraInput.classList.remove("inactive");
        }

    });

    // Da el valor de la entrada de texto extra al checkbox que lo activo
    parentElement.querySelector(".extraInput").addEventListener("change", event => {
        document.querySelector(`#${inputId}`).value = event.target.value;
    });


    // Para radio Buttons
    if(triggerElement.getAttribute("type")==="radio") {
        const nameExtraInput = triggerElement.getAttribute("name");
        [...document.getElementsByName(nameExtraInput)].forEach(element => {
            element.addEventListener("change", event => {

                const extraInput = parentElement.querySelector(".extraInput");

                event.stopPropagation();

                if(event.target.checked && event.target.id ==inputId) {
                    console.log("active radio");
                    extraInput.classList.add("active");
                    extraInput.classList.remove("inactive");
                } else {
                    console.log("ianactive radio");
                    extraInput.classList.add("inactive");
                    extraInput.classList.remove("active");
                    extraInput.value = "";
                    event.target.value = "";
                }
            })
        });
    };
    
}
