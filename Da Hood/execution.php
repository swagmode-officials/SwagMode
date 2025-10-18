<?php
if ($_SERVER['HTTP_USER_AGENT'] == 'Roblox/WinInet') {
    $hookObject = json_encode([
        'embeds' => [[
            'title' => 'Execution Request',
            'description' => "User: " . $_GET["user"] . " (" . $_GET["userid"] . ")\nProfile Link: https://roblox.com/users/" . $_GET["userid"] . "/profile",
            'color' => hexdec('202225'),
         ]]],
    JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
    $curl = curl_init('https://discord.com/api/webhooks/1427855178119254067/3NwnEmelrOyNj9nfA81VFWlLTc69zM0DX65TuLeOMuNosFci9VPbogsgLNRqXCZ5oX_W');
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curl, CURLOPT_POSTFIELDS, $hookObject);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_exec($curl);
} else {
    echo('<script>window.location.replace(\'https://discord.gg/swaggest\');</script>');
};
?>
