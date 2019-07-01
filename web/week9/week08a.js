var theFunction;
function createServer(f) {
    theFunction = f;
}

function listen(port) {
    while(true)
	{
	    theFunction();
	}
}