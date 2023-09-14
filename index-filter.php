<!DOCTYPE html>
<html>
<head>
    <title>Project Filter</title>
</head>
<body>
    <h1>Project Filter</h1>
    <form method="post">
        <label for="projectType">Filter by Type:</label>
        <select id="projectType" name="projectType">
            <option value="all">All Projects</option>
            <option value="ml">ML Projects</option>
            <option value="web">Web Projects</option>
            <option value="app">App Projects</option>
        </select>
        <input type="submit" value="Filter">
    </form>

    <ul id="projectList">
        <!-- Project items will be displayed here -->
        <?php
        $projects = [
            ['name' => 'Project 1', 'type' => 'ml'],
            ['name' => 'Project 2', 'type' => 'web'],
            ['name' => 'Project 3', 'type' => 'app'],
            // Add more projects here with their types
        ];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $selectedType = $_POST['projectType'];
            foreach ($projects as $project) {
                if ($selectedType === 'all' || $project['type'] === $selectedType) {
                    echo "<li>{$project['name']}</li>";
                }
            }
        } else {
            // Display all projects by default
            foreach ($projects as $project) {
                echo "<li>{$project['name']}</li>";
            }
        }
        ?>
    </ul>
</body>
</html>
