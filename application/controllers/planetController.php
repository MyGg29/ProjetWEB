 <?php
class PlanetController
{
    function show()
    {
        //On ne veux pas de cache pour les checkboxs
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        require("../application/views/planetarium.php");
        
        
        $url  = 'http://server3.sky-map.org/dwr/call/plaincall/Search.findByName.dwr';
        $data = array(
            'callCount' => '1',
            'page' => '/',
            'httpSessionId' => '',
            'scriptSessionId' => 'B276DB4B200B7D514C48E8F7EB077B6D985',
            'c0-scriptName' => 'Search',
            'c0-methodName' => 'findByName',
            'c0-id' => '0',
            'c0-param0' => 'string:vega',
            'batchId' => '1'
        );
        
        
        // use key 'http' even if you send the request to https://...
        $options = array(
            'http' => array(
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context = stream_context_create($options);
        $result  = file_get_contents($url, false, $context);
        if ($result === FALSE) {
            /* Handle error */
        }
        
        var_dump($result);
    }
} 