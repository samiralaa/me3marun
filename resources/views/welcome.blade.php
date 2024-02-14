<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Artificial Intelligence Engineering Landing Page</title>
<link rel="stylesheet" href="styles.css">
<style>
/* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    margin: auto;
    overflow: hidden;
}

/* Header */
header {
    background: url('{{ asset('image/pexels-olga-lioncat-7245366.jpg') }}') no-repeat center center/cover;
    height: 100vh;
    color: #fff;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.logo {
    font-size: 24px;
    font-weight: bold;
    margin-top: 20px;
}

.hero h1 {
    font-size: 3em;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2em;
    margin-bottom: 30px;
}

.btn {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #45a049;
}

/* Sections */
.section {
    padding: 50px 0;
}

.section h2 {
    margin-bottom: 30px;
}

/* Footer */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}
</style>
</head>
<body>

<header>
    <div class="container">
        <div class="logo">AI Engineering</div>
    </div>
    <div class="hero">
        <h1>Artificial Intelligence Engineering</h1>
        <p>Transforming Ideas into Intelligent Solutions</p>
        <a href="#contact" class="btn">Get Started</a>
    </div>
</header>

<section class="section">
    <div class="container">
        <h2>Services</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non neque sit amet enim tempor mollis. Curabitur non lectus sed lorem maximus auctor.</p>
        <!-- Add your service cards here -->
    </div>
</section>

<section class="section">
    <div class="container">
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non neque sit amet enim tempor mollis. Curabitur non lectus sed lorem maximus auctor.</p>
    </div>
</section>

<footer>
    <div class="container">
        <p>&copy; 2024 Artificial Intelligence Engineering. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
