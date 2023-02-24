$('.nav-role').on('click', function () {
    $('.nav-role').removeClass('active');
    $(this).addClass('active');
});

$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

$('#mySelect2').select2({
    dropdownParent: $('#myModal'),
    placeholder: 'Select an option'
});