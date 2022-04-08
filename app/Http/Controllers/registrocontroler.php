<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use App\Models\registromodel;

class registrocontroler extends Controller
{
    public function mostrarbd()
    {
        $resultados = registromodel::all(); 
        echo "<a>Estas son las personas que no dudaron en darle click al registros, sabiendo que podia ser un virus</a>";
        echo "<table border='1'>";
        echo "<tr>";
        echo "<td>id</td>";
        echo "<td>Nombre</td>";
        echo "</tr>";

    
        foreach ($resultados as $resultado){
            echo "<tr>";
            echo "<td>".$resultado->id."</td>";
            echo "<td>".$resultado->Nombre."</td>";
            echo "</tr>";
        };
}
}
