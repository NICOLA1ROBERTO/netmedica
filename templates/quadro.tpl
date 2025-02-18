<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetti Medici</title>
    <link rel="stylesheet" href="../netmedica/assets/css/style.css">
</head>
<body>

    <div>
        <h1>Progetti Medici</h1>
        <br>
    </div>

    <div id="progetti-container">

        {foreach $projects as $project}

            <div class="progetto-card" data-id="{$project.id_progetto}" data-name="{$project.progetto}" data-performance="{$project.performance}" data-img="assets/{$project.img}">

                <img src="assets/{$project.img}" alt="">

                <div class="content">

                    <h3>{$project.progetto}</h3>
                    <p class="performance">{$project.performance}%</p>

                </div>

            </div>

        {/foreach}

    </div>

<script src="../netmedica/assets/script/script.js"></script>

</body>

<!-- Modal -->
<div id="projectModal" class="modal">
    <div class="modal-content ">
        <span class="close">&times;</span>
        <img id="modal-img" src="" alt="">
        <h3 id="modal-name"></h3>
        <p id="modal-performance" class="performance"></p>
    </div>
</div>

</html>

