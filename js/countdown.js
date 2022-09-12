const countdown = () => {
    const releaseDate = new Date("Feb 24, 2022 11:59:59").getTime();
    const currentDate = new Date().getTime();
    const result = releaseDate - currentDate;

    const seconds = 1000;
    const minutes = seconds * 60;
    const hours = minutes * 60;
    const days = hours * 24;

    //using floor to round the returned value down to whole number
    const outputDays = Math.floor(result / days);
    const outputHours = Math.floor((result % days) / hours);
    const outputMinutes = Math.floor((result % hours) / minutes);
    const outputSeconds = Math.floor((result % minutes) / seconds);

    document.querySelector('.day').innerText = outputDays; 
    document.querySelector('.hour').innerText = outputHours; 
    document.querySelector('.minute').innerText = outputMinutes; 
    document.querySelector('.second').innerText = outputSeconds; 
};

//constantly calls the function, eliminates need to refresh page in browser to get updated time
setInterval(countdown, 1000);