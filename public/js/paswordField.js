let changeInputToText = (eyeBtn,inputField)=>{
    let  eye_btn = document.querySelector(eyeBtn);
    let input_Field = document.querySelector(inputField);
    let change = false;
    eye_btn.addEventListener('click',()=>{
        if(change){
            eye_btn.setAttribute('class','im im-eye eye-icon');
            input_Field.setAttribute("type", "password");
            change = false;

        }else{
            eye_btn.setAttribute('class','im im-eye-off eye-icon');
            input_Field.setAttribute("type", "text");
            change = true;
        }
    })
}


changeInputToText('#eye-btn','.password-filed');
changeInputToText('#re-eye-btn','.re-password-filed');