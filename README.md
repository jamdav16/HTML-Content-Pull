# HTML-Content-Pull
Grabs the raw HTML from a URL via PHP extraction and breaks it down into an array. The array can then be used to display various pieces of content from the HTML page.

## Getting Started
To get the contents of a page via URL, include the html_pull.php file within your script and initalize a page.
```
// Grab the URL contents
$html = html_pull('http://www.google.com/');
```
You can also extract it as plain text.
```
// Grab the URL contents as plain text
echo html_pull('http://www.google.com/')->plaintext;
```
