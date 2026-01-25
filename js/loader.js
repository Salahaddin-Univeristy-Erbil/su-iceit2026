document.addEventListener("DOMContentLoaded", function () {
    const includes = document.querySelectorAll('[data-include]');
    const promises = [];

    includes.forEach(el => {
        const file = el.getAttribute('data-include');
        const promise = fetch(file)
            .then(response => {
                if (response.ok) return response.text();
                throw new Error('Page not found');
            })
            .then(data => {
                el.innerHTML = data;
                // Execute any scripts in the included content
                const scripts = el.querySelectorAll("script");
                scripts.forEach(script => {
                   const newScript = document.createElement("script");
                   if (script.src) {
                       newScript.src = script.src;
                   } else {
                       newScript.textContent = script.textContent;
                   }
                   document.body.appendChild(newScript);
                });
            })
            .catch(err => {
                console.error('Error loading component:', file, err);
                el.innerHTML = 'Error loading content.';
            });
        promises.push(promise);
    });
});
