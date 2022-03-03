function selectedNavLink(pagename) {
    var conseilsLink = document.getElementById('conseils-link');
    var stadesLink = document.getElementById('stades-link');
    var plantesLink = document.getElementById('plantes-link');

    switch (pagename) {
        case '/pages/conseils.php':
            conseilsLink.id = 'selected-link';
            break;
        case '/pages/stadeA.php':
            stadesLink.id = 'selected-link';
            break;
        case '/pages/stadePA.php':
            stadesLink.id = 'selected-link';
            break;
        case '/pages/plantes.php':
            plantesLink.id = 'selected-link';
            break;
        default:
            break;
    }
}