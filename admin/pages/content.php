<?php
if (isset($_GET["page"]) && !empty(trim($_GET["page"]))) {
    require_once("../config.php");
    $page = $_GET["page"];
    if ($page == "1" ) {
    require_once ('pages/employers/add.php');
    }
    if ($page == "2" ) {
        require_once ('pages/employers/insert.php');
        }

        if ($page == "3" ) {
            require_once ('pages/employers/select.php');
            }
        
        if ($page == "4" ) {
            require_once ('pages/employers/edit.php');
            }

        if ($page == "5" ) {
            require_once ('pages/employers/update.php');
            }
        if ($page == "6" ) {
            require_once ('pages/employers/delete.php');
            }
        if ($page == "7" ) {
            require_once ('pages/food/add.php');
                                }
        if ($page == "8" ) {
            require_once ('pages/food/insert.php');
                                    }
        if ($page == "9" ) {
            require_once ('pages/food/select.php');
                                        }
        if ($page == "10" ) {
            require_once ('pages/food/delete.php');
                                       } 
        if ($page == "11" ) {
            require_once ('pages/food/edit.php');
                                        }   
        if ($page == "12" ) {
            require_once ('pages/food/update.php');
        }
        if ($page == "13" ) {
             require_once ('pages/menu/add.php');
                                        }
         if ($page == "14" ) {
             require_once ('pages/menu/insert.php');
                                            }
        if ($page == "15" ) {
            require_once ('pages/menu/select.php');
                                                }
        if ($page == "16" ) {
            require_once ('pages/menu/delete.php');
                                               } 
        if ($page == "17" ) {
            require_once ('pages/menu/edit.php');
                                                               }   
        if ($page == "18" ) {
            require_once ('pages/menu/update.php');
        }
            if ($page == "19" ) {
                require_once ('pages/menu/add.php');
                                           }
            if ($page == "20" ) {
                require_once ('pages/menu/insert.php');
                                               }
           if ($page == "21" ) {
               require_once ('pages/menu/select.php');
                                                   }
           if ($page == "22" ) {
               require_once ('pages/menu/delete.php');
                                                  } 
           if ($page == "23" ) {
               require_once ('pages/menu/edit.php');
                                                                  }   
           if ($page == "24" ) {
               require_once ('pages/menu/update.php');
           }
           if ($page == "25" ) {
            require_once ('pages/dinner/add.php');
                                       }
        if ($page == "26" ) {
            require_once ('pages/dinner/insert.php');
                                           }
       if ($page == "27" ) {
           require_once ('pages/dinner/select.php');
                                               }
       if ($page == "28" ) {
           require_once ('pages/dinner/delete.php');
                                              } 
       if ($page == "29" ) {
           require_once ('pages/dinner/edit.php');
                                                              }   
       if ($page == "30" ) {
           require_once ('pages/dinner/update.php');
       
                                                                                                                }                           
}

?>