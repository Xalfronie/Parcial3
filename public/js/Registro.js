document.getElementById('password').addEventListener('input', function() {
    const value = this.value;
    const minChars = value.length >= 8;
    const upper = /[A-Z]/.test(value);
    const lower = /[a-z]/.test(value);
    const number = /\d/.test(value);
    const special = /[@$!%*?&]/.test(value);

    document.getElementById('minChars').style.color = minChars ? 'green' : '';
    document.getElementById('upper').style.color = upper ? 'green' : '';
    document.getElementById('lower').style.color = lower ? 'green' : '';
    document.getElementById('number').style.color = number ? 'green' : '';
    document.getElementById('special').style.color = special ? 'green' : '';
});