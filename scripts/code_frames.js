

setInterval( function ()
{
var B = document.body, 
    DE = document.documentElement,
    O = Math.min (B.clientHeight, DE.clientHeight); if (!O) O = B.clientHeight;
var S = Math.max (B.scrollTop, DE.scrollTop),
    C = Math.max (B.scrollHeight, DE.scrollHeight);

    document.getElementById("top_border").style.height = String((S < 50)?S:50) + "px";
    document.getElementById("bottom_border").style.height = String(((C - (O + S)) < 50)?(C - (O + S)):50) + "px";
}, 50);

        