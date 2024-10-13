let timer;
let isRunning = false;
let time = 0;

function startTimer() {
    if (!isRunning) {
        isRunning = true;
        timer = setInterval(() => {
            time++;
            updateDisplay();
        }, 1000);
    }
}

function pauseTimer() {
    if (isRunning) {
        isRunning = false;
        clearInterval(timer);
    }
}

function continueTimer() {
    if (!isRunning) {
        isRunning = true;
        timer = setInterval(() => {
            time++;
            updateDisplay();
        }, 1000);
    }
}

function stopTimer() {
    isRunning = false;
    clearInterval(timer);
    time = 0;
    updateDisplay();
}

function updateDisplay() {
    const minutes = Math.floor(time/60);
    const seconds = time % 60;
    document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
    document.getElementById('seconds').textContent = String(minutes).padStart(2, '0');
}
