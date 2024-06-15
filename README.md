<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Google Drive API Integration</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f7fafc;
            color: #333;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #2d3748;
        }

        a {
            color: #3182ce;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        code {
            font-family: 'Courier New', Courier, monospace;
            background-color: #edf2f7;
            padding: 2px 6px;
            border-radius: 4px;
        }

        pre {
            background-color: #edf2f7;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }

        pre code {
            display: block;
            white-space: pre;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4299e1;
            color: #fff;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #3182ce;
        }

        .container {
            margin-bottom: 20px;
        }

        .alert {
            padding: 15px;
            background-color: #f0f0f3;
            border-left: 6px solid #4299e1;
            margin-bottom: 20px;
        }

        .alert p {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        .alert p strong {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Laravel Google Drive API Integration</h1>

        <div class="alert">
            <p><strong>Introduction:</strong> This Laravel project integrates Google Drive API for file storage using the <code>laravel-google-drive-storage</code> package. It allows you to store, retrieve, and manage files on Google Drive directly from your Laravel application.</p>
        </div>

        <h2>Table of Contents</h2>
        <ul>
            <li><a href="#prerequisites">Prerequisites</a></li>
            <li><a href="#clone-repository">Clone Repository</a></li>
            <li><a href="#usage">Usage</a></li>
            <li><a href="#additional-information">Additional Information</a></li>
            <li><a href="#contributing">Contributing</a></li>
            <li><a href="#license">License</a></li>
        </ul>

        <h2 id="prerequisites">Prerequisites</h2>
        <ul>
            <li>PHP >= 7.4</li>
            <li>Composer</li>
            <li>Laravel 10</li>
            <li>Google Account with Google Drive API enabled</li>
        </ul>

        <h2 id="clone-repository">Clone Repository</h2>
        <p>Clone the repository:</p>
        <pre><code>git clone &lt;repository-url&gt;
cd &lt;project-folder&gt;</code></pre>

        <p>Replace <code>&lt;repository-url&gt;</code> with the actual URL of this repository.</p>

        <h2 id="usage">Usage</h2>
        <p>After cloning the repository, follow the additional steps mentioned in the README or project documentation to configure and use the Google Drive API integration.</p>

        <h2 id="additional-information">Additional Information</h2>
        <ul>
            <li>Documentation for the <code>laravel-google-drive-storage</code> library: <a href="https://github.com/yaza-putu/laravel-google-drive-storage">laravel-google-drive-storage on GitHub</a></li>
            <li>Google Drive API documentation: <a href="https://developers.google.com/drive">Google Drive API</a></li>
            <li>Laravel documentation: <a href="https://laravel.com/docs">Laravel Documentation</a></li>
        </ul>

        <h2 id="contributing">Contributing</h2>
        <p>Contributions are welcome! Fork the project, make your changes, and submit a pull request.</p>

        <h2 id="license">License</h2>
        <p>This project is open-sourced software licensed under the <a href="LICENSE.md">MIT license</a>.</p>
    </div>
</body>

</html>
