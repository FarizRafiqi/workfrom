import './bootstrap';
import 'bootstrap-select/dist/js/bootstrap-select.min.js';
import select2 from 'select2';
select2();

const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
