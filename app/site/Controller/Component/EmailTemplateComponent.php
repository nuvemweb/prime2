<?php

class EmailTemplateComponent extends Component {

    protected $_controller = null;

    public function startup(Controller $controller) {
        $this->_controller = $controller;
    }

    public function __construct($collection = null, $settings = array()) {
        //parent::__construct($collection, $settings);
    }

    public function checa_dir($dir) {
        App::uses('CakeEmail', 'Network/Email');

        App::uses('Folder', 'Utility');
        $folder = new Folder();
        if (!is_dir($dir)) {
            $folder->create($dir);
        }
    }

    public function EmailContato($obj) {
        App::uses('CakeEmail', 'Network/Email');

        //exit(debug($dir));
        if ($obj != null) {
            $dir = dirname(WWW_ROOT) . DS . "site" . DS;
            $strHtml = $this->RetornaStrArquivo($dir . "templates/email_contato.html");
            //exit(debug($strHtml));
            $strHtml = $this->SubstituiValores($strHtml, "NOME", $obj["Contato"]["nome"]);
            $strHtml = $this->SubstituiValores($strHtml, "EMAIL", $obj["Contato"]["email"]);
            $strHtml = $this->SubstituiValores($strHtml, "TELEFONE", $obj["Contato"]["telefone"]);
            
            $strHtml = $this->SubstituiValores($strHtml, "MENSAGEM", $obj["Contato"]["mensagem"]);


            $assunto = "Contato - Classificados Prime";

            $Email = new CakeEmail('smtp');
            $Email->to('contato@classificadosprime.com.br');
            $Email->from('contato@classificadosprime.com.br');  //contato
            //$Email->cc('rogeriovaz@interativads.com.br');
            $Email->cc('diasdeoliveira22@classificadosprime.com.br');

            //$Email->from($obj['Contato']['email']);


            $Email->subject($assunto);
            $Email->send($strHtml);
        }
    }

    /*public function EmailOrcamentoAluguel($obj) {
        App::uses('CakeEmail', 'Network/Email');

        //exit(debug($dir));
        if ($obj != null) {
            $dir = dirname(WWW_ROOT) . DS . "site" . DS;
            $strHtml = $this->RetornaStrArquivo($dir . "templates/email_orcamento_aluguel.html");
            //exit(debug($strHtml));
            $strHtml = $this->SubstituiValores($strHtml, "NOME", $obj["Orcamento"]["nome"]);
            $strHtml = $this->SubstituiValores($strHtml, "EMAIL", $obj["Orcamento"]["email"]);
            $strHtml = $this->SubstituiValores($strHtml, "TELEFONE", $obj["Orcamento"]["telefone"]);
            $strHtml = $this->SubstituiValores($strHtml, "EMPRESA", $obj["Orcamento"]["empresa"]);
            $strHtml = $this->SubstituiValores($strHtml, "PERIODO", $obj["Orcamento"]["periodo"]);
            $strHtml = $this->SubstituiValores($strHtml, "MODELO", $obj["Orcamento"]["modelo"]);
            $strHtml = $this->SubstituiValores($strHtml, "LOCAL", $obj["Orcamento"]["local"]);
            $strHtml = $this->SubstituiValores($strHtml, "QUANTIDADE", $obj["Orcamento"]["quantidade"]);
            // $strHtml = $this->SubstituiValores($strHtml, "OPCIONAIS", $obj["Orcamento"]["opcionais"]);
           
            $strHtml = $this->SubstituiValores($strHtml, "POSSUIR", $obj["Orcamento"]["possuir"]);
            $strHtml = $this->SubstituiValores($strHtml, "ATUALIZAR", $obj["Orcamento"]["atualizar"]);
            $strHtml = $this->SubstituiValores($strHtml, "OBSERVACAO", $obj["Orcamento"]["observacao"]);


            $assunto = "Orçamento Aluguel - interativaDS";

            $Email = new CakeEmail('smtp');            
            $Email->to('contato@interativads.com.br'); //contato
            //$Email->cc('rogeriovaz@interativads.com.br');
            $Email->cc('vendas@interativads.com.br');
           
           
            //$Email->from($obj['Orcamento']['email']);
            
            
           

            $Email->subject($assunto);
            $Email->send($strHtml);
        }
    }

    public function EmailOrcamentoCompra($obj) {
        App::uses('CakeEmail', 'Network/Email');

        //exit(debug($dir));
        if ($obj != null) {
            $dir = dirname(WWW_ROOT) . DS . "site" . DS;
            $strHtml = $this->RetornaStrArquivo($dir . "templates/email_orcamento_compra.html");
            $servicos = "";

            $servicos .= !empty($obj["Orcamento"]["CkDispositivo"])?$obj["Orcamento"]["CkDispositivo"].', ':"";
            $servicos .= !empty($obj["Orcamento"]["CkImpressora"])?$obj["Orcamento"]["CkImpressora"].', ':"";
            $servicos .= !empty($obj["Orcamento"]["CkCartao"])?$obj["Orcamento"]["CkCartao"].', ':"";
            $servicos .= !empty($obj["Orcamento"]["CkCodigodeBarras"])?$obj["Orcamento"]["CkCodigodeBarras"].', ':"";
      

            if (strlen($servicos) > 2) {
                $servicos = substr($servicos,0,-2);
            }
            
            //exit(debug($strHtml));
            $strHtml = $this->SubstituiValores($strHtml, "NOME", $obj["Orcamento"]["nome"]);
            $strHtml = $this->SubstituiValores($strHtml, "EMAIL", $obj["Orcamento"]["email"]);
            $strHtml = $this->SubstituiValores($strHtml, "TELEFONE", $obj["Orcamento"]["telefone"]);
            $strHtml = $this->SubstituiValores($strHtml, "EMPRESA", $obj["Orcamento"]["empresa"]);
            $strHtml = $this->SubstituiValores($strHtml, "MODELO", $obj["Orcamento"]["modelo"]);
            $strHtml = $this->SubstituiValores($strHtml, "QUANTIDADE", $obj["Orcamento"]["quantidade"]);
            $strHtml = $this->SubstituiValores($strHtml, "SERVICOS", $servicos);

            $strHtml = $this->SubstituiValores($strHtml, "POSSUIR", $obj["Orcamento"]["possuir"]);
            $strHtml = $this->SubstituiValores($strHtml, "ATUALIZAR", $obj["Orcamento"]["atualizar"]);
            $strHtml = $this->SubstituiValores($strHtml, "OBSERVACAO", $obj["Orcamento"]["observacao"]);


            $assunto = "Orçamento Compra - interativaDS";

            $Email = new CakeEmail('smtp');            
            $Email->to('contato@interativads.com.br'); //contato
            $Email->cc('vendas@interativads.com.br');
            //$Email->cc('rogeriovaz@interativads.com.br');
          
            //$Email->from($obj['Orcamento']['email']);
            
            

            $Email->subject($assunto);
            $Email->send($strHtml);
        }
    }*/

    public function SubstituiValores($strEntrada, $chave, $valor) {
        return str_replace("%%" . $chave . "%%", $valor, $strEntrada);
    }

    public function RetornaStrArquivo($caminho) {
        $data = file_get_contents($caminho); //read the file
        $convert = explode("\n", $data); //create array separate by new line

        $strHtml = "";

        for ($i = 0; $i < count($convert); $i++) {
            $strHtml .= $convert[$i]; //write value by index
        }
        return $strHtml;
    }

    public function TrataCaracteresEmail($str) {

        //metodo de disparo Email 
        return $str;
    }

}

?>