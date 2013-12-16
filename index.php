<?php 
$idioma = (isset($_GET["language"])) ? trim(strip_tags($_GET["language"])) : "es_ES";
putenv("LANG=$idioma");
putenv("LC_ALL={$idioma}");
setlocale(LC_ALL, $idioma);

if (false === function_exists('gettext'))
{
    echo "No tienes la libreria gettext instalada.";
    exit(1);
}

// Define la ubicación de los ficheros de traduccion
bindtextdomain("messages", "./locale");
bind_textdomain_codeset('messages', 'utf-8');
textdomain("messages");

//Mostramos el texto
echo(gettext("Prueba de texto en castellano"));
?>