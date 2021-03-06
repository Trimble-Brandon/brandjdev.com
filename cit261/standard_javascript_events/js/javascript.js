var message = '<div class=\"header\"><a id=\"close\" href="#">close X</a></div>';
message += '<div><h2>Welcome</h2>';
message += 'Hello! Welcome to the Events example page! ';
message += 'I hope you enjoy this example.</div>';

var elWelcome = document.createElement('div');
elWelcome.setAttribute('id', 'welcome');
elWelcome.innerHTML = message;
document.body.appendChild(elWelcome);

function closeWelcome() {
    document.body.removeChild(elWelcome);
}

var elClose = document.getElementById('close');
elClose.addEventListener('click', closeWelcome, false);

function createCircle() {
    var greenCircle = document.createElement('div');
    greenCircle.setAttribute('id', 'green-circle');
    greenCircle.setAttribute('onclick', 'animate()');
    document.getElementById('content1').appendChild(greenCircle);
}
