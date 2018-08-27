$(document).ready(function(){
    $("#businessname").prop('disabled',true);

    $('.city').select2({
        placeholder: 'choose city',
        tags: true
    });

    $('.state').select2({
        placeholder: 'choose your state',
        tags: true
    });

    $('.country').select2({
        placeholder: 'choose your country',
        tags: true
    });

    $('.designation').select2({
        tags: true
    });

    $('.year').select2({
        placeholder: 'year established',
        tags: true
    });

    $('.products').select2({
        placeholder: 'search by products/services name',
        tags: true,
        multiple: true
    });

});

for (i = new Date().getFullYear(); i > 1950; i--)
{
    $('#yearpicker').append($('<option />').val(i).html(i));
}


