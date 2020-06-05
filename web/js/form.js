//Кликающая кнопка
var res = $(".dropdown-menu1");
$(".knop").on("click", funk);

$(document).click(function(e) {
    if ($(e.target).closest(res).length || $(e.target).closest('.knop').length) return;
    res.fadeOut(100);
    e.stopPropagation();
});

function funk(){
    if(res.css("display") == "none"){
        res.fadeIn(100);
    }
    else{
        res.fadeOut(100);
    }
}



//Выпадающее меню
var id_menu = new Array('sub_menu_1','sub_menu_2','sub_menu_3');
startList = function allclose() {
    for (i=0; i < id_menu.length; i++){
        document.getElementById(id_menu[i]).style.display = "none";
    }
}
function openMenu(id){
    for (i=0; i < id_menu.length; i++){
        if (id != id_menu[i]){
            document.getElementById(id_menu[i]).style.display = "none";
        }
    }
    if (document.getElementById(id).style.display == "block"){
        document.getElementById(id).style.display = "none";
    }else{
        document.getElementById(id).style.display = "block";
    }
}
window.onload=startList;