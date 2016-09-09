/* Functionality for the About page on my personal website
* 
*/

function setup() {
    var aboutSectionDiv = document.getElementById('more-info');
    aboutSectionDiv.style.display = 'none'; // Hides the about section 

    var showMoreLink = document.getElementById('show-more');
    showMoreLink.addEventListener('click', function () {
        toggle(aboutSectionDiv);
        changeLinkText(this);
    }, false);
}

function showDiv(e) {
    e.style.display = 'block';

}

function hideDiv(e) {
    e.style.display = 'none';
    console.log('Hid this div');
}

function toggle(e) {
    if (e.style.display == 'block') {
        hideDiv(e);
    }
    else {
        showDiv(e);
    }
}

function changeLinkText(e) {
    if (e.className == 'visible') {
        e.textContent = 'Hide...';
        e.className = 'hidden-link';
    }
    else {
        e.className = 'visible';
        e.textContent = 'Read More...';
    }
}

// Adds an event listener to the window object. When the window is loaded, we call the setup() method.
window.addEventListener('load', setup, false); 
