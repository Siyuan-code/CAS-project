listenerList = document.querySelector(".wrapper .container");

setInterval(()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "browsedata.php", true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                listenerList.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 1000) //this function will run frequently after 500ms
