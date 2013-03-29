function autreChoix(){
//alert("lol");
    var e = document.getElementById("selectMotif");
    var choix = e.options[e.selectedIndex].value;
    if(choix == 'autreMotif'){
        document.getElementById("autreMotif").disabled = false;
    }
    else
        {
            document.getElementById("autreMotif").disabled = true;
            document.getElementById("autreMotif").value = "";
        }
}

function autoriseEchantillon()
{
    var e = document.getElementById("checkRecue");
    if(e.checked == true){
        document.getElementById("echantillon1").disabled = false;
        document.getElementById("echantillon1").value = 1;
    }else{
        document.getElementById("echantillon1").disabled = true;
        document.getElementById("echantillon1").value = "";
    }  
}

function autoriseEchantillon2(){
    var e = document.getElementById("checkRecue2");
    if(e.checked == true){
        document.getElementById("echantillon2").disabled = false;
        document.getElementById("echantillon2").value = 1;
    }else{
        document.getElementById("echantillon2").disabled = true;
        document.getElementById("echantillon2").value = "";
    }
}

function ajoutEchantillon(){
    if(document.getElementById("echantillon1").disabled == false){
        document.getElementById("echantillon1").value ++;
    }
}

function ajoutEchantillon2(){
    if(document.getElementById("echantillon2").disabled == false){
        document.getElementById("echantillon2").value ++;
    }
}



