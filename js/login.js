
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString)


if (urlParams.has('msg') && urlParams.has('type')) {
    const msg = urlParams.get('msg');
    const type = urlParams.get('type');

    showMessage(type, msg);
}



