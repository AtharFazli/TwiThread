import './bootstrap';

import Alpine from 'alpinejs';
import Swal from 'sweetalert2';

window.Alpine = Alpine;

Alpine.start();


Swal.fire({
    icon: 'success',
    title: 'Sukses!',
    text: response.data.message, // Pesan dari controller
});