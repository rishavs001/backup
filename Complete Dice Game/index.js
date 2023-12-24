var randomnum1=Math.floor(Math.random()*6)+1;
var randomnum2=Math.floor(Math.random()*6)+1;

var randomimg1="images/dice"+randomnum1+".png";
var randomimg2="images/dice"+randomnum2+".png";

var images1=document.querySelectorAll("img")[0];
images1.setAttribute("src",randomimg1);
var images2=document.querySelectorAll("img")[1];
images2.setAttribute("src",randomimg2);

if(randomnum1>randomnum2)
{
    document.querySelector("h1").innerHTML="Player 1 Wins";
}
else if(randomnum1<randomnum2)
{
    document.querySelector("h1").innerHTML="Player 2 Wins";
}
else{
    document.querySelector("h1").innerHTML="Match Draw!!";
}