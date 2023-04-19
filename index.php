<!DOCTYPE html>
<html>

  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL Shortener</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </head>

  <body>
    <center>
      <h1><a href="index.php" style="text-decoration: none; color: #009933; font-family: Arial, sans-serif;">URL Shortener</a></h1>
    </center>
    <form method="post" action="url_shorten.php" id="urlShortenForm">
      <label for="url">URL:</label>
      <input type="text" id="url" name="url" placeholder="Enter URL to shorten" required>
      <center><button type="button" onclick="shortenURL()">Shorten URL</button></center>
          </form>
    <div class="container">
      <!-- existing code -->
      <div class="social-links">
        <a href="https://www.facebook.com/rakhib420" target="_blank"><i class="fab fa-facebook"></i></a>
        <a href="https://api.whatsapp.com/send?phone=8801797951359&text=Hello,%20I'm%20interested%20on%20your%20services." target="_blank"><i class="fab fa-whatsapp"></i></a>
      </div>
      <center>
        <p>Last Update: 19 Apr 2023 4:39 AM</p>
      </center>
    </div>

    <script>
      function shortenURL() {
        var urlInput = document.getElementById('url');
        var url = urlInput.value;
        var keywords = [
          "189230", //Ahsan Habib
          "9hxwkwz",
          "210665",
          "191441",
          "192356",
          "182882", //jahirul vai
          "182847",
          "176457",
          "164316",
          "164855",
          "192517",
          "206641", //sabuz
          "210080",
          "211906",
          "182242", //imran
          "189572",
          "189574",
          "188289",
          "187089",
          "183190",
          "180284",
          "190646",
          "190637",
          "182629",
          "168792",
          "183190",
          "191662",
          "170068",
          "akpiPaZNuW48tx",
          "182012",
          "191824", //Asad
          "190964",
          "190221",
          "x8EhYy15s3okUA",
          "eRTW6d9TDNyTA",
          "178709", //Ridoy
          "191287",
          "172533",
          "183082", //rishad v imran
          "182357", // v imran 
          "189821", // Shuvo
          "188152",
          "keyword3"
        ]; // Add your keywords here

        var validUrl = false;
        for (var i = 0; i < keywords.length; i++) {
          if (url.indexOf(keywords[i]) !== -1) {
            validUrl = true;
            break;
          }
        }

        if (validUrl) {
          // Make an API request to shorten the URL
          $.get('https://kingurl.xyz/api.php?url=' + encodeURIComponent(url), function(response) {
            var shortUrl = response.shorturl;

            // Update the input field with the shortened URL
            urlInput.value = shortUrl;

            // Submit the form with the updated data
            document.getElementById('urlShortenForm').submit();
          });
        } else {
          // Display an error message or take appropriate action for invalid URLs
          alert('Your CPA profile is not registered here.');
        }
      }

      function copyShortenedUrl() {
        var shortenedUrlInput = document.getElementById('shortenedUrl');
        shortenedUrlInput.select();
        document.execCommand('copy');

        // Change the copy button text temporarily
        var copyButton = document.getElementById('copyButton');
        copyButton.innerHTML = 'Copied!';
        setTimeout(function() {
          copyButton.innerHTML = 'Copy';
        }, 2000);
      }
    </script>
  </body>

</html>