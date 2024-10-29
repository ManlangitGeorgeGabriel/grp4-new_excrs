function validateForm() {
    const name = document.getElementById('name').value;
    const message = document.getElementById('message').value;
    if (!name || !message) {
        alert("Please fill out all fields.");
        return false;
    }
    return true;
}