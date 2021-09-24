<?php

$url = "https://api.cnptia.embrapa.br/smartsolos/expert/v1/classification";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$headers = array(
   "accept: application/json",
   "Content-Type: application/json",
   "Authorization: Bearer a0293d1a-92a3-3edb-a767-0f1bef644c56",
);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

 
 $data = 
 
 '{"items":[{
    
    "ID_PONTO":"Paraíba",
    
    "HORIZONTES":
    [{[{"SIMB_HORIZ":"Ap1",
        "LIMITE_SUP":0,
        "LIMITE_INF":12,
        "COR_UMIDA_MATIZ":"5YR",
        "COR_UMIDA_VALOR":3,
        "COR_UMIDA_CROMA":4,
        "ESTRUTURA_GRAU":3,
        "ESTRUTURA_TAMANHO":1,
        "ESTRUTURA_TIPO":5,
        "TRANSICAO_FORMA":1,
        "TRANSICAO_GRAU":2,
        "AREIA_GROS":260,
        "AREIA_FINA":270,
        "SILTE":170,
        "ARGILA":300,
        "PH_AGUA":5.8,
        "PH_KCL":5.1,
        "C_ORG":12.6,
        "CA_TROC":5.2,
        "MG_TROC":1.7,
        "K_TROC":0.26,
        "NA_TROC":0.05,
        "AL_TROC":0,
        "H_TROC":2.5,
        "P_ASSIM":2,
        "TEOR_FE":47,
        "TEOR_P":0.5,
        "CEROSIDADE_GRAU":1,
        "CEROSIDADE_QUANTIDADE":3},
        
        {"SIMB_HORIZ":"Ap2",
            "LIMITE_SUP":12,
            "LIMITE_INF":40,
            "COR_UMIDA_MATIZ":"2.5YR",
            "COR_UMIDA_VALOR":3,
            "COR_UMIDA_CROMA":4,
            "ESTRUTURA_GRAU":3,
            "ESTRUTURA_TAMANHO":2,
            "ESTRUTURA_TIPO":5,
            "CEROSIDADE_GRAU":1,
            "CEROSIDADE_QUANTIDADE":3,
            "TRANSICAO_FORMA":1,
            "TRANSICAO_GRAU":1,
            "AREIA_GROS":220,
            "AREIA_FINA":220,
            "SILTE":170,
            "ARGILA":390,
            "PH_AGUA":5.6,
            "PH_KCL":4.8,
            "C_ORG":9.8,
            "CA_TROC":5.1,
            "MG_TROC":1.7,
            "K_TROC":0.1,
            "NA_TROC":0.07,
            "AL_TROC":0,
            "H_TROC":2.3,
            "P_ASSIM":1,
            "TEOR_FE":61,
            "TEOR_P":0.6},
        
        {"SIMB_HORIZ":"2Bt1",
            "LIMITE_SUP":40,
            "LIMITE_INF":130,
            "COR_UMIDA_MATIZ":"2.5YR",
            "COR_UMIDA_VALOR":4,
            "COR_UMIDA_CROMA":6,
            "COR_SECA_MATIZ":"2.5YR",
            "COR_SECA_VALOR":4,
            "COR_SECA_CROMA":6,
            "ESTRUTURA_GRAU":4,
            "ESTRUTURA_TAMANHO":1,
            "ESTRUTURA_TIPO":5,
            "CEROSIDADE_GRAU":1,
            "CEROSIDADE_QUANTIDADE":3,
            "TRANSICAO_FORMA":1,
            "TRANSICAO_GRAU":4,
            "AREIA_GROS":110,
            "AREIA_FINA":140,
            "SILTE":120,
            "ARGILA":630,
            "PH_AGUA":6,
            "PH_KCL":5.6,
            "C_ORG":3,
            "CA_TROC":3,
            "MG_TROC":2.2,
            "K_TROC":0.08,
            "NA_TROC":0.09,
            "AL_TROC":0,
            "H_TROC":0.8,
            "P_ASSIM":2,
            "TEOR_FE":87,
            "TEOR_P":0.5},

        {"SIMB_HORIZ":"2Bt2",
            "LIMITE_SUP":130,
            "LIMITE_INF":200,
            "COR_UMIDA_MATIZ":"10R",
            "COR_UMIDA_VALOR":4,
            "COR_UMIDA_CROMA":6,
            "ESTRUTURA_GRAU":4,
            "ESTRUTURA_TAMANHO":1,
            "ESTRUTURA_TIPO":4,
            "CEROSIDADE_GRAU":1,
            "CEROSIDADE_QUANTIDADE":3,
            "TRANSICAO_FORMA":1,
            "TRANSICAO_GRAU":3,
            "AREIA_GROS":140,
            "AREIA_FINA":160,
            "SILTE":290,
            "ARGILA":410,
            "PH_AGUA":5.4,
            "PH_KCL":5.2,
            "C_ORG":0.3,
            "CA_TROC":1.2,
            "MG_TROC":2.4,
            "K_TROC":0.12,
            "NA_TROC":0.12,
            "AL_TROC":0,
            "H_TROC":0.7,
            "P_ASSIM":1,
            "TEOR_FE":90,
            "TEOR_P":0.3}
    ]}]}
    
                ],
                "ORDEM": "string",
                "SUBORDEM": "string",
                "GDE_GRUPO": "string",
                "SUBGRUPO": "string"
            }
        ]
    }';

curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

//for debug only!
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

$resp = curl_exec($curl);
curl_close($curl);
var_dump($resp);

?>

