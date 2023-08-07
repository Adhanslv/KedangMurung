const scriptURL =
  "https://script.google.com/macros/s/AKfycbzV95Gx_qFl9JQBkshmghXIEtSTwcISdF5awv5GB4Nph-4dEPly2wTZfO3ztDVLijep/exec";
const form = document.forms["KDM-contact"];

form.addEventListener("submit", (e) => {
  e.preventDefault();
  fetch(scriptURL, { method: "POST", body: new FormData(form) })
    .then((response) => console.log("Success!", response))
    .catch((error) => console.error("Error!", error.message));
});
