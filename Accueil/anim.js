function toggle_text() {
  var span = document.getElementById("span_txt");
  if(span.innerHTML != "") {
    span.innerHTML = "";
  } else {
    span.innerHTML = "Nous sommes une jeune start-up crée en 2018 et nous développons des solutions techniques pour nos clients. Nous sommes composée de 6 collaborateurs et l’année dernière nous avons réalisé un chiffre d’affaire de 500.000€.";
  }
}