<!DOCTYPE HTML>
<html lang="en-GB">
<head>
    <title>
        Luke Skywalker Bot
    </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/star_wars.css">
    <script defer type="text/javascript" src="js/jquery.min.js"></script>
    <script defer type="text/javascript" src="js/text_chatbot.js"></script>
    <script defer type="text/javascript" src="js/speech_chatbot.js"></script>
    <script type="text/javascript">
        let cbAutoSend = 'checked';
    </script>

</head>

<body>
<section class="container">
    <div class="avatar_holder">
        <div class="bot_avatar">
            <img src="assets/Luke-face.jpg">
        </div>
    </div>
    <div id="responseHolder">
        <div id="responseContent">
        </div>
    </div>
    <div id="speechcontainer">
        <div id="info">Click on the microphone to chat with voice</div>
        <div id="button_panel">
            <button id="btnMicrophone" type="button" value="microphone" onclick="microphoneClick()">
                <img id="start_img" src="assets/mic.gif" alt="Start"></button>
        </div>
        <div id="results">
            <span id="final_span" class="final"></span>
            <span id="interim_span" class="interim"></span>
            <p>
        </div>
    </div>

    <div id="formpanel">
        <form id="frmChat" action="#">
            <p>Write your name and type your message for Luke, or click the microphone to speak:</p>
            <table id="form_table">
                <tr>
                    <td>Name:</td>
                    <td>
                        <input type="text" id="txtUser" name="user" size="20" value=" "/>
                        <input type="hidden" name="send"/>
                    </td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td><input type="text" name="message" id="txtMessage" size="80"/></td>
                    <td colspan="2"><input type="submit" name="send" value="Send Value"/></td>
                </tr>
            </table>
        </form>
        <div class="autosend">
            <input type="checkbox" name="autosend" value="checked" checked
                   onclick="if (this.checked) {cbAutoSend = this.value} else { cbAutoSend = '' }"/>
        </div>
    </div>
</section>
</body>
</html>

    

