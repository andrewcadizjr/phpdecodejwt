<?php print_r(json_decode(base64_decode(str_replace('_', '/', str_replace('-','+',explode('.', $jwt_token)[1]))), true));?>
