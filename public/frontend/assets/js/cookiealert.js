const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");

// cookieButton.addEventListener("click", () => {
//   cookieContainer.classList.remove("active");
//   localStorage.setItem("acceptCookies", "true");
// });

setTimeout(() => {
    //   if (!localStorage.getItem("acceptCookies")) {
    //     cookieContainer.classList.add("active");
    //   }


    if (!getCookie("acceptCookies")) {
        cookieContainer.classList.add("active");
    }
    cookieButton.addEventListener("click", () => {
        setCookie("acceptCookies", true, 365);
        cookieContainer.classList.remove("active");
    });
    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        var expires = "expires=" + d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
  
}, 2000);