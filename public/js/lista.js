function cambiarId(id)
{
    let formulario = document.getElementById('formulario_borrado');
    let action = formulario.getAttribute('action');
    formulario.setAttribute('action',action+ "/" +id)
    id = 0;
}