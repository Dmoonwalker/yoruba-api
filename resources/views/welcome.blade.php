<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fintech Translation API</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Icons" />
    <style>
        body {
            background-color: #f4f8fb; /* Light background for consistency */
            color: #333; /* Dark text for readability */
            font-family: 'Arial', sans-serif;
        }
        .hero {
            background-color: #ffffff;
            padding: 50px 0;
            text-align: center;
        }
        .hero .title {
            font-size: 2.5em;
            color: #023047;
            margin-bottom: 0.5em;
        }
        .hero .subtitle {
            color: #555;
            font-size: 1.2em;
            margin-bottom: 1.5em;
        }
        .query-box {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }
        .how-to-use-section, .features-section {
            padding: 50px 0;
            background-color: #ffffff; /* Consistent white theme */
        }
        .how-to-use-section .title, .features-section .title {
            color: #333; /* Consistent text color */
        }
        .how-to-use-section .card, .features-section .card {
            border: 1px solid #e0e0e0;
            background-color: #ffffff; /* White card background */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .how-to-use-section .card:hover, .features-section .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .how-to-use-section .icon, .features-section .icon {
            font-size: 2.5em;
            color: #1e88e5; /* Accent color for icons */
            margin-bottom: 15px;
        }
        .code-box {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
            color: #333;
            font-family: 'Courier New', Courier, monospace;
            white-space: pre-wrap;
            word-wrap: break-word;
            border: 1px solid #ddd;
        }
        .code-box p {
            color: #c586c0;
        }
    </style>
</head>
<body>

    <!-- Header -->
    <nav class="navbar is-spaced">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="#">
                    <img src="logo.png" alt="Logo">
                </a>
            </div>
            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-end">
                    <a class="navbar-item has-text-black" href="#">Home</a>
                    <a class="navbar-item has-text-black" href="#">Features</a>
                    <a class="navbar-item has-text-black" href="#">Solutions</a>
                    <a class="navbar-item has-text-black" href="#">API</a>
                    <a class="navbar-item button is-primary" href="#">Let's Talk</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="title">One API, Instant Translation for Fintech</h1>
            <h2 class="subtitle">Provide real-time Yoruba to English translation with our robust and secure API.</h2>
            <div class="query-box">
                <input class="input is-medium" type="text" placeholder="Enter Yoruba text for translation" id="query-input">
                <button class="button is-primary is-medium" onclick="testApi()">Translate</button>
            </div>
            <div class="result-box" id="result-box" style="display:none; margin-top: 20px;">
                <p id="result-text" class="has-text-centered">Your translation will appear here...</p>
            </div>
        </div>
    </section>

    <!-- How to Use Our API Section -->
    <section class="section how-to-use-section">
        <div class="container">
            <h2 class="title">How to Use Our API</h2>
            <div class="columns">
                <div class="column is-one-third">
                    <div class="card">
                        <div class="card-content">
                            <h3 class="title is-5">Step 1: Sign Up</h3>
                            <p>Create an account to access our API and start using translation services.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3 class="title is-5">Step 2: Get API Key</h3>
                            <p>Obtain your unique API key from the dashboard to authenticate requests.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3 class="title is-5">Step 3: Make a Request</h3>
                            <p>Send a request with the text to be translated, and get instant results.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <h3 class="title is-5">Step 4: Analyze Results</h3>
                            <p>Review the translation results and implement them into your application.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-two-thirds">
                    <div class="code-box">
                        <p>// Example JavaScript Code to Use the API</p>
                        <pre>
// Importing required modules
import fetch from 'node-fetch';

// Function to make a translation request
async function translateText(apiKey, text) {
    const url = `https://api.example.com/translate?text=${encodeURIComponent(text)}&key=${apiKey}`;
    try {
        const response = await fetch(url);
        const data = await response.json();
        console.log('Translation:', data.translation);
    } catch (error) {
        console.error('Error:', error);
    }
}

// Example usage
const apiKey = 'YOUR_API_KEY';
const textToTranslate = 'Ẹ káàárọ̀';
translateText(apiKey, textToTranslate);
                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section features-section">
        <div class="container">
            <h2 class="title has-text-centered">Explore Our Key Features</h2>
            <div class="columns is-multiline">
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <span class="material-icons icon">speed</span>
                            <h3 class="title is-5">Real-time Translation</h3>
                            <p>Translate Yoruba to English instantly with our state-of-the-art API.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <span class="material-icons icon">integration_instructions</span>
                            <h3 class="title is-5">API Integration</h3>
                            <p>Easy integration into your fintech applications using our robust API.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <span class="material-icons icon">verified</span>
                            <h3 class="title is-5">Accurate and Reliable</h3>
                            <p>High accuracy translations you can rely on for critical fintech operations.</p>
                        </div>
                    </div>
                </div>
                <div class="column is-one-quarter">
                    <div class="card">
                        <div class="card-content has-text-centered">
                            <span class="material-icons icon">tune</span>
                            <h3 class="title is-5">Customizable</h3>
                            <p>Tailor our services to meet your specific needs and requirements.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function testApi() {
           Here's the continuation and completion of the HTML structure, focusing on consistency and providing a more comprehensive code example, ensuring a modern and visually appealing design for your API landing page:

```html
                resultText.textContent = "Translated text for: " + query; // Replace this with actual API call result
                resultBox.style.display = 'block';
            } else {
                resultText.textContent = "Please enter some text to translate.";
                resultBox.style.display = 'block';
            }
        }
    </script>

</body>
</html>
