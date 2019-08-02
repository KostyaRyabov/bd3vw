function SetUrl(cb, id_iframe, url) {
    var el = document.getElementById(id_iframe);

    if (cb){
        el.src = url;
    }else{
        setTimeout(function(){ el.src = "";},500);
    }
}
function Reload(cb){
    setTimeout(function(){ 
    	if (!cb){
	           $("#main").load("index.php #main");
	       }
	   },500);
}