var app={};
var miCallback = function(datos){
    console.log(datos);
    app.fotos=datos;
    var html="";
    html+="<h2>FOTOS</h2>"
    app.fotos.map(fotos => {
        html+="<img src='"+fotos.img+"'></img";
        for(let propiedad of Object.keys(fotos)){
            html+="<li>"+propiedad+": "+fotos[propiedad]+"</li>"
        }
        html+="<hr/>"
    })
}
document.getElementById("results").innerHTML = html;

//DD/MM/AAAA//