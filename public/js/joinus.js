let imagePreview = (inputfield,output)=>{
    let input = document.querySelector(inputfield);
    
    if(input.files && input.files[0]){
        let reader = new FileReader;
        reader.onload = (e)=>{
            $(output).css('background-image','url("'+e.target.result+'")' );

        }
        reader.readAsDataURL(input.files[0]);
    }
}

// $('#profile_inputfield').change(function (e) { 
    
//     alert('conneted');

//     imagePreview('#profile_inputfield','#profilePic');
// });]


$('#profile_inputfield').change(()=>{

    imagePreview('#profile_inputfield','#profilePic');
});



// document.getElementById('state').addEventListener('change',()=>{

//     let senddata = document.getElementById('state').value;

//     $.get( "/user/getDistrict", { state_id: senddata } )
//     .done(function( data ) {
//         $('#District').empty();
//         for(let i = 0; i<data.length;i++){
//             $('#District').append('<option value="'+ data[i].id +'">'+ data[i].districtsName +'</option>');
//         }
//     });


// });

$('#state').change(()=>{
    let sendData = $('#state').val();

    fetch('/user/getDistrict/'+sendData,{
        method:'GET',
    })
    .then(response => response.json())
    .then(data => {
        $('#District').empty();
                for(let i = 0; i<data.length;i++){
                    $('#District').append('<option value="'+ data[i].id +'">'+ data[i].districtsName +'</option>');
                }
    })
});