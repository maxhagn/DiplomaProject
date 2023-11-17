<?php

/**
 * Created by IntelliJ IDEA.
 * User: jakobdinhof
 * Date: 25.09.17
 * Time: 10:42
 */
/**
 * Edited by IntelliJ IDEA.
 * User: maxhagn
 * Date: 01.12.17
 * Time: 19:42
 */

$to = "web.creativepuzzle@gmail.com";
$subject = "Kontaktanfrage";
$nameErr = $mailErr = $telErr = $messageErr = "";
$name = $mail = $tel = $message = $header = "";
$sent = false;


if ($sent == false) {
    echo '<form class="form-horizontal" method="post" action="" role="form" data-toggle="validator">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="mail" class="col-sm-2 control-label">E-Mail *</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="mail" name="mail" placeholder="E-Mail"
                                   required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tel" class="col-sm-2 control-label">Phone</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="tel" name="tel" placeholder="Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message *</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" rows="5" id="message" name="message"
                                      placeholder="your message" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-2 col-sm-offset-10">
                        <button class="btn btn-default" type="submit" name="send" value="Senden">Send</button>
                    </div>
                    <div class="col-sm-8 col-sm-offset-1">
                    <span class="text2">With * marked fields are required!</span>
</div>
                </form>';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = formatinput($_POST["name"]);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "no numbers allowed";
            }
        }
        if (empty($_POST["mail"])) {
            $mailErr = "E-Mail is required";
        } else {
            $mail = formatinput($_POST["mail"]);
            if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                $mailErr = "incorrect E-Mail format";
                echo $mailErr;
            }
        }
        if (empty($_POST["tel"])) {
            $telErr = "";
        } else {
            $tel = $_POST["tel"];
        }
        if (empty($_POST["message"])) {
            $messageErr = "message is required";
        } else {
            if (mb_detect_encoding($_POST["message"], 'UTF-8', true)) {
                $message = "Nachricht: ";
                $message .= utf8_decode(formatinput($_POST["message"]));
            }

        }
        $header = 'From: ' . $name . '<' . $mail . '>' . "\r\n";
        $header .= 'Reply-To: ' . $mail . "\r\n";
        $header .= 'X-Mailer: PHP/' . phpversion();

        $message .= "\r\n";
        $message .= "Telefonnummer: ";
        $message .= $tel;
    }
    if (!empty($_POST["mail"])) {
        if (filter_var(formatinput($_POST["mail"]), FILTER_VALIDATE_EMAIL) && !empty($_POST["mail"]) && !empty($_POST["name"]) && !empty($_POST["message"])) {
            mail($to, $subject, $message, $header);
            if (!empty($sent)) {
                $sent = true;
            }
        }
    }


} else if (!$mailErr == "") {
    echo '<div class="text1">' . $mailErr . '</div>';
} else if ($sent == true) {
    echo '<div class="text2">Successfully sent!</div>';
}
function formatinput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

