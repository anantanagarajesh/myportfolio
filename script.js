emailjs.init("ZuwrY7IPD25d9jg-C"); // Replace with your Email.js user ID

document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const data = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value
    };

    emailjs.send("service_7gv3jq6", "template_h3y6zy8", data)
        .then(function(response) {
            alert('Email sent successfully!');
        }, function(error) {
            alert('Email could not be sent:'+error.text);
        });
});