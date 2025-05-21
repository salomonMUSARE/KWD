<?php
header('Content-Type: application/json');

// Sanitize input
$project = isset($_GET['project']) ? preg_replace('/[^a-z0-9-]/', '', $_GET['project']) : '';

if (empty($project)) {
    http_response_code(400);
    echo json_encode(['error' => 'Project name is required']);
    exit;
}

// Map project names to folder names
$projectFolders = [
    'snap-salon' => 'SNAP SALOON',
    'orgin-arts' => 'orgin art',
    'live-for-others' => 'live for others',
    'gold-profiter' => 'GOLD PROFITER',
    'vivid-drive' => 'vivid drive',
    'kanda-tech' => 'max website'
];

if (!isset($projectFolders[$project])) {
    http_response_code(404);
    echo json_encode(['error' => 'Project not found']);
    exit;
}

$folderPath = 'images/' . $projectFolders[$project];
$images = [];

if (is_dir($folderPath)) {
    $files = scandir($folderPath);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..' || $file === 'OG OG.png' || $file === 'OG.png') continue;
        
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])) {
            $images[] = $folderPath . '/' . $file;
        }
    }
}

echo json_encode($images); 