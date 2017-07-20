<?php

function directoryReader($directory, array $excludeFiles=['.', '..', 'DS_Store']){

  $files=[];

  //If it is not a valid directory, return null
  if(!is_dir($directory)){
    return null;
  }

  if(!($filesDirectory=opendir($directory))){
    return null;
  }

  while(($file=readdir($filesDirectory))!==false){
    $ok=true;
    foreach($excludeFiles as $exc){
      if($file==$exc){
        $ok=false;
      }
    }
    if($ok==true){
      $files[]=$directory . '/' . $file;
    }
  }

  closedir();
  return $files;

}

 ?>
