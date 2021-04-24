console.log("tood bienda");


const main_form = document.forms[0];

main_form.addEventListener("submit", async (e) => {
    
    const formData = new FormData(main_form);

    e.preventDefault();

    let x = await fetch("http://intranet.innomedic.pe/Mantenimiento/Pedidos", {
        method: "post",
        mode: "no-cors",
        body: formData
    })
    .then(r => r.text());

    console.log(x);
});


const buscar_dni_btn = document.getElementById("buscar-dni-btn");
buscar_dni_btn.addEventListener("click", async function() {
    
    const dni = document.querySelector("#dni-ipt").value;
    console.log(dni);
    let dni_obj = await buscarDni(dni);
    document.querySelector("#nombres-ipt").value = dni_obj.nombres;
    document.querySelector("#apellido_paterno-ipt").value = dni_obj.apellidoPaterno;
    document.querySelector("#apellido_materno-ipt").value = dni_obj.apellidoMaterno;

});

async function buscarDni(dni_number) {
    let dni_data = await fetch(`${window.location.origin}/web-innomedic_v1/public/dni-peru-consult/entry_point.php?dni=${dni_number}`)
        .then(response=> response.json());

    return dni_data;
}

const buscar_ruc_btn = document.querySelector("#buscar-ruc-btn");
buscar_ruc_btn.addEventListener("click", async function (){
    const ruc = document.querySelector("#empresa-ruc-ipt").value;

    let ruc_data = await buscarRuc(ruc);

    document.querySelector("#empresa-razon_social-ipt").value = ruc_data.razon_social;
});

async function buscarRuc(ruc_number) {
    let response = await $.ajax({
        data: { "nruc" : ruc_number},
        type: "POST",
        dataType: "json",
        url: `${window.location.origin}/web-innomedic_v1/public/sunatphp-master/example/consulta.php`
    })
    .done((data)=> {
        return data;
    });

    console.log(response.result);

    return response.result;

}

const x = $("#nombres-ipt").val();
console.log(x);