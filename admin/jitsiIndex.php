
<html>
    <head>
            <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>Hiraya Photography</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="css/vendor.css">
        <link rel="stylesheet" href="css/styles.css">

        <!-- script
        ================================================== -->
        <script src="js/modernizr.js"></script>
        <script defer src="js/fontawesome/all.min.js"></script>

        <!-- favicons
        ================================================== -->
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">

        <title>Meeting</title>
        <script src="https://meet.jit.si/external_api.js"></script>
    </head>
    
    <body>
        <button id="start" type="start">Create Meeting</button>
        <!-- <button id="invite" type="invite">Invite Admin</button>
        <button id="schedule" type="schedule">Schedule Meeting</button> -->
        <button id="end" type="end" onClick = "return confirm('You are about to end the meeting. Proceed?')">End Meeting</button>
        <!-- <button id="record" type="record">Record Meeting</button> -->

        <div id="jitsi-container"></div>
        <div id="jitsi-container" data-aos="fade-up">
            <div> <h2> Instructions </h2> 
                <p> 1. Click on the button to create a meeting. </p>
                <p> 2. Once the meeting is created, you can invite the admin to join the meeting. </p>
                <p> 3. Once the admin joins the meeting, you can schedule the meeting. </p>
                <p> 4. Once the meeting is scheduled, you can end the meeting. </p>
            </div>
        </div>

        <script>
            var button = document.querySelector('#start');
            var container = document.querySelector('#jitsi-container');
            var api = null;
            button.addEventListener('click', () => {
                const domain = "meet.jit.si";
                const options = {
                    "roomName": "Hiraya Photo Studio",
                    "parentNode": container,
                    "width": "60%",
                    "height": "50%",
                    // userInfo: {
                    //     email: "jeffrey.galvez@pcsfi.edu.ph",
                    //     name: "Jeffrey Galvez"
                    // }
                };
                api = new JitsiMeetExternalAPI(domain, options);

            });


            var button = document.querySelector('#end');
            var container = document.querySelector('#jitsi-container');
            var api = null;
            button.addEventListener('click', () => {
                api.dispose();
            });

            // var button = document.querySelector('#record');
            // var container = document.querySelector('#jitsi-container');
            // var api = null;
            // button.addEventListener('click', () => {
            //     api.executeCommand('startRecording', {
            //         mode: 'record-conference',
            //         shouldShare: false,
            //         fileName: 'Hiraya_Photo_Studio',
            //         maxLength: '60',
            //     });
            // });

            // var button = document.querySelector('#schedule');
            // button.addEventListener('click', () => {
            //     api.executeCommand('schedule');
            // });

            // var button = document.querySelector('#invite');
            // button.addEventListener('click', () => {
            //     api.invite(['jeffrey.galvez@pcsfi.edu.ph']).then(() => {
            //         console.log('Invitation sent');
            //     }).catch (() => {
            //         console.log('Invitation failed');
            //     });
            // });

        </script>

            <!-- Java Script
        ================================================== -->
        <script src="js/jquery-3.5.0.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>