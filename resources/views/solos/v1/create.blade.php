@extends('layouts.main')

@section('title', 'SolosExpert')

@section('content')

<div id = "createsolos" class = "col-md-6 offset-md-3">
    <h1>Classificação de Solos</h1>
        <form id = "createsolo" action = "/solos" method = "POST" enctype = "multipart/form-data">
        @csrf
       
        <div id = "form-group">
            <label for = "title">Identificação:</label>
            <input type = "text" class = "form-control" id = "ID_PONTO" name = "ID_PONTO" placeholder = "Identificador do ponto do perfil" >
        </div>
        <div id = "form-group">
            <label for = "title">Drenagem:</label>
            <input type = "text" class = "form-control" id = "DRENAGEM" name = "DRENAGEM" placeholder = "de excessivamente drenado (1) a muito mal drenado (8)" >
        </div>
        <div id = "form-group">
            <label for = "title">Horizontes:</label>
            <input type = "text" class = "form-control" id = "SIMB_HORIZ" name = "SIMB_HORIZ" placeholder = "Símbolo do horizonte" >
            <input type = "text" class = "form-control" id = "LIMITE_SUP" name = "LIMITE_SUP" placeholder = "Limite superior do horizonte, em cm da superfície" >
            <input type = "text" class = "form-control" id = "LIMITE_INF" name = "LIMITE_INF" placeholder = "Limite inferior do horizonte, em cm da superfície" > 
            <input type = "text" class = "form-control" id = "COR_UMIDA_MATIZ" name = "COR_UMIDA_MATIZ" placeholder = "Matiz da cor da amostra de solo úmida" >
            <input type = "text" class = "form-control" id = "COR_UMIDA_VALOR" name = "COR_UMIDA_VALOR" placeholder = "Valor da cor da amostra de solo úmida" >
            <input type = "text" class = "form-control" id = "COR_UMIDA_CROMA" name = "COR_UMIDA_CROMA" placeholder = "Croma da cor da amostra de solo úmida" >
            <input type = "text" class = "form-control" id = "COR_SECA_MATIZ" name = "COR_SECA_MATIZ" placeholder = "Matiz da cor da amostra de solo seca" >
            <input type = "text" class = "form-control" id = "COR_SECA_VALOR" name = "COR_SECA_VALOR" placeholder = "Valor da cor da amostra de solo seca" >
            <input type = "text" class = "form-control" id = "COR_SECA_CROMA" name = "COR_SECA_CROMA" placeholder = "Croma da cor da amostra de solo seca" >
            <input type = "text" class = "form-control" id = "COR_MOSQ_MATIZ_1" name = "COR_MOSQ_MATIZ_1" placeholder = "Matiz da cor da mancha no solo (n-ésima ocorrência) - COR_MOSQ_MATIZ_N, N = 1,2,…e" >
            <input type = "text" class = "form-control" id = "COR_MOSQ_VALOR_1" name = "COR_MOSQ_VALOR_1" placeholder = "Valor da cor da mancha no solo (n-ésima ocorrência) - COR_MOSQ_VALOR_N, N = 1,2,…" >
            <input type = "text" class = "form-control" id = "COR_MOSQ_CROMA_1" name = "COR_MOSQ_CROMA_1" placeholder = "Croma da cor da mancha no solo (n-ésima ocorrência) - COR_MOSQ_CROMA_N, N = 1,2,…" >
            <input type = "text" class = "form-control" id = "COR_UMIDA_AMASSADA_MATIZ" name = "COR_UMIDA_AMASSADA_MATIZ" placeholder = "Matiz da cor da amostra de solo úmida e amassada" >
            <input type = "text" class = "form-control" id = "COR_UMIDA_AMASSADA_VALOR" name = "COR_UMIDA_AMASSADA_VALOR" placeholder = "Valor da cor da amostra de solo úmida e amassada" >
            <input type = "text" class = "form-control" id = "COR_UMIDA_AMASSADA_CROMA	" name = "COR_UMIDA_AMASSADA_CROMA	" placeholder = "Croma da cor da amostra de solo úmida e amassada" >
            <input type = "text" class = "form-control" id = "COR_SECA_TRITURADA_MATIZ" name = "COR_SECA_TRITURADA_MATIZ" placeholder = "Matiz da cor da amostra de solo seca e triturada" >
            <input type = "text" class = "form-control" id = "COR_SECA_TRITURADA_VALOR" name = "COR_SECA_TRITURADA_VALOR" placeholder = "Valor da cor da amostra de solo seca e triturada" >
            <input type = "text" class = "form-control" id = "COR_SECA_TRITURADA_CROMA" name = "COR_SECA_TRITURADA_CROMA" placeholder = "Croma da cor da amostra de solo seca e triturada" >
            <input type = "text" class = "form-control" id = "ESTRUTURA_GRAU" name = "ESTRUTURA_GRAU" placeholder = "Grau de desenvolvimento da estrutura - de ausente (1) a forte(4)" >
            <input type = "text" class = "form-control" id = "ESTRUTURA_TAMANHO" name = "ESTRUTURA_TAMANHO" placeholder = "Tamanho da estrutura - de muito pequeno (1) a extremamente grande (6)" >
            <input type = "text" class = "form-control" id = "ESTRUTURA_TIPO" name = "ESTRUTURA_TIPO" placeholder = "Tipo, ou forma, da estrutura - laminar (1), prismática (2), colunar (3), blocos angulares (4), blocos subangulares (5), granular (6), grumosa (7)" >
            <input type = "text" class = "form-control" id = "CEROSIDADE_GRAU" name = "CEROSIDADE_GRAU" placeholder = "Grau de desenvolvimento da cerosidade, conforme o constraste com as partes sem cerosidade e facilidade de identificação - de ausente (1) a forte (4)" >
            <input type = "text" class = "form-control" id = "CEROSIDADE_QUANTIDADE" name = "CEROSIDADE_QUANTIDADE" placeholder = "Quantidade de cerosidade - de pouco (1) a abundante (3)" >
            <input type = "text" class = "form-control" id = "TRANSICAO_GRAU" name = "TRANSICAO_GRAU" placeholder = "Grau, ou nitidez, da transição entre este horizonte e o subjacente - de abrupta (1) a difusa (4)" >
            <input type = "text" class = "form-control" id = "TRANSICAO_FORMA" name = "TRANSICAO_FORMA" placeholder = "Forma, ou topografia, da transição entre este horizonte e o subjacente - plana (1), ondulada (2), irregular (3), descontínua (4)" >
            <input type = "text" class = "form-control" id = "CONSISTENCIA_SECO" name = "CONSISTENCIA_SECO" placeholder = "Consistência do solo seco (dureza) - de solto (1) a extremamente duro (6" >
            <input type = "text" class = "form-control" id = "CALHAU" name = "CALHAU" placeholder = "Quantidade de calhau, em g/Kg" >
            <input type = "text" class = "form-control" id = "CASCALHO" name = "CASCALHO" placeholder = "Quantidade de cascalho, em g/Kg" >
            <input type = "text" class = "form-control" id = "AREIA_GROS" name = "AREIA_GROS" placeholder = "Quantidade de areia grossa, em g/Kg" >
            <input type = "text" class = "form-control" id = "AREIA_FINA" name = "AREIA_FINA" placeholder = "Quantidade de areia fina, em g/Kg" >
            <input type = "text" class = "form-control" id = "SILTE" name = "SILTE" placeholder = "Quantidade de silte, em g/Kg" >
            <input type = "text" class = "form-control" id = "ARGILA" name = "ARGILA" placeholder = "Quantidade de argila, em g/Kg" >
            <input type = "text" class = "form-control" id = "PH_AGUA" name = "PH_AGUA" placeholder = "pH com amostra de solo imerso em água" >
            <input type = "text" class = "form-control" id = "PH_KCL" name = "PH_KCL" placeholder = "pH com amostra de solo imerso em solução de KCl" >
            <input type = "text" class = "form-control" id = "C_ORG" name = "C_ORG" placeholder = "Teor de carbono orgânico em g/Kg" >
            <input type = "text" class = "form-control" id = "CA_TROC" name = "CA_TROC" placeholder = "Cálcio trocável em cmol/Kg" >
            <input type = "text" class = "form-control" id = "MG_TROC" name = "MG_TROC" placeholder = "Magnésio trocável em cmol/Kg" >
            <input type = "text" class = "form-control" id = "K_TROC" name = "K_TROC" placeholder = "Potássio trocável em cmol/Kg" >
            <input type = "text" class = "form-control" id = "NA_TROC" name = "NA_TROC" placeholder = "Sódio trocável em cmol/Kg" >
            <input type = "text" class = "form-control" id = "AL_TROC	" name = "AL_TROC	" placeholder = "Alumínio trocável em cmol/Kg" >
            <input type = "text" class = "form-control" id = "H_TROC" name = "H_TROC" placeholder = "Hidrogênio trocável em cmol/Kg" >
            <input type = "text" class = "form-control" id = "P_ASSIM" name = "P_ASSIM" placeholder = "Fósforo assimilável em mg/Kg" >
            
            <div id = "form-group">
            <label for = "title">Tem caráter retrátil?</label>
            <select name = "RETRATIL" id = "RETRATIL" class="form-control">
                <option value = "0">Não</option>
                <option value = "1">Sim</option>
            </select>
            </div>
            
            <div id = "form-group">
            <label for = "title">Tem caráter coeso?</label>
            <select name = "COESO" id = "COESO" class="form-control">
                <option value = "0">Não</option>
                <option value = "1">Sim</option>
            </select>
            </div>
            
            <div id = "form-group">
            <label for = "title">Tem caráter flúvico?</label>
            <select name = "FLUVICO" id = "FLUVICO" class="form-control">
                <option value = "0">Não</option>
                <option value = "1">Sim</option>
            </select>
            </div>
            
            <div id = "form-group">
            <label for = "title">Tem caráter sômbrico?</label>
            <select name = "SOMBRICO" id = "SOMBRICO" class="form-control">
                <option value = "0">Não</option>
                <option value = "1">Sim</option>
            </select>
            </div>
            
            <div id = "form-group">
            <label for = "title">Tem caráter redóxico?</label>
            <select name = "REDOXICO" id = "REDOXICO" class="form-control">
                <option value = "0">Não</option>
                <option value = "1">Sim</option>
            </select>
            </div>
            
            <div id = "form-group">
            <label for = "title">Indica presença de materiais primários alteráveis?</label>
            <select name = "MATERIAIS_PRIMARIOS" id = "MATERIAIS_PRIMARIOS" class="form-control">
                <option value = "0">Não</option>
                <option value = "1">Sim</option>
            </select>
            </div>
            
            <div id = "form-group">
            <label for = "title">Indica presença de atividades humanas?</label>
            <select name = "ATIVIDADES_HUMANAS" id = "ATIVIDADES_HUMANAS" class="form-control">
                <option value = "0">Não</option>
                <option value = "1">Sim</option>
            </select>
            </div>
            
            <div id = "form-group">
            <label for = "title">Indica ocorrência de horizonte plácico no topo do horizonte em questão?</label>
            <select name = "PLACICO_TOPO" id = "PLACICO_TOPO" class="form-control">
                <option value = "0">Não</option>
                <option value = "1">Sim</option>
            </select>
            </div>
            
            <div id = "form-group">
            <label for = "title">Indica presença de manganês?</label>
            <select name = "MANGANES" id = "MANGANES" class="form-control">
                <option value = "0">Não</option>
                <option value = "1">Sim</option>
            </select>
            </div>

            <input type = "text" class = "form-control" id = "COND_ELETR" name = "COND_ELETR" placeholder = "Condutividade elétrica em dS/m" >
            <input type = "text" class = "form-control" id = "EQUI_CACO3" name = "EQUI_CACO3" placeholder = "Equivalente de carbonato de cálcio em g/Kg" >
            <input type = "text" class = "form-control" id = "TEOR_FE" name = "TEOR_FE" placeholder = "Teor de ferro em g/Kg" >
            <input type = "text" class = "form-control" id = "LAMELA_SUP" name = "LAMELA_SUP" placeholder = "Limite superior da lamela, em cm da superfície" >
            <input type = "text" class = "form-control" id = "LAMELA_INF" name = "LAMELA_INF" placeholder = "Limite inferior da lamela, em cm da superfície" >
            <input type = "text" class = "form-control" id = "LAMELA_TEXTURA" name = "LAMELA_TEXTURA" placeholder = "Textura da lamela - de areia (1) a indiscriminado (16)" >
            
            </div>
        <input type = "submit" class = "btn btn-primary" value ="ANALISAR">
    </form>
</div>




@endsection