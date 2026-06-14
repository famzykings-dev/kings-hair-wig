function handleClick(event, page) {
    event.preventDefault();
    showContent(page);

    // remove active from all
    document.querySelectorAll('#sidebar a').forEach(link => {
        link.classList.remove('active');
    });

    // add active to clicked
    event.currentTarget.classList.add('active');
}

function showContent(page) {
    const content = {
        home: '<h1>Home</h1><p>Welcome to the dashboard.</p>',
        profile: '<h1>Profile</h1><p>Your profile info here.</p>',
        settings: '<h1>Settings</h1><p>Manage your settings.</p>',
        reports: '<h1>Reports</h1><p>Your reports appear here.</p>'
    };

    document.getElementById('content-container').innerHTML =
        content[page] || '<h1>Page not found</h1>';
}

function logout() {
    alert('You have logged out.');
}

function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
}
