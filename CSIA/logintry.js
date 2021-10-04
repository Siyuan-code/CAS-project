const form = document.querySelector(".login form");
loginBtn = form.querySelector(".button input");


form.onsubmit = (e)=>{
    e.preventDefault();  // prevent form from submitting
}

loginBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();  // creating xml ojbect
    xhr.open("POST", "loginstudy.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
                if(data == "success"){
                    location.href = "../CSIA/homeafter.php";
                }
            }
        }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}

