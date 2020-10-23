 
 let SubmitForm = (form,path)=>{
    av(form).setAttribute("action", path);
    av(form).submit();
 }


 let deleteBtn = document.querySelectorAll('.deleteBtn');

 deleteBtn.forEach(Element =>{
   Element.addEventListener('click',()=>{
      let action = "/admin/Postcat/"+Element.children[1].textContent;
      SubmitForm('#deleteCat',action);
   })
})

