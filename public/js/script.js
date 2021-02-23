// // Extend the default picker options for all instances.
// $.extend($.fn.datepicker.defaults, {
//     monthsFull: ['Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Iulie', 'August', 'Septembrie', 'Octombrie',
//         'Noiembrie', 'Decembrie'],
//     weekdaysShort: ['Dum', 'Lun', 'Mar', 'Mie', 'Joi', 'Vin', 'Sam'],
//     today: 'azi',
//     clear: 'effacer',
//     formatSubmit: 'dd/mm/yyyy'
// });
//
// // Or, pass the months and weekdays as an array for each invocation.
// $(document).ready(function()
// {
//     alert("plm")
// });
//
// $('.datepicker').datepicker({
//     monthsFull: ['Ianuarie', 'Februarie', 'Martie', 'Aprilie', 'Mai', 'Iunie', 'Iulie', 'August', 'Septembrie', 'Octombrie',
//         'Noiembrie', 'Decembrie'],
//     weekdaysShort: ['Dum', 'Lun', 'Mar', 'Mie', 'Joi', 'Vin', 'Sam'],
//     clear: 'effacer',
//     formatSubmit: 'dd/mm/yyyy'
// });
//
// $('.datepicker').datepicker({
// // Escape any “rule” characters with an exclamation mark (!).
//     format: 'You selecte!d: dddd, dd mmm, yyyy',
//     formatSubmit: 'yyyy/mm/dd',
//     hiddenPrefix: 'prefix__',
//     hiddenSuffix: '__suffix'
// });

// (function() {
//     'use strict';
//     window.addEventListener('load', function() {
// // Fetch all the forms we want to apply custom Bootstrap validation styles to
//         var forms = document.getElementsByClassName('needs-validation');
// // Loop over them and prevent submission
//         var validation = Array.prototype.filter.call(forms, function(form) {
//             form.addEventListener('submit', function(event) {
//                 if (form.checkValidity() === false) {
//                     event.preventDefault();
//                     event.stopPropagation();
//                 }
//                 form.classList.add('was-validated');
//             }, false);
//         });
//     }, false);
// })();

// $(document).ready(function() {
//     $('.datepicker').pickadate();
//     $('.datepicker').removeAttr('readonly');
// });
document.getElementsByClassName("datepicker")[0].addEventListener("click", myFunction);
function myFunction() {
    $('.datepicker').pickadate();
}

