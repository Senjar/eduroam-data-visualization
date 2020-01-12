<?php



function http_response($url, $status = null, $wait = 3)
{
		
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, TRUE);
            curl_setopt($ch, CURLOPT_NOBODY, TRUE); // remove body
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            $head = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
           

		   
            if(!$head)
            {
                return FALSE;
            }
           
            if($status === null)
            {
                if($httpCode < 400)
                {
                    return TRUE;
                }
                else
                {
                    return FALSE;
                }
            }
            elseif($status == $httpCode)
            {
                return TRUE;
            }

            return FALSE;

    }
	
	
if (http_response('https://ws-ext.it.auth.gr/open/getUgradHistStatus','200')){
	echo "<p>URL RESPONSE 200</p>";
} else echo "<p>FAIL</p>";



?>