<?php
header('Content-Type: application/json');

$DEEPL_API_KEY = 'a179cbb4-cb69-46e2-b28b-47dae803a115:fx';

$input = file_get_contents('php://input');
error_log("Input data: " . $input);

if (empty($input)) {
    echo json_encode(['error' => 'No input data']);
    exit;
}

$data = json_decode($input, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['error' => 'Invalid JSON input']);
    exit;
}

if (!isset($data['text']) || !isset($data['targetLang'])) {
    echo json_encode(['error' => 'Missing required fields']);
    exit;
}

$text = $data['text'];
$targetLang = $data['targetLang'];

$url = 'https://api-free.deepl.com/v2/translate';
$options = [
    'http' => [
        'header'  => "Authorization: DeepL-Auth-Key $DEEPL_API_KEY\r\n" .
                     "Content-Type: application/json\r\n",
        'method'  => 'POST',
        'content' => json_encode([
            'text' => [$text],
            'target_lang' => $targetLang,
        ]),
    ],
];

$context  = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    $error = error_get_last();
    error_log("DeepL API request failed: " . print_r($error, true));

    $http_response_header = $http_response_header ?? [];
    error_log("HTTP response headers: " . print_r($http_response_header, true));

    echo json_encode(['error' => 'Translation failed: ' . $error['message']]);
    exit;
}

$translatedData = json_decode($response, true);
if (json_last_error() !== JSON_ERROR_NONE) {
    error_log("Failed to decode DeepL API response: " . json_last_error_msg());
    echo json_encode(['error' => 'Failed to decode translation response']);
    exit;
}

echo json_encode(['translation' => $translatedData['translations'][0]['text']]);
?>