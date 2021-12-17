<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="./assets/js/script.js" defer></script>
    <title>Files System Explorer</title>
</head>
<body>
    <div class="jumbotron">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Our Cloud</a>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <nav class="navbar navbar-light bg-light">
            <form class="container-fluid justify-content-start" action="./modules/createFile.php" method="POST">

                <button type="submit" formaction="./modules/createFolder.php" method="POST"name="btnNewFolder"class="btn btn-sm btn-outline-secondary me-2" type="button">New Folder</button>

                <button type="submit" formaction="./modules/createFile.php" method="POST"name="btnNewFile"class="btn btn-sm btn-outline-secondary me-2" type="button">New File</button>

                <button name="btnUnload"class="btn btn-sm btn-outline-secondary me-2" type="button">Unload</button>

                <button name="btnDownload"class="btn btn-sm btn-outline-secondary me-2" type="button">Download</button>

                <button name="btnMove"class="btn btn-sm btn-outline-secondary me-2" type="button">Move to</button>

                <button name="btnCopy"class="btn btn-sm btn-outline-secondary me-2" type="button">Copy to</button>

                <button name="btnRename"class="btn btn-sm btn-outline-secondary me-2" type="button">Rename</button>

                <button name="btnDelete"class="btn btn-sm btn-outline-secondary me-2" type="button">Delete</button>

            </form>
        </nav>
    </div>
<div class="row">
    <div id="foldersContainer" class="col-4 primary foldersContainer" >
    <?php
    require_once("./modules/generateFoldersTree.php");
    generateFoldersTreeFun("./root");
    ?>
    </div>
    <div class="col-4 secondary">
    <?php
    require_once("./modules/generateFiles.php");
    
    $newRoot = $_GET["root"];
    generateFilesFun($newRoot);
    ?>
    </div>
    <div class="col-4 primary">Hola</div>
</div>

</body>
</html>
