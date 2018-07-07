<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIFF Starter</title>
</head>

<body>
    <h1>Welcome to callback page</h1>
    <a href="page2.php">go to page 2</a><br/>
    <script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
    <script>
      liff.init()
      liff.getProfile()
        .then(profile => {
            var name = profile.displayName;
            document.write("<p>" + name + "</p>");
            document.write("<p>" + profile + "</p>");
        })
        .catch((err) => {
            console.log('error', err);
        });
    </script>
</body>