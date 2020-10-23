let btns = av('.deleteBtn');

let deleteRequest =(element)=>{
    let child = element.children[1].firstChild.data;
    av('#formId').value = child;
    let form = av('#submittingForm');
    let acction = form.getAttribute('action');
    acction +=child;
    form.setAttribute('action',acction);
    form.submit();
}


btns.forEach(element => {
    element.addEventListener('click',()=>{
       deleteRequest(element);
    });
});