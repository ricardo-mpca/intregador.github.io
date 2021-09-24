<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

use App\Models\Solo;

use App\Models\User;

class SolosController extends Controller
{
    //Call Solos

    public function index() {
        $solos = Solo::all();

        return view('solos.v1.solo', ['solos' => $solos]);

    }

    public function health(){
        
        $url = "https://api.cnptia.embrapa.br/smartsolos/expert/v1/health";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
        "Content-Type: application/json",
        "Authorization: Bearer a0293d1a-92a3-3edb-a767-0f1bef644c56",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        
        
        return redirect ('/solos/v1/solo')->with('msg','API em funcionamento');
        
    }
    
    public function classification(){

            // $url = "https://api.cnptia.embrapa.br/smartsolos/expert/v1/classification";

            // $curl = curl_init($url);
            // curl_setopt($curl, CURLOPT_URL, $url);
            // curl_setopt($curl, CURLOPT_POST, true);
            // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            // $headers = array(
            // "accept: application/json",
            // "Content-Type: application/json",
            // "Authorization: Bearer a0293d1a-92a3-3edb-a767-0f1bef644c56",
            // );
            // curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

            
            // $data = 
            
            // '{"items":[{
                
            //     "ID_PONTO":" {{ $solo->ID }} ",
                
            //     "HORIZONTES":
            //     [{"SIMB_HORIZ":" ",
            //         "LIMITE_SUP":0,
            //         "LIMITE_INF":12,
            //         },
                    
                
            //     ]}]}
                
            //                 ],
            //                 "ORDEM": "string",
            //                 "SUBORDEM": "string",
            //                 "GDE_GRUPO": "string",
            //                 "SUBGRUPO": "string"
            //             }
            //         ]
            //     }';

            // curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

            // //for debug only!
            // curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            // curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            // $resp = curl_exec($curl);
            // curl_close($curl);
            // var_dump($resp);

        return view('solos.v1.classificationpost');
    }
    
    public function verification(){
        return view('solos.v1.verificationpost');
    }

    public function create() {
        return view('solos.v1.create');
    }

    public function store(Request $request) {
        
        $solo = new Solo;
        
        $solo->ID_PONTO = $request->ID_PONTO;
        $solo->DRENAGEM = $request->DRENAGEM;
        $solo->SIMB_HORIZ = $request->SIMB_HORIZ;
        $solo->LIMITE_SUP = $request->LIMITE_SUP;
        $solo->LIMITE_INF = $request->LIMITE_INF;
        $solo->COR_UMIDA_MATIZ = $request->COR_UMIDA_MATIZ;
        $solo->COR_UMIDA_VALOR = $request->COR_UMIDA_VALOR;
        $solo->COR_UMIDA_CROMA = $request->COR_UMIDA_CROMA;
        $solo->COR_SECA_MATIZ = $request->COR_SECA_MATIZ;
        $solo->COR_SECA_VALOR = $request->COR_SECA_VALOR;
        $solo->COR_SECA_CROMA = $request->COR_SECA_CROMA;
        $solo->COR_MOSQ_MATIZ_1 = $request->COR_MOSQ_MATIZ_1;
        $solo->COR_MOSQ_VALOR_1 = $request->COR_MOSQ_VALOR_1;
        $solo->COR_MOSQ_CROMA_1 = $request->COR_MOSQ_CROMA_1;
        $solo->COR_UMIDA_AMASSADA_MATIZ = $request->COR_UMIDA_AMASSADA_MATIZ;
        $solo->COR_UMIDA_AMASSADA_VALOR = $request->COR_UMIDA_AMASSADA_VALOR;
        $solo->COR_UMIDA_AMASSADA_CROMA = $request->COR_UMIDA_AMASSADA_CROMA;
        $solo->COR_SECA_TRITURADA_MATIZ = $request->COR_SECA_TRITURADA_MATIZ;
        $solo->COR_SECA_TRITURADA_VALOR = $request->COR_SECA_TRITURADA_VALOR;
        $solo->COR_SECA_TRITURADA_CROMA = $request->COR_SECA_TRITURADA_CROMA;
        $solo->ESTRUTURA_GRAU = $request->ESTRUTURA_GRAU;
        $solo->ESTRUTURA_TAMANHO = $request->ESTRUTURA_TAMANHO;
        $solo->ESTRUTURA_TIPO = $request->ESTRUTURA_TIPO;
        $solo->CEROSIDADE_GRAU = $request->CEROSIDADE_GRAU;
        $solo->CEROSIDADE_QUANTIDADE = $request->CEROSIDADE_QUANTIDADE;
        $solo->TRANSICAO_GRAU = $request->TRANSICAO_GRAU;
        $solo->TRANSICAO_FORMA = $request->TRANSICAO_FORMA;
        $solo->CONSISTENCIA_SECO = $request->CONSISTENCIA_SECO;
        $solo->CALHAU = $request->CALHAU;
        $solo->CASCALHO = $request->CASCALHO;
        $solo->AREIA_GROS = $request->AREIA_GROS;
        $solo->AREIA_FINA = $request->AREIA_FINA;
        $solo->SILTE = $request->SILTE;
        $solo->ARGILA = $request->ARGILA;
        $solo->PH_AGUA = $request->PH_AGUA;
        $solo->PH_KCL = $request->PH_KCL;
        $solo->C_ORG = $request->C_ORG;
        $solo->CA_TROC = $request->CA_TROC;
        $solo->MG_TROC = $request->MG_TROC;
        $solo->K_TROC = $request->K_TROC;
        $solo->NA_TROC = $request->NA_TROC;
        $solo->AL_TROC = $request->AL_TROC;
        $solo->H_TROC = $request->H_TROC;
        $solo->P_ASSIM = $request->P_ASSIM;
        $solo->RETRATIL = $request->RETRATIL;
        $solo->COESO = $request->COESO;
        $solo->FLUVICO = $request->FLUVICO;
        $solo->SOMBRICO = $request->SOMBRICO;
        $solo->REDOXICO = $request->REDOXICO;
        $solo->MATERIAIS_PRIMARIOS = $request->MATERIAIS_PRIMARIOS;
        $solo->ATIVIDADES_HUMANAS = $request->ATIVIDADES_HUMANAS;
        $solo->PLACICO_TOPO = $request->PLACICO_TOPO;
        $solo->MANGANES = $request->MANGANES;
        $solo->COND_ELETR = $request->COND_ELETR;
        $solo->EQUI_CACO3 = $request->EQUI_CACO3;
        $solo->TEOR_FE = $request->TEOR_FE;
        $solo->LAMELA_SUP = $request->LAMELA_SUP;
        $solo->LAMELA_INF = $request->LAMELA_INF;
        $solo->LAMELA_TEXTURA = $request->LAMELA_TEXTURA;
    


     //   $user = auth()->user();
     //   $solo->user_id = $user->id;

        $solo->save();
    
    return redirect('/solos/v1/solo')->with('msg', 'Classificação realizada');
    
    }

    public function show($id) {

        $solo = Solo::findOrFail($id);

        $user = auth()->user();
       
               
           
              
        return view('/solos/v1/show', ['solo' => $solo]);

    }    

    public function dashboard() {
          
        $user = auth()->user();

        $soloss = $user->solos;

     // $eventsAsParticipant = $user->eventsAsParticipant;

        return view('events.dashboard',
            ['solos' => $solos,
        //'eventsasparticipant' => $eventsAsParticipant
        ]
        );
    }

}
