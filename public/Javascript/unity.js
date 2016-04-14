var pen1 = document.getElementById("pen1"),
	pen2 = document.getElementById("pen2"),
    profil = document.getElementById("profil");

pen1.onclick = function() {
  if ( profil.children[0].children[0].tagName != "LABEL") {
    profil.children[0].children[0].outerHTML = "<label for='profil-edit'><strong>"+profil.children[0].children[0].innerHTML+"</strong></label>";
    profil.children[0].children[1].outerHTML = "<input id='profil-edit' value='"+profil.children[0].children[1].innerHTML+"'>";
  } else {
    profil.children[0].children[0].outerHTML = "<strong>"+profil.children[0].children[0].innerHTML+"</strong>";
    profil.children[0].children[1].outerHTML = "<span>"+profil.children[0].children[1].value+"</span>";
  }
}
pen2.onclick = function() {
  if ( profil.children[1].children[0].tagName != "LABEL") {
     profil.children[1].children[0].outerHTML = "<label for='profil-edit'><strong>"+profil.children[1].children[0].innerHTML+"</strong></label>";
    profil.children[1].children[1].outerHTML = "<input id='profil-edit' value='"+profil.children[1].children[1].innerHTML+"'>";
  } else {
    profil.children[1].children[0].outerHTML = "<strong>"+profil.children[1].children[0].innerHTML+"</strong>";
    profil.children[1].children[1].outerHTML = "<span>"+profil.children[1].children[1].value+"</span>";
  }
}

