function handleDateChanger(date) {
    var format = date.value;

    date.value = changeFormat(format);
}

function changeFormat(value) {
    const dateArray = value.split("/");

    let year = dateArray[2];
    let month = dateArray[1];
    let day = dateArray[0];

    let formattedDate = year + "/" + month + "/" + day;

    return formattedDate;
}