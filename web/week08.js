var http = require("http");
var url = require("url");
    function onRequest(req, res) {
    console.log("Received a request for: " + req.url);
    var myUrl = url.parse(req.url);
    //home page
    if (myUrl.pathname == '/home') {
	res.write("<h1>Welcome to the Home Page</h1>");
    }
    //Get JSON data
    else if(myUrl.pathname == '/getData') {
    }
    //Show error page
    else {
	window.location.pathname = "https://blooming-sierra-50448.herokuapp.com/noPage.html";
    }
}

var server = http.createServer(onRequest);
server.listen(8888);

console.log("The server is now listening on port 8888...");