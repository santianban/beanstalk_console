<?php

 class CommonInterceptor  extends XInterceptor
 {
     public function _before($xcontext,$request,$response)
     {
        $response->setRoot(getenv("PRJ_ROOT") ."/". getenv("DIST_ENTRY")."/entry/") ;
     }
     public function _after($xcontext,$request,$response)
     {
     }
 }

