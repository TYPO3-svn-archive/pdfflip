<?php

if (!defined ('TYPO3_MODE'))  die ('Access denied.');



  ////////////////////////////////////////////////////
  //
  // Extending TypoScript from static template uid=43 to set up userdefined tag
  
t3lib_extMgm::addPItoST43($_EXTKEY,'pi1/class.tx_pdfcontroller_pi1.php','_pi1','list_type',1);
t3lib_extMgm::addPItoST43($_EXTKEY,'pi2/class.tx_pdfcontroller_pi2.php','_pi2','list_type',1);
  // Extending TypoScript from static template uid=43 to set up userdefined tag


?>