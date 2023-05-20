const name = document.getElementById('name');
const password = document.getElementById('password');
const form = document.getElementById('form');
const errorElement = document.getElementById('error');

form.addEventListener('submit', (e) =>
{
    let messages = []
    if (name.value === '' || password.value === '')
    {
        messages.push('Name and Passwords are required')
    }
    if (password.value.length <= 6)
    {
        // messages.push('Your password length: ').password.length;
        messages.push('At-least 8 characters long password required!');
    }
    if (password.value.length >= 20)
    {
        messages.push('Password too long must be less than 20 characters!')
    }
    if (messages.length > 0)
    {
        e.preventDefault()
        errorElement.innerText = messages.join(', ')
    }
})