<?php

$url = "https://api.cnptia.embrapa.br/smartsolos/expert/v1/verification";

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

$data = '{ "items": [
            {
                "ID_PONTO": "string",
                "DRENAGEM": 0,
                "HORIZONTES": [
                    {
                        "SIMB_HORIZ": "string",
                        "LIMITE_SUP": 0,
                        "LIMITE_INF": 0,
                        "COR_UMIDA_MATIZ": "string",
                        "COR_UMIDA_VALOR": 0,
                        "COR_UMIDA_CROMA": 0,
                        "COR_SECA_MATIZ": "string",
                        "COR_SECA_VALOR": 0,
                        "COR_SECA_CROMA": 0,
                        "COR_MOSQ_MATIZ_1": "string",
                        "COR_MOSQ_VALOR_1": 0,
                        "COR_MOSQ_CROMA_1": 0,
                        "COR_UMIDA_AMASSADA_MATIZ": "string",
                        "COR_UMIDA_AMASSADA_VALOR": 0,
                        "COR_UMIDA_AMASSADA_CROMA": 0,
                        "COR_SECA_TRITURADA_MATIZ": "string",
                        "COR_SECA_TRITURADA_VALOR": 0,
                        "COR_SECA_TRITURADA_CROMA": 0,
                        "ESTRUTURA_GRAU": 0,
                        "ESTRUTURA_TAMANHO": 0,
                        "ESTRUTURA_TIPO": 0,
                        "CEROSIDADE_GRAU": 0,
                        "CEROSIDADE_QUANTIDADE": 0,
                        "TRANSICAO_GRAU": 0,
                        "TRANSICAO_FORMA": 0,
                        "CONSISTENCIA_SECO": 0,
                        "CALHAU": 0,
                        "CASCALHO": 0,
                        "AREIA_GROS": 0,
                        "AREIA_FINA": 0,
                        "SILTE": 0,
                        "ARGILA": 0,
                        "PH_AGUA": 0,
                        "PH_KCL": 0,
                        "C_ORG": 0,
                        "CA_TROC": 0,
                        "MG_TROC": 0,
                        "K_TROC": 0,
                        "NA_TROC": 0,
                        "AL_TROC": 0,
                        "H_TROC": 0,
                        "P_ASSIM": 0,
                        "RETRATIL": true,
                        "COESO": true,
                        "FLUVICO": true,
                        "SOMBRICO": true,
                        "REDOXICO": true,
                        "MATERIAIS_PRIMARIOS": true,
                        "ATIVIDADES_HUMANAS": true,
                        "PLACICO_TOPO": true,
                        "MANGANES": true,
                        "COND_ELETR": 0,
                        "EQUI_CACO3": 0,
                        "TEOR_FE": 0,
                        "LAMELA_SUP": 0,
                        "LAMELA_INF": 0,
                        "LAMELA_TEXTURA": 0
                    }
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
