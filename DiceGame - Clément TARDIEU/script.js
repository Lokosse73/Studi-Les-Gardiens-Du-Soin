var Turn = 1;
var Global1 = 0;
var Global2 = 0;

var Round = 0;

window.addEventListener("load", function(event) {
    Screen.lockOrientation('landscape');
    SetTurnUI()
});
function New(){
    location.reload();
}
function Roll(){
    var NewNumber = Math.floor(Math.random() * 6) + 1;
    document.getElementById('Dice').src = "images/Dice-" + NewNumber +".png";
    if(NewNumber == 1){
        Round = 0;
        Hold();
    }
    else{
        Round += NewNumber;
    }
    document.getElementById('Round' + Turn).innerHTML = Round;
}
function Hold(){
    if(Turn == 1){
        Global1 += Round;
        Round = 0;
        document.getElementById('Round1').innerHTML = Round;
        document.getElementById('Global1').innerHTML = Global1;
        Turn = 2;
    }
    else{
        Global2 += Round;
        Round = 0;
        document.getElementById('Round2').innerHTML = Round;
        document.getElementById('Global2').innerHTML = Global2;
        Turn = 1;
    }
    if(Global1 >= 100){
        Win(1);
    }
    else if(Global2 >= 100){
        Win(2);
    }
    else{
        SetTurnUI();
    }
}
function SetTurnUI(){
    var h = document.querySelectorAll('h2');
    for(var i = 0; i < h.length; i++){
        console.log(h[i]);
        h[i].classList.remove("YourTurn");
    }
    document.getElementById('Player' + Turn).classList.add("YourTurn");
}

function Win(Winner){
    window.alert("Player " + Winner + " win !");
    New();
}