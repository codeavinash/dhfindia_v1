
document.getElementById('state').addEventListener('change',()=>{

    let senddata = document.getElementById('state').value;

    jQuery.get( "/user/getDistrict", { state_id: senddata } )
    .done(function( data ) {
        $('#District').empty();
        for(let i = 0; i<data.length;i++){
            $('#District').append('<option value="'+ data[i].id +'">'+ data[i].districtsName +'</option>');
        }
    });


});
