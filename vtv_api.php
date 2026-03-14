<?php

$url = "https://ehtashamgujjar-vtv-ai-assistant.hf.space/run/predict";

$data = [
    "data" => ["YOUR_AUDIO_FILE_PATH_OR_BASE64"]
];

$options = [
    "http" => [
        "header"  => "Content-type: application/json",
        "method"  => "POST",
        "content" => json_encode($data),
    ],
];

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

echo $result;
?>
