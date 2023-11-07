const btn = document.querySelector(".btn-toggle");
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");

btn.addEventListener("click", function () {
  if (prefersDarkScheme.matches) {
    document.body.classList.toggle("light");
    var theme = document.body.classList.contains("light") ? "light" : "dark";
  } else {
    document.body.classList.toggle("dark");
    var theme = document.body.classList.contains("dark") ? "dark" : "light";
  }
  document.cookie = "theme=" + theme;
});
