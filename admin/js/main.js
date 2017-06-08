/**
 * Created by Carla on 07.06.17.
 */

$(function(){
    switchPage("edition");
    $("#lienAccueil").on("click", auAccueil);
});


function switchPage(pageId){
    $("section").hide();
    $("#" + pageId).show();
}

function auAccueil(){
    switchPage("sectionPage");
    $("#menus").hide();

}