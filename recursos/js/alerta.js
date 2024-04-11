function alerta(){
    swal('Ops!  Ha ocurrido un error', 'No coinciden las contraseñas', {
        button: 'Regrear',
        dangerMode: true,
        icon:'error',
    })
    .then((regresar) => {
        if (regresar) {
            location.href ="vista/index.html";
          }
          
        });
    
}

