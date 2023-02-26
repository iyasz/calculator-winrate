$('.nav-role').on('click', function () {
    $('.nav-role').removeClass('active');
    $(this).addClass('active');
});

// $(document).ready(function() {
//     $('.js-example-basic-multiple').select2();
// });

// $('#mySelect2').select2({
//     dropdownParent: $('#myModal'),
//     placeholder: 'Select an option'
// });

$('#deleteBtn').on('click', function(){
    swal(`Are you sure you want to remove this hero?`, {
        dangerMode: true,
        cancel: true,
        confirm: true,
        className: "bg-dark-primary",
        buttons: ["Cancel", "Remove"],
        title: "Remove Hero?",
      });

    $('.swal-button--confirm').on('click', function(){
        const heroId = location.pathname.split('/')[3]
        window.location.href = "/hero/"+heroId;
    })
})



