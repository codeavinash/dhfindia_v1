let av = (data)=>{ 
    let selector = document.querySelectorAll(data);

    if(selector.length <= 1){
        return selector[0];
    }else{
        return selector;
    }
}

// =================================

// showing image preview function

// input field and output container

let imagePreview = (inputfield,output)=>{
    let input = av(inputfield);
    if(input.files && input.files[0]){
        let reader = new FileReader;
        reader.onload = (e)=>{
            av(output).style.backgroundImage = 'url("'+e.target.result+'")';
        }
        reader.readAsDataURL(input.files[0]);
    }
}



// =================================

av('.iconBox').addEventListener('click',()=>{
   av('.slider').classList.toggle('slide');
   av('.blankScreen').classList.toggle('no-display')
});

// ======================================================

if(av('.notification')){
    av('.cancle').addEventListener('click',()=>{
        av('.notification').style.display = 'none';
    });
}

// ==============================================================

let check = true;

let addNotification = (data)=>{
    av('.notList').innerHTML = " ";
    for(let i = 0 ;i<data.length ;i++){
        // console.log(data[i].notification);
        let text = document.createTextNode(data[i].notification);
        let a = document.createElement('a');
        let li = document.createElement("li");
        a.setAttribute("href", data[i].link);
        a.appendChild(text);
        li.appendChild(a);
        av('.notList').appendChild(li);
    }
}


av('.notBtn').addEventListener('click',()=>{
    av('#notificationBox').classList.toggle('notificationSlide');

    if(check){

        fetch('/user/notifiactions')
        .then(res => res.json())
        .then(data => addNotification(data));

        

        check = false;
    }else{
        check = true;
    }
    
});