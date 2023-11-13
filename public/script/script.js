var table = new DataTable('#users', {
    language: {
        url: '//cdn.datatables.net/plug-ins/1.13.7/i18n/ca.json',
    },
});
document.addEventListener("DOMContentLoaded", function () {
    var cookieModal = document.getElementById("cookieModal");
    var acceptCookiesButton = document.getElementById("acceptCookies");
    // Verifica si la cookie de aceptación ya está presente
    if (!getCookie("cookiesAccepted")) {
      // Muestra el modal
      cookieModal.style.display = "block";
    }
    acceptCookiesButton.addEventListener("click", function () {
      // Oculta el modal y establece una cookie de aceptación
      cookieModal.style.display = "none";
      setCookie("cookiesAccepted", "true", 365);
    });
  });
  function setCookie(name, value, days) {
    var expires = "";
    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + value + expires + "; path=/";
  }
  function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(";");
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) === " ") c = c.substring(1, c.length);
      if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  }