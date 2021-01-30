function habilitar() {
    nombre = document.getElementById("name").value;
    desc = document.getElementById("description").value;
    archivo = document.getElementById("file-5").files.length;
    val = 0;
    if (nombre == "") {
        val++;
    }
    if (desc == "") {
        val++;
    }
    if (archivo == '0') {
        val++;
    }
    if (val == 0) {
        document.getElementById("submit-all").disabled = false;
    }else{
        document.getElementById("submit-all").disabled = true;
    }
}
document.getElementById("name").addEventListener("keyup", habilitar);
document.getElementById("description").addEventListener("keyup", habilitar);
document.getElementById("file-5").addEventListener("change", habilitar);
