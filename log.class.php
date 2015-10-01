<?php
    // Classe para gravação e manipulação de log
    class Log {
        public static function gravaLog($texto, $id = '', $nivel = 0) {
            if (!$config = parse_ini_file('config.ini')) {
                return false;
            }
            
            if (!$h_arquivo = @fopen($config['arquivo'], 'a')) {
                return false;
            }
            
            $mensagem = '';
            
            if ($id != '') {
                $mensagem .= $id . ' ';
            }
            
            if ($nivel > 0) {
               for ($nv = 0; $nv < $nivel; $nv++) {
                   $mensagem .= '.';
               }
            }
            
            date_default_timezone_set($config['fuso']);
            
            $data_atual = date("d\/m\/Y");
            $hora_atual = date("H:i:s");
            
            $mensagem .= $data_atual . ' - ' . $hora_atual . ' - ' . $texto . PHP_EOL;
            fwrite($h_arquivo, $mensagem);
            fclose($h_arquivo);
        }
    }
?>