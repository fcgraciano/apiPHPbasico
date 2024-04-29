<label>Curso</label>
<input name="curso" id="curso" /><br />

<label>Vagas</label>
<input name="vagas" type="number" id="vagas" /><br />

<label>Periodo</label>
<input name="periodo" id="periodo" /><br />

<div id="demo"></div>

<button onclick="enviar()">
    Enviar para o PHP
</button>


<script>
function enviar(){


    const dbParam = JSON.stringify(
        {
            "curso": document.querySelector("#curso").value,
            "vagas": document.querySelector("#vagas").value,
            "periodo": document.querySelector("#periodo").value
        }
    );
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        const myObj = JSON.parse(this.responseText);
        console.log(myObj);
        document.getElementById("demo").innerHTML = myObj;
    }
    xmlhttp.open("POST", "http://localhost:8081/api/back.php");
    xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xmlhttp.send("dados="+dbParam );

}
</script>
