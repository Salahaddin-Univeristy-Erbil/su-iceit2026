function updateCountdown() {
    var targetDate = new Date("18 September 2024 08:00:00").getTime();
    var now = new Date().getTime();
    
    var difference = targetDate - now;
    if (difference <= 0) {
      clearInterval(interval);
      document.querySelector("#countdown").innerHTML = "Countdown finished!";
      return;
    }

    var days = Math.floor(difference / (1000 * 60 * 60 * 24));
    var hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((difference % (1000 * 60)) / 1000);

    
    document.querySelector(".days").textContent = days.toString().padStart(2, '0');
    document.querySelector(".hours").textContent = hours.toString().padStart(2, '0');
    document.querySelector(".minutes").textContent = minutes.toString().padStart(2, '0');
    document.querySelector(".seconds").textContent = seconds.toString().padStart(2, '0');
  }

  var interval = setInterval(updateCountdown, 1000);
  updateCountdown();