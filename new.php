<!DOCTYPE html>
<html>
<head>
    <title>Project Filter</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Project Filter</h1>

        <div class="btn-group" role="group">
            <button type="button" class="btn btn-outline-primary active" data-type="all">All Projects</button>
            <button type="button" class="btn btn-outline-primary" data-type="ml">ML Projects</button>
            <button type="button" class="btn btn-outline-primary" data-type="web">Web Projects</button>
            <button type="button" class="btn btn-outline-primary" data-type="app">App Projects</button>
        </div>

        <ul class="list-group mt-4" id="projectList">
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
                        echo "<li class='list-group-item'>{$project['name']}</li>";
                    }
                }
            } else {
                // Display all projects by default
                foreach ($projects as $project) {
                    echo "<li class='list-group-item'>{$project['name']}</li>";
                }
            }
            ?>
        </ul>
    </div>

    <!-- Include Bootstrap JS and Popper.js (required for Bootstrap's JavaScript components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const filterButtons = document.querySelectorAll('.btn-group button');
        const projectList = document.getElementById('projectList');

        // Function to filter and display projects based on the selected type
        function filterProjects(selectedType) {
            projectList.innerHTML = '';
            <?php
            foreach ($projects as $project) {
                echo "if (selectedType === 'all' || selectedType === '{$project['type']}') {";
                echo "const li = document.createElement('li');";
                echo "li.textContent = '{$project['name']}';";
                echo "li.className = 'list-group-item';";
                echo "projectList.appendChild(li);";
                echo "}";
            }
            ?>
        }

        // Add click event listeners to filter buttons
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to the clicked button
                button.classList.add('active');
                // Filter and display projects based on the selected type
                const selectedType = button.getAttribute('data-type');
                filterProjects(selectedType);
            });
        });

        // Initially, display all projects
        filterProjects('all');
    </script>
</body>
</html>
