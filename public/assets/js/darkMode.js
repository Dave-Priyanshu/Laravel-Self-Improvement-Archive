document.addEventListener('DOMContentLoaded', function() {
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    // Load previously saved dark mode preference
    const darkMode = localStorage.getItem('darkMode');
    if (darkMode === 'enabled') {
        body.classList.add('dark-mode');
    }

    // Toggle dark mode on button click
    darkModeToggle.addEventListener('click', function() {
        body.classList.toggle('dark-mode');
        
        // Save the preference to localStorage
        if (body.classList.contains('dark-mode')) {
            localStorage.setItem('darkMode', 'enabled');
        } else {
            localStorage.removeItem('darkMode');
        }
    });
});

