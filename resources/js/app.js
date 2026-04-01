import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

window.eliminarProyecto = async function(id) {
    try {
        if (!confirm('Está seguro de eliminar el registro?')) return;

        const response = await fetch(`/proyectos/${id}`, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        });

        if (!response.ok) throw new Error('Error');

        const fila = document.getElementById(`fila-${id}`);
        if (fila) fila.remove();

    } catch (error) {
        console.error(error);
    }
}

window.eliminarCargo = async function(id){
    try {
        if(!confirm('¿Desea eliminar el registro?')) return;

        const promesa = await fetch('/cargos/' + id, {
            method : 'DELETE',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            }
        });

        if(!promesa.ok) throw new Error('Error');

        const fila = document.getElementById('fila--'+id);
        if(fila) fila.remove();
    } catch (error) {
        console.error("error:"+error);
    }
   
}

window.eliminarTrabajador = async function(id){
    try {
        if(!confirm('¿Deseas eliminar el siguiente registro?')) return;

        const promesa = await fetch('/trabajadors/' + id, 
            {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content
                }
            });

        if (!promesa.ok) throw new Error('Error');

        const fila = document.getElementById('fila-' + id);

        if (fila) fila.remove();

    } catch (error) {
        console.error(error);
    }
}

window.eliminarProveedor = async function(id) {
    try {
        if(!confirm('¿Desea elimnar el registro?')) return;

        const promesa = await fetch('/proveedors/' + id, {
            method : 'DELETE',
            headers: {
                'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content
            }
        })

        if(!promesa.ok) throw new Error('Error')

        const fila = document.getElementById('fila-' + id);

        if (fila) fila.remove();
    } catch (error) {
        console.error(error)
    }
    
}

window.eliminarMaterial = async function(id) {
    try {
        if(!confirm('¿Desea eliminar el material?')) return;

        const promesa = await fetch('/materials/' + id, {
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').content
            }
        })

        if (!promesa.ok) throw new Error('Error');

        const fila = document.getElementById('fila--' + id);
        
        if (fila) fila.remove();
    } catch (error) {
        console.log("el error es: " + error)
    }
    
    
}
