const pswrdField = document.querySelector(".signup input[type='password']");
toggleBtn = document.querySelector(".signup .field i");


toggleBtn.onclick = ()=>{
    if(pswrdField.type == "password"){
        pswrdField.type = "text";
        toggleBtn.classList.add("active");
    }
    else{
        pswrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}


