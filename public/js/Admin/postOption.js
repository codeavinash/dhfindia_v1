$('#summernote').summernote({
    height: 300
});

// showing image preview function

// input field and output container

let imagePreview = (inputfield,output,outputTwo)=>{
    let input = document.querySelector(inputfield);
    
    if(input.files && input.files[0]){
        let reader = new FileReader;
        reader.onload = (e)=>{
            $(output).css('background-image','url("'+e.target.result+'")' );
            $(outputTwo).css('background-image','url("'+e.target.result+'")' );

        }
        reader.readAsDataURL(input.files[0]);
    }
}

$('.file-input').change(function (e) { 
    imagePreview('.file-input','.preview-here-one','.preview-here-two');  
});