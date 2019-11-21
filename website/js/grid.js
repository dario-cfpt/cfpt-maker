function checkMapContent() {
    if(mapData.includes(166) && mapData.includes(143) && mapData.includes(131) && mapData.includes("char")){
        return true
    }

    let names= ["Style","List","Raw"];
    let results= names.filter(x => x.includes("s"));
    console.log(results); //["List"]
}

$(function() {
    $('form').submit(function(e) {
        if(checkMapContent()){ 
            console.log("okay")
        }
        sendPost(serialize());
        e.preventDefault();
    });
});