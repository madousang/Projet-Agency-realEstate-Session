var modal = document.getElementById('staticBackdrop');
var modalBtn = document.getElementById('modalBtn');
var closeBtn = document.getElementsByClassName('btn-close')[0];

modalBtn.addEventListener('click', openmodal);
closeBtn.addEventListener('click', closemodal);

function openmodal() {
modal.style.display = 'block';
}
function closemodal() {
modal.style.display = 'none';
}  
/*
    $token = $_POST['stripeToken'];
    $email = $_POST['email'];
    $nom = $_POST['nomPersonne'];

    if (filter_var($email,FILTER_VALIDATE_EMAIL) && !empty($nom) && !empty($token)) {
        
        $ch = curl_init();
        $data = [
          'source' => $token,
          'description' => $nom,
          'email' => $email
        ];

        curl_setopt_array($ch,[ 
          CURLOPT_URL => 'https//api.stripe.com/v1/customers',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_USERPWD => 'sk_test_51LQJW6HrDIIXgGtOV0RUHSD4HqRIicLZQvWIKhjmJOEXMZBl1y9bXkKoU80jVZScWRjHD9ZlSiJQtFPfdb7yyEa800pKXtSVKp',
          CURLOPT _HTTPAUTH => CURLAUTH_BASIC,
          CURLOPT_POSTFIELDS => http_build_query($data)
        ]);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);
        var_dump($response);
        die();
    }*/
