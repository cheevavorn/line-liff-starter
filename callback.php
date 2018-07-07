<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIFF Starter</title>
</head>

<body>
    <h1>Welcome to callback page</h1>
    <a href="page2.php">go to page 2</a><br/>
    <div id="profilepicturediv">
    </div><br/>
    <div id="useridprofilefield"></div><br/>
    <div id="displaynamefield"></div><br/>
    <div id="statusmessagefield"></div><br/>
    <script src="https://d.line-scdn.net/liff/1.0/sdk.js"></script>
    <script>
        window.onload = function (e) {
            liff.init(function (data) {
                initializeApp(data);
            });
        };

        function initializeApp(data){

            liff.getProfile().then(function (profile) {
                document.getElementById('useridprofilefield').textContent = profile.userId;
                document.getElementById('displaynamefield').textContent = profile.displayName;

                var profilePictureDiv = document.getElementById('profilepicturediv');
                if (profilePictureDiv.firstElementChild) {
                    profilePictureDiv.removeChild(profilePictureDiv.firstElementChild);
                }
                var img = document.createElement('img');
                img.src = profile.pictureUrl;
                img.alt = "Profile Picture";
                profilePictureDiv.appendChild(img);

                document.getElementById('statusmessagefield').textContent = profile.statusMessage;
            }).catch(function (error) {
                window.alert("Error getting profile: " + error);
            });
        }
    </script>
</body>