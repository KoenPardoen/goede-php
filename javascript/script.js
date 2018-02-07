function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('time').innerHTML = "het is nu " + h + ":" + m + ":" + s;
    var t  = setTimeout (startTime, 500);
    refreshAt(12,0,0);
    refreshAt(18,0,0);
    refreshAt(24,0,0);
}

  setTimeout(function(){
   window.location.reload(1);
}, 64525);

  function checkTime(i) {
    if (i < 10) {i = "0" + i};
    return i;
}

function refreshAt(hours, minutes, seconds) {
    var now = new Date();
    var then = new Date();

    if(now.getHours() > hours ||
       (now.getHours() == hours && now.getMinutes() > minutes) ||
        now.getHours() == hours && now.getMinutes() == minutes && now.getSeconds() >= seconds) {
        then.setDate(now.getDate() + 1);
    }
    then.setHours(hours);
    then.setMinutes(minutes);
    then.setSeconds(seconds);

    var timeout = (then.getTime() - now.getTime());
    setTimeout(function() { window.location.reload(true); }, timeout);
}
