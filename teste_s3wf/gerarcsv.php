<?php
   header( 'Content-type: application/csv' );   
   header( 'Content-Disposition: attachment; filename=file_tarefa.csv' );   
   header( 'Content-Transfer-Encoding: binary' );
   header( 'Pragma: no-cache');
   /*conexão com o bd*/
   $pdo = new PDO( 'mysql:host=localhost;dbname=henrique-s3wf', 'root', '' );
   $stmt = $pdo->prepare( 'SELECT * FROM s3_tarefa' );   
   $stmt->execute();
   $results = $stmt->fetchAll( PDO::FETCH_ASSOC );
   /*Baixando csv*/
   $out = fopen( 'php://output', 'w' );
   foreach ( $results as $result ) 
   {
      fputcsv( $out, $result );
   }
   fclose( $out );
?>