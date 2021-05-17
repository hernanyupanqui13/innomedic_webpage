
// Buscar DNI
const buscar_dni_btn = document.getElementById("buscar-dni-btn");
buscar_dni_btn.addEventListener("click", async function() {
    
    const dni = document.querySelector("#dni-ipt").value;
    console.log(dni);
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

    document.querySelector("#empresa-razon_social-ipt").value = ruc_data.razon_social;
});


// Iniciando el formulario con las formulas necesarias
loadAutocompleteOptions(`./Formularios/getAllCountries`
    , "#pais_origen-ipt"
);
loadLocationInputs();
loadMigrationInputs();




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
        });
    }

    main_form.classList.add('was-validated')
    
    
}, true);








/*
---------------------------------------------------------------------------------------------------------
FUNCIONES
---------------------------------------------------------------------------------------------------------
*/



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
        url: `${window.location.origin}/public/sunatphp-master/example/consulta.php`
    })
    .done((data)=> {
        return data;
    });

    console.log(response.result);

    return response.result;

}


async function loadCountryOptions(HTMLselector) {
    var data = await fetch(`${window.location.origin}/Formularios/getAllCountries`)
        .then(r => r.json())
        .then(response => { // Data form: [{name: "country"},{...},{...}]
            /*let response = [];
            data.forEach(element => {
                response.push(element.name);
            });*/

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
