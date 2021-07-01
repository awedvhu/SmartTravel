      let newTimer =()=> {
        let date = new Date();
        let str = date.toLocaleDateString();
        str += "  " + date.toLocaleTimeString();
        let odiv = document.getElementById("time");
        odiv.innerHTML = str;
        setTimeout(newTimer, 1000);
      }    
      window.onload =()=>{
        newTimer();
      }
