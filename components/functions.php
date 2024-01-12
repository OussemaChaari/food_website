<?php 
function generateDynamicDiv($pageTitle, $currentSection) {
    $html = '<div class="heading">';
    $html .= '<h3>' . $pageTitle . '</h3>';
    $html .= '<p><a href="home.php">home</a> <span> / ' . $currentSection . '</span></p>';
    $html .= '</div>';

    return $html;
}
function getRowCount($conn, $tableName) {
    $select_query = $conn->prepare("SELECT * FROM `$tableName`");
    $select_query->execute();
    $row_count = $select_query->rowCount();
    return $row_count;
}

?>