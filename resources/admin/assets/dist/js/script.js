$(document).ready(function (){
    $(' .content-wrapper').on('click',' .content-header', function (event){
        $.ajax({
            method: "GET",
            url: "/ajax/getData",
            data: { name:"Alex", location: "Zybkoe"}
        }).done(function ( data, textStatus, jqXHR){
            console.log("data", data);
            console.log("texStatus", textStatus);
            console.log("jqXHR", jqXHR);
        }).fail(function (){
            alert("error");
        }).always(function (){
            alert("complete");
        })
    })
});

$(function () {
    $("#example1").DataTable();

    //Initialize Select2 Elements
    $(".select2").select2();
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });
    // //iCheck for checkbox and radio inputs
    // $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
    //     checkboxClass: 'icheckbox_minimal-blue',
    //     radioClass: 'iradio_minimal-blue'
    // });


});

$(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
    //Date picker
    $('#datepicker').datepicker({
        autoclose: true
    });
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
        checkboxClass: 'icheckbox_minimal-blue',
        radioClass: 'iradio_minimal-blue'
    });
});



