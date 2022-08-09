

function newform(){
 var data = $('form').serialize() ;

$.ajax({
    url: '/new/submit',
    type: 'post',
    data: data,
    success: function () {
        swal({
            title: "Form Submit!",
            text: "Suceess message sent!!",
            icon: "success",
            button: "Ok",
            timer: 2000
        });
        $('#acknowledgement_section').removeClass('hide');

    },
    error: function () {
        swal("Error deleting!", "Please try again", "error");
    }
    
   
});
}


