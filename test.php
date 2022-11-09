<?php


$a = s14;




?>

Release Notes Highlights
The app now requires .NET 6. The .NET runtime, if missing, will be installed when the application is executed.
Improved repository load time considerably (#9243, #9735, #9864, etc) as well as other performance tweaks.
Improved "left panel" with the added multi-selection functionality (#9723) and the ability to view git stashes (#10258).
Improved filtering functionality including the ability to "exclude" git refs (#10240).
Use native WSL Git executables for \\wsl$ shares to speedup handling (#9702)
Use the standard FormBrowse for file history and blame (#9445)
BASE diff: Icons for unique changes (#9720)
