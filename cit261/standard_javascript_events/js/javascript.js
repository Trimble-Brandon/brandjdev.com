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

function fullMessage() {
    document.getElementById("paragraph").innerHTML = "Lorem ipsum dolor sit amet, "
    + "pro no tantas nominavi honestatis, cibo facilisi partiendo ad pri. Eu "
    + "molestie pertinax pro, pro paulo accusata cu. Pro ad prompta meliore. "
    + "In est etiam praesent, ius ea hinc possim urbanitas. Ridens quaestio no "
    + "vim, tollit commodo suscipiantur ea pri, omnes eruditi necessitatibus mel "
    + "ea. Et vix ceteros moderatius. Adhuc reque suscipiantur mel at. Nibh "
    + "ludus tibique ea duo, nec detraxit atomorum eloquentiam ex, sit utinam "
    + "scribentur id. Tempor perpetua eum ut, ne affert scripta molestie est. "
    + "Cibo magna principes vel ex. Cu fabulas lobortis nominati duo, no "
    + "vituperata reformidans vim. Populo salutatus vis cu, et error doctus "
    + "cotidieque qui. Vel tota pertinax convenire an. Ad elit aliquid sed, "
    + "illum voluptatum cum cu. Simul doming apeirian eu vel, stet case "
    + "patrioque in vix, pri duis nominavi legendos ex. No sit graece essent "
    + "maluisset. Pro ad denique delicata, atomorum consequuntur est ut. Ex eos "
    + "quem atqui causae. Vel congue civibus reprehendunt te, ad quaeque "
    + "antiopam mediocrem eos. Debet corrumpit deseruisse has no. Dissentiet "
    + "philosophia et usu, iriure accumsan copiosae has id. Causae regione "
    + "adipisci ne eam. Et has primis facilisis repudiare, pri ad detracto "
    + "deleniti ponderum, novum oratio pertinax et quo. Cu eam omnis diceret "
    + "lobortis. Id cum maiorum epicuri moderatius. Eam prompta accusata ea. "
    + "Id omnis interesset qui, persius legimus quaestio mea te, has mutat "
    + "liber ad.";
}