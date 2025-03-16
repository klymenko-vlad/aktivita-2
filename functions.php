<?php
function displayBanners($jsonFile): void
{
    $data = file_get_contents($jsonFile);
    $headings = json_decode($data, true);

    if ($headings) {
        echo '<section class="slides-container">';
        foreach ($headings as $heading) {
            echo '<div class="slide fade">';
            echo '<a href="' . $heading['url'] . '" target="_blank">';
            echo '<img src="' . $heading['image'] . '" alt="' . $heading['text'] . '">';
            echo '</a>';
            echo '<div class="slide-text">' . $heading['text'] . '</div>';
            echo '</div>';
        }
        echo '<a id="prev" class="prev">❮</a>';
        echo '<a id="next" class="next">❯</a>';
        echo '</section>';
    } else {
        echo '🦆🦆 error';
    }
}
function displayQuestions($jsonFile): void
{
    $jsonData = file_get_contents($jsonFile);
    $questions = json_decode($jsonData, true);

    if ($questions) {
        foreach ($questions as $item) {
            echo '<div class="accordion">';
            echo '<div class="question">' . htmlspecialchars($item["question"]) . '</div>';
            echo '<div class="answer">' . htmlspecialchars($item["answer"]) . '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>Som si isty, ze nemate otazok</p>';
    }
}
?>
